<?php

namespace Pit\Multiva\Contables;

class Bseg extends Table{

    public function __construct($bigQuery){

        $this->attach($bigQuery);

    }

    public function index(){

        $sql =
        " SELECT BELNR AS numeroDocumento, VORGN AS tipoDocumento, KOSTL AS referencia, PSWSL AS moneda, BUKRS AS sociedadSap, CAST(DMBTR AS FLOAT64) AS importe, KOSTL AS ceco, BKTXT AS descripcion, HKONT AS cuenta,".
        " CONCAT(SUBSTR(BUDAT,1,4),'-',SUBSTR(BUDAT,5,2),'-',SUBSTR(BUDAT,7,2)) AS fecha".
        " FROM `pit-analytics-2019.QLIK.Bsegaio`".
        " WHERE KOSTL IN (SELECT DISTINCT(ceco) FROM `pit-analytics-2019.QLIK.Ceco`)".
        " AND HKONT IN(SELECT DISTINCT(cuenta) FROM `pit-analytics-2019.QLIK.Cuentas`)".
        " ORDER BY CAST(BUDAT AS INT64)";
        $bseg=$this->bigQuery->select($sql);
        return $bseg;

    }

}

?>