<?php

use GlpiPlugin\Centreon\Host;

include ('../../../inc/includes.php');

header("Content-Type: text/html; charset=UTF-8");

if(isset($_POST['downtimeid'])){
    Toolbox::logDebug($_POST);
    $host   = new Host();
    $res_d  = $host->cancelActualDownTime($_POST['downtimeid']);
}