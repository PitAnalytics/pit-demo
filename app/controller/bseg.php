<?php

class bseg extends Controller{

    public function __construct(){

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');

    }

    public function index(){

        $accountModel = new Pit\Multiva\Contables\Bseg(BigQuery::getInstance('pit-analytics-2019'));
        $account = $accountModel->index();
        echo(json_encode($account));

    }

}

?>