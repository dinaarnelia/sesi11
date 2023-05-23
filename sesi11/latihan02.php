<?php
    $dta[0]["NAMA"] = "Arnelia";
    $dta[0]["TGL_LAHIR"] = "2004-05-20";
    $dta[0]["JKEL"] = "P";
    $dta[0]["ALAMAT"] = "Badung";
    $dta[0]["JURUSAN"] = "TI-KAB";

    $dta[1]["NAMA"] = "Dina";
    $dta[1]["TGL_LAHIR"] = "2004-02-09";
    $dta[1]["JKEL"] = "P";
    $dta[1]["ALAMAT"] = "Sading";
    $dta[1]["JURUSAN"] = "TI-KAB";

    $dta[2]["NAMA"] = "Jeni";
    $dta[2]["TGL_LAHIR"] = "2004-04-10";
    $dta[2]["JKEL"] = "P";
    $dta[2]["ALAMAT"] = "Denpasar";
    $dta[2]["JURUSAN"] = "TI-KAB";



    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);