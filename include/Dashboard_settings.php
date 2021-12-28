<?php
require_once(getabspath("classes/cipherer.php"));



$tdataDashboard = array();
$tdataDashboard[".ShortName"] = "Dashboard";

//	field labels
$fieldLabelsDashboard = array();
$pageTitlesDashboard = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsDashboard["French"] = array();
	$fieldLabelsDashboard["French"]["audit_vendeurs_id"] = "Audit Vendeurs";
	$fieldLabelsDashboard["French"]["audit_vendeurs_quand"] = "Date";
	$fieldLabelsDashboard["French"]["audit_vendeurs_qui"] = "Vendeur";
	$fieldLabelsDashboard["French"]["audit_vendeurs_quoi"] = "Actioni";
	$fieldLabelsDashboard["French"]["audit_vendeurs_nouveau_salaire"] = "Salaire";
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsDashboard[""] = array();
}

//	search fields
$tdataDashboard[".searchFields"] = array();
$dashField = array();
$dashField[] = array( "table"=>"audit_vendeurs", "field"=>"id" );
$tdataDashboard[".searchFields"]["audit_vendeurs_id"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"audit_vendeurs", "field"=>"quand" );
$tdataDashboard[".searchFields"]["audit_vendeurs_quand"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"audit_vendeurs", "field"=>"qui" );
$tdataDashboard[".searchFields"]["audit_vendeurs_qui"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"audit_vendeurs", "field"=>"quoi" );
$tdataDashboard[".searchFields"]["audit_vendeurs_quoi"] = $dashField;
$dashField = array();
$dashField[] = array( "table"=>"audit_vendeurs", "field"=>"nouveau_salaire" );
$tdataDashboard[".searchFields"]["audit_vendeurs_nouveau_salaire"] = $dashField;

// all search fields
$tdataDashboard[".allSearchFields"] = array();
$tdataDashboard[".allSearchFields"][] = "audit_vendeurs_id";
$tdataDashboard[".allSearchFields"][] = "audit_vendeurs_quand";
$tdataDashboard[".allSearchFields"][] = "audit_vendeurs_qui";
$tdataDashboard[".allSearchFields"][] = "audit_vendeurs_quoi";
$tdataDashboard[".allSearchFields"][] = "audit_vendeurs_nouveau_salaire";

// good like search fields
$tdataDashboard[".googleLikeFields"] = array();
$tdataDashboard[".googleLikeFields"][] = "audit_vendeurs_id";
$tdataDashboard[".googleLikeFields"][] = "audit_vendeurs_quand";
$tdataDashboard[".googleLikeFields"][] = "audit_vendeurs_qui";
$tdataDashboard[".googleLikeFields"][] = "audit_vendeurs_quoi";
$tdataDashboard[".googleLikeFields"][] = "audit_vendeurs_nouveau_salaire";

$tdataDashboard[".dashElements"] = array();

	$dbelement = array( "elementName" => "audit_vendeurs_list", "table" => "audit_vendeurs", "type" => 0);
	$dbelement["cellName"] = "cell_0_0";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "recettes_jour_list", "table" => "recettes_jour", "type" => 0);
	$dbelement["cellName"] = "cell_0_1";

					$dbelement["inlineAdd"] = 0 > 0;
	$dbelement["inlineEdit"] = 0 > 0;
	$dbelement["deleteRecord"] = 0 > 0;

	$dbelement["popupAdd"] = 0 > 0;
	$dbelement["popupEdit"] = 0 > 0;
	$dbelement["popupView"] = 0 > 0;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "recettes_mois_record", "table" => "recettes_mois", "type" => 3);
	$dbelement["cellName"] = "cell_1_0";

				$dbelement["tabsPageTypes"] = array();
		$dbelement["tabsPageTypes"][] = PAGE_VIEW;
		$dbelement["tabsPageTypes"][] = PAGE_EDIT;
		$dbelement["tabsPageTypes"][] = PAGE_ADD;
		$dbelement["initialTabPageType"] = PAGE_VIEW;


	$tdataDashboard[".dashElements"][] = $dbelement;
	$dbelement = array( "elementName" => "recettes_vendeur_mois_Chart_chart", "table" => "recettes_vendeur_mois Chart", "type" => 1);
	$dbelement["cellName"] = "cell_1_1";

			

	$tdataDashboard[".dashElements"][] = $dbelement;

$tdataDashboard[".shortTableName"] = "Dashboard";
$tdataDashboard[".entityType"] = 4;


$tableEvents["Dashboard"] = new eventsBase;
$tdataDashboard[".hasEvents"] = false;


$tdataDashboard[".tableType"] = "dashboard";



$tdataDashboard[".addPageEvents"] = false;

$tables_data["Dashboard"]=&$tdataDashboard;
$field_labels["Dashboard"] = &$fieldLabelsDashboard;
$page_titles["Dashboard"] = &$pageTitlesDashboard;

?>