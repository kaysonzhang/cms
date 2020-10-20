<?php


namespace App\HttpController;


use EasySwoole\Http\AbstractInterface\Controller;



class Test extends Controller
{

    public function index()
    {

        $client = new \EasySwoole\HttpClient\HttpClient();
        $client->setUrl('http://api.finance.ifeng.com/akdaily/?code=sz000895&type=last');
        $response = $client->get();
        $result = $response->getBody();
        var_dump(json_decode($result));
    }

}