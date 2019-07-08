<?php

namespace Pit\Multiva\Contables;

class Account extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT idConcepto, cuenta FROM `pit-analytics-2019.QLIK.Cuentas` ORDER BY idConcepto;";
        $cecos = $this->bigQuery->select($sql);
        return $cecos;

    }
    
}


?>