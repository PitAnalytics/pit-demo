<?php

namespace Pit\Multiva\Contables;

class Ceco extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT idSucursal AS idDepartamento, ceco ".
        " FROM `pit-analytics-2019.QLIK` ORDER BY idSucursal;";
        $cecos = $this->bigQuery->select($sql);
        return $cecos;

    }
    
}

?>