<?php
$dalTableaudit_vendeurs = array();
$dalTableaudit_vendeurs["id"] = array("type"=>3,"varname"=>"id");
$dalTableaudit_vendeurs["quand"] = array("type"=>7,"varname"=>"quand");
$dalTableaudit_vendeurs["qui"] = array("type"=>200,"varname"=>"qui");
$dalTableaudit_vendeurs["quoi"] = array("type"=>200,"varname"=>"quoi");
$dalTableaudit_vendeurs["nouveau_salaire"] = array("type"=>3,"varname"=>"nouveau_salaire");
	$dalTableaudit_vendeurs["id"]["key"]=true;

$dal_info["trigger_at_localhost__audit_vendeurs"] = &$dalTableaudit_vendeurs;
?>