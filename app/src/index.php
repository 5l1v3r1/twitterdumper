<?php

require dirname(__FILE__) . "../../../Vendor/autoload.php";


$smarty = new Smarty();
$smarty->setTemplateDir( dirname(__FILE__) . '/../templates' );

$smarty->display('index.tpl');

