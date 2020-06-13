<?php
/**
 * Created by PhpStorm.
 * User: amrsharkas
 * Date: 13/06/2020
 * Time: 12:01 PM
 */

namespace sharkas\Curl;

use function config;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use function response;

class Quickmetric
{
    public static function event(string $name,float $val,?string $dimension = null)
    {
        //send the event to quickmetrics.io
        $client = new Client([
            'base_uri' => 'https://qckm.io'
        ]);

        $json = [
            'name' => $name,
            'value' => $val
        ];

        if($dimension)
        {
            $json['dimension'] = $dimension;
        }

        try{
            $res = $client->request('POST','/json',[
                'json' => $json,
                'headers' => [
                    'x-qm-key' => config('quickmetric.key')

                ]
            ]);

            return response()->json([
                'res' => $res->getStatusCode(),
                'message' =>$res->getReasonPhrase()

            ]);

        }catch (GuzzleException $e){
            //Handle the exception
            return response()->json([
                'message' => $e->getMessage()
            ],500);
        }


    }
}