<?php
$strTableName="recettes_vendeur_mois Chart";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="recettes_vendeur_mois";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("recettes_vendeur_mois Chart");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["recettes_vendeur_mois Chart"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>