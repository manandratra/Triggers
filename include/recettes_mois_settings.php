<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecettes_mois = array();
	$tdatarecettes_mois[".truncateText"] = true;
	$tdatarecettes_mois[".NumberOfChars"] = 80;
	$tdatarecettes_mois[".ShortName"] = "recettes_mois";
	$tdatarecettes_mois[".OwnerID"] = "";
	$tdatarecettes_mois[".OriginalTable"] = "recettes_mois";

//	field labels
$fieldLabelsrecettes_mois = array();
$fieldToolTipsrecettes_mois = array();
$pageTitlesrecettes_mois = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrecettes_mois["French"] = array();
	$fieldToolTipsrecettes_mois["French"] = array();
	$pageTitlesrecettes_mois["French"] = array();
	$fieldLabelsrecettes_mois["French"]["rc_year"] = "Annee";
	$fieldToolTipsrecettes_mois["French"]["rc_year"] = "";
	$fieldLabelsrecettes_mois["French"]["rc_month"] = "Mois";
	$fieldToolTipsrecettes_mois["French"]["rc_month"] = "";
	$fieldLabelsrecettes_mois["French"]["rc_montant"] = "Montant";
	$fieldToolTipsrecettes_mois["French"]["rc_montant"] = "";
	$fieldLabelsrecettes_mois["French"]["id"] = "Id";
	$fieldToolTipsrecettes_mois["French"]["id"] = "";
	if (count($fieldToolTipsrecettes_mois["French"]))
		$tdatarecettes_mois[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecettes_mois[""] = array();
	$fieldToolTipsrecettes_mois[""] = array();
	$pageTitlesrecettes_mois[""] = array();
	if (count($fieldToolTipsrecettes_mois[""]))
		$tdatarecettes_mois[".isUseToolTips"] = true;
}


	$tdatarecettes_mois[".NCSearch"] = true;



$tdatarecettes_mois[".shortTableName"] = "recettes_mois";
$tdatarecettes_mois[".nSecOptions"] = 0;
$tdatarecettes_mois[".recsPerRowPrint"] = 1;
$tdatarecettes_mois[".mainTableOwnerID"] = "";
$tdatarecettes_mois[".moveNext"] = 1;
$tdatarecettes_mois[".entityType"] = 0;

$tdatarecettes_mois[".strOriginalTableName"] = "recettes_mois";

	



$tdatarecettes_mois[".showAddInPopup"] = false;

$tdatarecettes_mois[".showEditInPopup"] = false;

