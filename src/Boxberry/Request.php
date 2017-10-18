<?php

namespace Domatskiy\Boxberry;

use Domatskiy\Boxberry\Exception\ErrorException;
use Domatskiy\Boxberry\Exception\ForbiddenException;
use Domatskiy\Boxberry\Exception\JsonException;
use Domatskiy\Boxberry\Exception\NotFoundException;
use Domatskiy\Boxberry\Type\Result;

abstract class Request
{
    const METHOD_GET = 'GET';
    const METHOD_POST = 'POST';
    const METHOD_PUT = 'PUT';
    const METHOD_DELETE = 'DELETE';

    protected $token = '';
    protected $api_url = 'http://api.boxberry.de/json.php';


    /**
     * Request constructor.
     * @param $session_id
     * @param $is_test
     */
    function __construct($token)
    {
		$this->token = $token;
    }

    /**
     * @param $method
     * @param $url
     * @param array $data
     * @return Result
     */
    protected function __request($request_method, $method, $object, array $data = array())
    {
        $full_url = $this->api_url;

        $client = new \GuzzleHttp\Client();
        $params = array();

        if($request_method == self::METHOD_POST)
        {
            if($method)
                $data["method"]= $method;

            $params['sdata'] = json_encode($data);
            $params['method'] = $method;
            $params['token'] = $this->token;
        }
        elseif($request_method == self::METHOD_GET)
        {
            $d = array();

            $d['token'] = $this->token;
            $d['method'] = $method;

            foreach($data as $key => $val)
                $d[$key] = urlencode($val);

            $full_url .= $d ? '?'.http_build_query($d) : '';
        }

        $res = $client->request($request_method, $full_url, $params);

        if((int)$res->getStatusCode() == 200)
        {
            $content_type = $res->getHeader('Content-Type');

            if(is_array($content_type))
                $content_type = current($content_type);

            if(strpos($content_type, 'application/json') !== false)
            {

                try{
                    $data = (array)json_decode($res->getBody(), true);

                    if(count($data)<=0 or array_key_exists('err', $data[0]))
                        throw new ErrorException($data[0]['err']);

                }
                catch (\Exception $e)
                {
                    throw new JsonException($e->getMessage(), $e->getCode());
                }

                $o = new $object($data);

                return $o;

            }

        }
        elseif ($res->getStatusCode() == 403)
            throw new ForbiddenException($full_url);
        elseif ($res->getStatusCode() == 404)
            throw new NotFoundException($full_url);
        else
        {
            new \Exception('what is it?');
        }

    }
}