<?php
    $dta["NAMA"] = "Arnelia";
    $dta["TGL_LAHIR"] = "2004-05-20";
    $dta["JKEL"] = "P";
    $dta["ALAMAT"] = "Badung";
    $dta["JURUSAN"] = "TI-KAB";

    header("Content-type: application/json; charset=utf-8");
    echo json_encode($dta);