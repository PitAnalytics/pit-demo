<?php

namespace Pit\Multiva\Contables;

class Office extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql = "SELECT id AS idDepartamento, area, sucursal AS departamento".
        " FROM `pit-analytics-2019.QLIK.Sucursales`".
        " ORDER BY id";
        $cuentas = $this->bigQuery->select($sql);
        return $cuentas;

    }

}

?>