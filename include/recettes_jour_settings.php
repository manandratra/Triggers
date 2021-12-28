<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecettes_jour = array();
	$tdatarecettes_jour[".truncateText"] = true;
	$tdatarecettes_jour[".NumberOfChars"] = 80;
	$tdatarecettes_jour[".ShortName"] = "recettes_jour";
	$tdatarecettes_jour[".OwnerID"] = "";
	$tdatarecettes_jour[".OriginalTable"] = "recettes_jour";

//	field labels
$fieldLabelsrecettes_jour = array();
$fieldToolTipsrecettes_jour = array();
$pageTitlesrecettes_jour = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrecettes_jour["French"] = array();
	$fieldToolTipsrecettes_jour["French"] = array();
	$pageTitlesrecettes_jour["French"] = array();
	$fieldLabelsrecettes_jour["French"]["rc_date"] = "Date";
	$fieldToolTipsrecettes_jour["French"]["rc_date"] = "";
	$fieldLabelsrecettes_jour["French"]["rc_montant"] = "Montant";
	$fieldToolTipsrecettes_jour["French"]["rc_montant"] = "";
	$fieldLabelsrecettes_jour["French"]["id"] = "Id";
	$fieldToolTipsrecettes_jour["French"]["id"] = "";
	if (count($fieldToolTipsrecettes_jour["French"]))
		$tdatarecettes_jour[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecettes_jour[""] = array();
	$fieldToolTipsrecettes_jour[""] = array();
	$pageTitlesrecettes_jour[""] = array();
	if (count($fieldToolTipsrecettes_jour[""]))
		$tdatarecettes_jour[".isUseToolTips"] = true;
}


	$tdatarecettes_jour[".NCSearch"] = true;



$tdatarecettes_jour[".shortTableName"] = "recettes_jour";
$tdatarecettes_jour[".nSecOptions"] = 0;
$tdatarecettes_jour[".recsPerRowPrint"] = 1;
$tdatarecettes_jour[".mainTableOwnerID"] = "";
$tdatarecettes_jour[".moveNext"] = 1;
$tdatarecettes_jour[".entityType"] = 0;

$tdatarecettes_jour[".strOriginalTableName"] = "recettes_jour";

	



$tdatarecettes_jour[".showAddInPopup"] = false;

$tdatarecettes_jour[".showEditInPopup"] = false;