$tdatarecettes_mois[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecettes_mois[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecettes_mois[".fieldsForRegister"] = array();

$tdatarecettes_mois[".listAjax"] = false;

	$tdatarecettes_mois[".audit"] = false;

	$tdatarecettes_mois[".locking"] = false;

$tdatarecettes_mois[".edit"] = true;
$tdatarecettes_mois[".afterEditAction"] = 1;
$tdatarecettes_mois[".closePopupAfterEdit"] = 1;
$tdatarecettes_mois[".afterEditActionDetTable"] = "";

$tdatarecettes_mois[".add"] = true;
$tdatarecettes_mois[".afterAddAction"] = 1;
$tdatarecettes_mois[".closePopupAfterAdd"] = 1;
$tdatarecettes_mois[".afterAddActionDetTable"] = "";

$tdatarecettes_mois[".list"] = true;

$tdatarecettes_mois[".inlineEdit"] = true;
$tdatarecettes_mois[".inlineAdd"] = true;
$tdatarecettes_mois[".view"] = true;

$tdatarecettes_mois[".import"] = true;

$tdatarecettes_mois[".exportTo"] = true;


$tdatarecettes_mois[".delete"] = true;

$tdatarecettes_mois[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarecettes_mois[".searchSaving"] = false;
//

$tdatarecettes_mois[".showSearchPanel"] = true;
		$tdatarecettes_mois[".flexibleSearch"] = true;

$tdatarecettes_mois[".isUseAjaxSuggest"] = true;

$tdatarecettes_mois[".rowHighlite"] = true;



$tdatarecettes_mois[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecettes_mois[".isUseTimeForSearch"] = false;



$tdatarecettes_mois[".badgeColor"] = "D2691E";


$tdatarecettes_mois[".allSearchFields"] = array();
$tdatarecettes_mois[".filterFields"] = array();
$tdatarecettes_mois[".requiredSearchFields"] = array();

$tdatarecettes_mois[".allSearchFields"][] = "rc_year";
	$tdatarecettes_mois[".allSearchFields"][] = "rc_month";
	$tdatarecettes_mois[".allSearchFields"][] = "rc_montant";
	$tdatarecettes_mois[".allSearchFields"][] = "id";
	

$tdatarecettes_mois[".googleLikeFields"] = array();
$tdatarecettes_mois[".googleLikeFields"][] = "rc_year";
$tdatarecettes_mois[".googleLikeFields"][] = "rc_month";
$tdatarecettes_mois[".googleLikeFields"][] = "rc_montant";
$tdatarecettes_mois[".googleLikeFields"][] = "id";


$tdatarecettes_mois[".advSearchFields"] = array();
$tdatarecettes_mois[".advSearchFields"][] = "rc_year";
$tdatarecettes_mois[".advSearchFields"][] = "rc_month";
$tdatarecettes_mois[".advSearchFields"][] = "rc_montant";
$tdatarecettes_mois[".advSearchFields"][] = "id";

$tdatarecettes_mois[".tableType"] = "list";

$tdatarecettes_mois[".printerPageOrientation"] = 0;
$tdatarecettes_mois[".nPrinterPageScale"] = 100;

$tdatarecettes_mois[".nPrinterSplitRecords"] = 40;

$tdatarecettes_mois[".nPrinterPDFSplitRecords"] = 40;



$tdatarecettes_mois[".geocodingEnabled"] = false;





$tdatarecettes_mois[".listGridLayout"] = 3;

$tdatarecettes_mois[".isDisplayLoading"] = true;

$tdatarecettes_mois[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatarecettes_mois[".pageSize"] = 20;

$tdatarecettes_mois[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecettes_mois[".strOrderBy"] = $tstrOrderBy;

$tdatarecettes_mois[".orderindexes"] = array();

$tdatarecettes_mois[".sqlHead"] = "SELECT rc_year,  	rc_month,  	rc_montant,  	id";
$tdatarecettes_mois[".sqlFrom"] = "FROM recettes_mois";
$tdatarecettes_mois[".sqlWhereExpr"] = "";
$tdatarecettes_mois[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecettes_mois[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecettes_mois[".arrGroupsPerPage"] = $arrGPP;

$tdatarecettes_mois[".highlightSearchResults"] = true;

$tableKeysrecettes_mois = array();
$tableKeysrecettes_mois[] = "id";
$tdatarecettes_mois[".Keys"] = $tableKeysrecettes_mois;

$tdatarecettes_mois[".listFields"] = array();
$tdatarecettes_mois[".listFields"][] = "rc_year";
$tdatarecettes_mois[".listFields"][] = "rc_month";
$tdatarecettes_mois[".listFields"][] = "rc_montant";
$tdatarecettes_mois[".listFields"][] = "id";

$tdatarecettes_mois[".hideMobileList"] = array();


$tdatarecettes_mois[".viewFields"] = array();
$tdatarecettes_mois[".viewFields"][] = "rc_year";
$tdatarecettes_mois[".viewFields"][] = "rc_month";
$tdatarecettes_mois[".viewFields"][] = "rc_montant";
$tdatarecettes_mois[".viewFields"][] = "id";

$tdatarecettes_mois[".addFields"] = array();
$tdatarecettes_mois[".addFields"][] = "rc_year";
$tdatarecettes_mois[".addFields"][] = "rc_month";
$tdatarecettes_mois[".addFields"][] = "rc_montant";

$tdatarecettes_mois[".masterListFields"] = array();
$tdatarecettes_mois[".masterListFields"][] = "rc_year";
$tdatarecettes_mois[".masterListFields"][] = "rc_month";
$tdatarecettes_mois[".masterListFields"][] = "rc_montant";
$tdatarecettes_mois[".masterListFields"][] = "id";

$tdatarecettes_mois[".inlineAddFields"] = array();
$tdatarecettes_mois[".inlineAddFields"][] = "rc_year";
$tdatarecettes_mois[".inlineAddFields"][] = "rc_month";
$tdatarecettes_mois[".inlineAddFields"][] = "rc_montant";

$tdatarecettes_mois[".editFields"] = array();
$tdatarecettes_mois[".editFields"][] = "rc_year";
$tdatarecettes_mois[".editFields"][] = "rc_month";
$tdatarecettes_mois[".editFields"][] = "rc_montant";

$tdatarecettes_mois[".inlineEditFields"] = array();
$tdatarecettes_mois[".inlineEditFields"][] = "rc_year";
$tdatarecettes_mois[".inlineEditFields"][] = "rc_month";
$tdatarecettes_mois[".inlineEditFields"][] = "rc_montant";

$tdatarecettes_mois[".exportFields"] = array();
$tdatarecettes_mois[".exportFields"][] = "rc_year";
$tdatarecettes_mois[".exportFields"][] = "rc_month";
$tdatarecettes_mois[".exportFields"][] = "rc_montant";
$tdatarecettes_mois[".exportFields"][] = "id";

$tdatarecettes_mois[".importFields"] = array();
$tdatarecettes_mois[".importFields"][] = "rc_year";
$tdatarecettes_mois[".importFields"][] = "rc_month";
$tdatarecettes_mois[".importFields"][] = "rc_montant";
$tdatarecettes_mois[".importFields"][] = "id";

$tdatarecettes_mois[".printFields"] = array();

//	rc_year
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rc_year";
	$fdata["GoodName"] = "rc_year";
	$fdata["ownerTable"] = "recettes_mois";
	$fdata["Label"] = GetFieldLabel("recettes_mois","rc_year");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_year";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_year";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_mois["rc_year"] = $fdata;
//	rc_month
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rc_month";
	$fdata["GoodName"] = "rc_month";
	$fdata["ownerTable"] = "recettes_mois";
	$fdata["Label"] = GetFieldLabel("recettes_mois","rc_month");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_month";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_month";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_mois["rc_month"] = $fdata;
//	rc_montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rc_montant";
	$fdata["GoodName"] = "rc_montant";
	$fdata["ownerTable"] = "recettes_mois";
	$fdata["Label"] = GetFieldLabel("recettes_mois","rc_montant");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "rc_montant";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_montant";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_mois["rc_montant"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "recettes_mois";
	$fdata["Label"] = GetFieldLabel("recettes_mois","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_mois["id"] = $fdata;


$tables_data["recettes_mois"]=&$tdatarecettes_mois;
$field_labels["recettes_mois"] = &$fieldLabelsrecettes_mois;
$fieldToolTips["recettes_mois"] = &$fieldToolTipsrecettes_mois;
$page_titles["recettes_mois"] = &$pageTitlesrecettes_mois;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recettes_mois"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recettes_mois"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recettes_mois()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rc_year,  	rc_month,  	rc_montant,  	id";
$proto0["m_strFrom"] = "FROM recettes_mois";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_year",
	"m_strTable" => "recettes_mois",
	"m_srcTableName" => "recettes_mois"
));

$proto6["m_sql"] = "rc_year";
$proto6["m_srcTableName"] = "recettes_mois";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_month",
	"m_strTable" => "recettes_mois",
	"m_srcTableName" => "recettes_mois"
));

$proto8["m_sql"] = "rc_month";
$proto8["m_srcTableName"] = "recettes_mois";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_montant",
	"m_strTable" => "recettes_mois",
	"m_srcTableName" => "recettes_mois"
));

$proto10["m_sql"] = "rc_montant";
$proto10["m_srcTableName"] = "recettes_mois";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "recettes_mois",
	"m_srcTableName" => "recettes_mois"
));

$proto12["m_sql"] = "id";
$proto12["m_srcTableName"] = "recettes_mois";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "recettes_mois";
$proto15["m_srcTableName"] = "recettes_mois";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "rc_year";
$proto15["m_columns"][] = "rc_month";
$proto15["m_columns"][] = "rc_montant";
$proto15["m_columns"][] = "id";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "recettes_mois";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "recettes_mois";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="recettes_mois";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recettes_mois = createSqlQuery_recettes_mois();


	
		;

				

$tdatarecettes_mois[".sqlquery"] = $queryData_recettes_mois;

$tableEvents["recettes_mois"] = new eventsBase;
$tdatarecettes_mois[".hasEvents"] = false;

?>