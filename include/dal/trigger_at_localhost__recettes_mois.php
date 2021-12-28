<?php
$dalTablerecettes_mois = array();
$dalTablerecettes_mois["rc_year"] = array("type"=>3,"varname"=>"rc_year");
$dalTablerecettes_mois["rc_month"] = array("type"=>3,"varname"=>"rc_month");
$dalTablerecettes_mois["rc_montant"] = array("type"=>14,"varname"=>"rc_montant");
$dalTablerecettes_mois["id"] = array("type"=>3,"varname"=>"id");
	$dalTablerecettes_mois["id"]["key"]=true;

$dal_info["trigger_at_localhost__recettes_mois"] = &$dalTablerecettes_mois;
?>