$tdatarecettes_jour[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecettes_jour[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecettes_jour[".fieldsForRegister"] = array();

$tdatarecettes_jour[".listAjax"] = false;

	$tdatarecettes_jour[".audit"] = false;

	$tdatarecettes_jour[".locking"] = false;

$tdatarecettes_jour[".edit"] = true;
$tdatarecettes_jour[".afterEditAction"] = 1;
$tdatarecettes_jour[".closePopupAfterEdit"] = 1;
$tdatarecettes_jour[".afterEditActionDetTable"] = "";

$tdatarecettes_jour[".add"] = true;
$tdatarecettes_jour[".afterAddAction"] = 1;
$tdatarecettes_jour[".closePopupAfterAdd"] = 1;
$tdatarecettes_jour[".afterAddActionDetTable"] = "";

$tdatarecettes_jour[".list"] = true;

$tdatarecettes_jour[".inlineEdit"] = true;
$tdatarecettes_jour[".inlineAdd"] = true;
$tdatarecettes_jour[".view"] = true;




$tdatarecettes_jour[".delete"] = true;

$tdatarecettes_jour[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarecettes_jour[".searchSaving"] = false;
//

$tdatarecettes_jour[".showSearchPanel"] = true;
		$tdatarecettes_jour[".flexibleSearch"] = true;

$tdatarecettes_jour[".isUseAjaxSuggest"] = true;

$tdatarecettes_jour[".rowHighlite"] = true;



$tdatarecettes_jour[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecettes_jour[".isUseTimeForSearch"] = false;



$tdatarecettes_jour[".badgeColor"] = "6493EA";


$tdatarecettes_jour[".allSearchFields"] = array();
$tdatarecettes_jour[".filterFields"] = array();
$tdatarecettes_jour[".requiredSearchFields"] = array();

$tdatarecettes_jour[".allSearchFields"][] = "rc_date";
	$tdatarecettes_jour[".allSearchFields"][] = "rc_montant";
	$tdatarecettes_jour[".allSearchFields"][] = "id";
	

$tdatarecettes_jour[".googleLikeFields"] = array();
$tdatarecettes_jour[".googleLikeFields"][] = "rc_date";
$tdatarecettes_jour[".googleLikeFields"][] = "rc_montant";
$tdatarecettes_jour[".googleLikeFields"][] = "id";


$tdatarecettes_jour[".advSearchFields"] = array();
$tdatarecettes_jour[".advSearchFields"][] = "rc_date";
$tdatarecettes_jour[".advSearchFields"][] = "rc_montant";
$tdatarecettes_jour[".advSearchFields"][] = "id";

$tdatarecettes_jour[".tableType"] = "list";

$tdatarecettes_jour[".printerPageOrientation"] = 0;
$tdatarecettes_jour[".nPrinterPageScale"] = 100;

$tdatarecettes_jour[".nPrinterSplitRecords"] = 40;

$tdatarecettes_jour[".nPrinterPDFSplitRecords"] = 40;



$tdatarecettes_jour[".geocodingEnabled"] = false;





$tdatarecettes_jour[".listGridLayout"] = 3;

$tdatarecettes_jour[".isDisplayLoading"] = true;

$tdatarecettes_jour[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatarecettes_jour[".pageSize"] = 20;

$tdatarecettes_jour[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecettes_jour[".strOrderBy"] = $tstrOrderBy;

$tdatarecettes_jour[".orderindexes"] = array();

$tdatarecettes_jour[".sqlHead"] = "SELECT rc_date,  	rc_montant,  	id";
$tdatarecettes_jour[".sqlFrom"] = "FROM recettes_jour";
$tdatarecettes_jour[".sqlWhereExpr"] = "";
$tdatarecettes_jour[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecettes_jour[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecettes_jour[".arrGroupsPerPage"] = $arrGPP;

$tdatarecettes_jour[".highlightSearchResults"] = true;

$tableKeysrecettes_jour = array();
$tableKeysrecettes_jour[] = "id";
$tdatarecettes_jour[".Keys"] = $tableKeysrecettes_jour;

$tdatarecettes_jour[".listFields"] = array();
$tdatarecettes_jour[".listFields"][] = "rc_date";
$tdatarecettes_jour[".listFields"][] = "rc_montant";
$tdatarecettes_jour[".listFields"][] = "id";

$tdatarecettes_jour[".hideMobileList"] = array();


$tdatarecettes_jour[".viewFields"] = array();
$tdatarecettes_jour[".viewFields"][] = "rc_date";
$tdatarecettes_jour[".viewFields"][] = "rc_montant";
$tdatarecettes_jour[".viewFields"][] = "id";

$tdatarecettes_jour[".addFields"] = array();
$tdatarecettes_jour[".addFields"][] = "rc_date";
$tdatarecettes_jour[".addFields"][] = "rc_montant";

$tdatarecettes_jour[".masterListFields"] = array();
$tdatarecettes_jour[".masterListFields"][] = "rc_date";
$tdatarecettes_jour[".masterListFields"][] = "rc_montant";
$tdatarecettes_jour[".masterListFields"][] = "id";

$tdatarecettes_jour[".inlineAddFields"] = array();
$tdatarecettes_jour[".inlineAddFields"][] = "rc_date";
$tdatarecettes_jour[".inlineAddFields"][] = "rc_montant";

$tdatarecettes_jour[".editFields"] = array();
$tdatarecettes_jour[".editFields"][] = "rc_date";
$tdatarecettes_jour[".editFields"][] = "rc_montant";

$tdatarecettes_jour[".inlineEditFields"] = array();
$tdatarecettes_jour[".inlineEditFields"][] = "rc_date";
$tdatarecettes_jour[".inlineEditFields"][] = "rc_montant";

$tdatarecettes_jour[".exportFields"] = array();

$tdatarecettes_jour[".importFields"] = array();

$tdatarecettes_jour[".printFields"] = array();

//	rc_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "rc_date";
	$fdata["GoodName"] = "rc_date";
	$fdata["ownerTable"] = "recettes_jour";
	$fdata["Label"] = GetFieldLabel("recettes_jour","rc_date");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "rc_date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rc_date";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
// the end of search options settings




	$tdatarecettes_jour["rc_date"] = $fdata;
//	rc_montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rc_montant";
	$fdata["GoodName"] = "rc_montant";
	$fdata["ownerTable"] = "recettes_jour";
	$fdata["Label"] = GetFieldLabel("recettes_jour","rc_montant");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_jour["rc_montant"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "recettes_jour";
	$fdata["Label"] = GetFieldLabel("recettes_jour","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatarecettes_jour["id"] = $fdata;


$tables_data["recettes_jour"]=&$tdatarecettes_jour;
$field_labels["recettes_jour"] = &$fieldLabelsrecettes_jour;
$fieldToolTips["recettes_jour"] = &$fieldToolTipsrecettes_jour;
$page_titles["recettes_jour"] = &$pageTitlesrecettes_jour;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recettes_jour"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recettes_jour"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recettes_jour()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "rc_date,  	rc_montant,  	id";
$proto0["m_strFrom"] = "FROM recettes_jour";
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
	"m_strName" => "rc_date",
	"m_strTable" => "recettes_jour",
	"m_srcTableName" => "recettes_jour"
));

$proto6["m_sql"] = "rc_date";
$proto6["m_srcTableName"] = "recettes_jour";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_montant",
	"m_strTable" => "recettes_jour",
	"m_srcTableName" => "recettes_jour"
));

$proto8["m_sql"] = "rc_montant";
$proto8["m_srcTableName"] = "recettes_jour";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "recettes_jour",
	"m_srcTableName" => "recettes_jour"
));

$proto10["m_sql"] = "id";
$proto10["m_srcTableName"] = "recettes_jour";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "recettes_jour";
$proto13["m_srcTableName"] = "recettes_jour";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "rc_date";
$proto13["m_columns"][] = "rc_montant";
$proto13["m_columns"][] = "id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "recettes_jour";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "recettes_jour";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="recettes_jour";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recettes_jour = createSqlQuery_recettes_jour();


	
		;

			

$tdatarecettes_jour[".sqlquery"] = $queryData_recettes_jour;

$tableEvents["recettes_jour"] = new eventsBase;
$tdatarecettes_jour[".hasEvents"] = false;

?>