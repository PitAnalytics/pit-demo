<?php

class cecos{

    public function __construct(){

        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');

    }

    public function index(){

        $cecosModel = new Pit\Multiva\Contables\Ceco(BigQuery::getInstance('pit-analytics-2019'));
        $cecos = $cecosModel->index();
        echo(json_encode($cecos));
        
    }
    
}


?>