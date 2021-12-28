<?php
require_once(getabspath("classes/cipherer.php"));




$tdatarecettes_vendeurs = array();
	$tdatarecettes_vendeurs[".truncateText"] = true;
	$tdatarecettes_vendeurs[".NumberOfChars"] = 80;
	$tdatarecettes_vendeurs[".ShortName"] = "recettes_vendeurs";
	$tdatarecettes_vendeurs[".OwnerID"] = "";
	$tdatarecettes_vendeurs[".OriginalTable"] = "recettes_vendeurs";

//	field labels
$fieldLabelsrecettes_vendeurs = array();
$fieldToolTipsrecettes_vendeurs = array();
$pageTitlesrecettes_vendeurs = array();

if(mlang_getcurrentlang()=="French")
{
	$fieldLabelsrecettes_vendeurs["French"] = array();
	$fieldToolTipsrecettes_vendeurs["French"] = array();
	$pageTitlesrecettes_vendeurs["French"] = array();
	$fieldLabelsrecettes_vendeurs["French"]["vd_id"] = "Vd Id";
	$fieldToolTipsrecettes_vendeurs["French"]["vd_id"] = "";
	$fieldLabelsrecettes_vendeurs["French"]["rc_date"] = "Date";
	$fieldToolTipsrecettes_vendeurs["French"]["rc_date"] = "";
	$fieldLabelsrecettes_vendeurs["French"]["rc_montant"] = "Montant";
	$fieldToolTipsrecettes_vendeurs["French"]["rc_montant"] = "";
	if (count($fieldToolTipsrecettes_vendeurs["French"]))
		$tdatarecettes_vendeurs[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsrecettes_vendeurs[""] = array();
	$fieldToolTipsrecettes_vendeurs[""] = array();
	$pageTitlesrecettes_vendeurs[""] = array();
	if (count($fieldToolTipsrecettes_vendeurs[""]))
		$tdatarecettes_vendeurs[".isUseToolTips"] = true;
}


	$tdatarecettes_vendeurs[".NCSearch"] = true;



$tdatarecettes_vendeurs[".shortTableName"] = "recettes_vendeurs";
$tdatarecettes_vendeurs[".nSecOptions"] = 0;
$tdatarecettes_vendeurs[".recsPerRowPrint"] = 1;
$tdatarecettes_vendeurs[".mainTableOwnerID"] = "";
$tdatarecettes_vendeurs[".moveNext"] = 1;
$tdatarecettes_vendeurs[".entityType"] = 0;

$tdatarecettes_vendeurs[".strOriginalTableName"] = "recettes_vendeurs";

	



$tdatarecettes_vendeurs[".showAddInPopup"] = false;

$tdatarecettes_vendeurs[".showEditInPopup"] = false;

$tdatarecettes_vendeurs[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatarecettes_vendeurs[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatarecettes_vendeurs[".fieldsForRegister"] = array();

$tdatarecettes_vendeurs[".listAjax"] = false;

	$tdatarecettes_vendeurs[".audit"] = false;

	$tdatarecettes_vendeurs[".locking"] = false;

$tdatarecettes_vendeurs[".edit"] = true;
$tdatarecettes_vendeurs[".afterEditAction"] = 1;
$tdatarecettes_vendeurs[".closePopupAfterEdit"] = 1;
$tdatarecettes_vendeurs[".afterEditActionDetTable"] = "";

$tdatarecettes_vendeurs[".add"] = true;
$tdatarecettes_vendeurs[".afterAddAction"] = 1;
$tdatarecettes_vendeurs[".closePopupAfterAdd"] = 1;
$tdatarecettes_vendeurs[".afterAddActionDetTable"] = "";

$tdatarecettes_vendeurs[".list"] = true;

$tdatarecettes_vendeurs[".inlineEdit"] = true;
$tdatarecettes_vendeurs[".inlineAdd"] = true;
$tdatarecettes_vendeurs[".view"] = true;




$tdatarecettes_vendeurs[".delete"] = true;

$tdatarecettes_vendeurs[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatarecettes_vendeurs[".searchSaving"] = false;
//

$tdatarecettes_vendeurs[".showSearchPanel"] = true;
		$tdatarecettes_vendeurs[".flexibleSearch"] = true;

$tdatarecettes_vendeurs[".isUseAjaxSuggest"] = true;

$tdatarecettes_vendeurs[".rowHighlite"] = true;



$tdatarecettes_vendeurs[".addPageEvents"] = false;

// use timepicker for search panel
$tdatarecettes_vendeurs[".isUseTimeForSearch"] = false;



$tdatarecettes_vendeurs[".badgeColor"] = "E67349";


$tdatarecettes_vendeurs[".allSearchFields"] = array();
$tdatarecettes_vendeurs[".filterFields"] = array();
$tdatarecettes_vendeurs[".requiredSearchFields"] = array();

$tdatarecettes_vendeurs[".allSearchFields"][] = "vd_id";
	$tdatarecettes_vendeurs[".allSearchFields"][] = "rc_date";
	$tdatarecettes_vendeurs[".allSearchFields"][] = "rc_montant";
	

$tdatarecettes_vendeurs[".googleLikeFields"] = array();
$tdatarecettes_vendeurs[".googleLikeFields"][] = "vd_id";
$tdatarecettes_vendeurs[".googleLikeFields"][] = "rc_date";
$tdatarecettes_vendeurs[".googleLikeFields"][] = "rc_montant";


$tdatarecettes_vendeurs[".advSearchFields"] = array();
$tdatarecettes_vendeurs[".advSearchFields"][] = "vd_id";
$tdatarecettes_vendeurs[".advSearchFields"][] = "rc_date";
$tdatarecettes_vendeurs[".advSearchFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".tableType"] = "list";

$tdatarecettes_vendeurs[".printerPageOrientation"] = 0;
$tdatarecettes_vendeurs[".nPrinterPageScale"] = 100;

$tdatarecettes_vendeurs[".nPrinterSplitRecords"] = 40;

$tdatarecettes_vendeurs[".nPrinterPDFSplitRecords"] = 40;



$tdatarecettes_vendeurs[".geocodingEnabled"] = false;





$tdatarecettes_vendeurs[".listGridLayout"] = 3;

$tdatarecettes_vendeurs[".isDisplayLoading"] = true;

$tdatarecettes_vendeurs[".isResizeColumns"] = true;



// view page pdf

// print page pdf


$tdatarecettes_vendeurs[".pageSize"] = 20;

$tdatarecettes_vendeurs[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatarecettes_vendeurs[".strOrderBy"] = $tstrOrderBy;

$tdatarecettes_vendeurs[".orderindexes"] = array();

$tdatarecettes_vendeurs[".sqlHead"] = "SELECT vd_id,  	rc_date,  	rc_montant";
$tdatarecettes_vendeurs[".sqlFrom"] = "FROM recettes_vendeurs";
$tdatarecettes_vendeurs[".sqlWhereExpr"] = "";
$tdatarecettes_vendeurs[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatarecettes_vendeurs[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatarecettes_vendeurs[".arrGroupsPerPage"] = $arrGPP;

$tdatarecettes_vendeurs[".highlightSearchResults"] = true;

$tableKeysrecettes_vendeurs = array();
$tableKeysrecettes_vendeurs[] = "vd_id";
$tableKeysrecettes_vendeurs[] = "rc_date";
$tdatarecettes_vendeurs[".Keys"] = $tableKeysrecettes_vendeurs;

$tdatarecettes_vendeurs[".listFields"] = array();
$tdatarecettes_vendeurs[".listFields"][] = "vd_id";
$tdatarecettes_vendeurs[".listFields"][] = "rc_date";
$tdatarecettes_vendeurs[".listFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".hideMobileList"] = array();


$tdatarecettes_vendeurs[".viewFields"] = array();
$tdatarecettes_vendeurs[".viewFields"][] = "vd_id";
$tdatarecettes_vendeurs[".viewFields"][] = "rc_date";
$tdatarecettes_vendeurs[".viewFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".addFields"] = array();
$tdatarecettes_vendeurs[".addFields"][] = "vd_id";
$tdatarecettes_vendeurs[".addFields"][] = "rc_date";
$tdatarecettes_vendeurs[".addFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".masterListFields"] = array();
$tdatarecettes_vendeurs[".masterListFields"][] = "vd_id";
$tdatarecettes_vendeurs[".masterListFields"][] = "rc_date";
$tdatarecettes_vendeurs[".masterListFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".inlineAddFields"] = array();
$tdatarecettes_vendeurs[".inlineAddFields"][] = "vd_id";
$tdatarecettes_vendeurs[".inlineAddFields"][] = "rc_date";
$tdatarecettes_vendeurs[".inlineAddFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".editFields"] = array();
$tdatarecettes_vendeurs[".editFields"][] = "vd_id";
$tdatarecettes_vendeurs[".editFields"][] = "rc_date";
$tdatarecettes_vendeurs[".editFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".inlineEditFields"] = array();
$tdatarecettes_vendeurs[".inlineEditFields"][] = "vd_id";
$tdatarecettes_vendeurs[".inlineEditFields"][] = "rc_date";
$tdatarecettes_vendeurs[".inlineEditFields"][] = "rc_montant";

$tdatarecettes_vendeurs[".exportFields"] = array();

$tdatarecettes_vendeurs[".importFields"] = array();

$tdatarecettes_vendeurs[".printFields"] = array();

//	vd_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "vd_id";
	$fdata["GoodName"] = "vd_id";
	$fdata["ownerTable"] = "recettes_vendeurs";
	$fdata["Label"] = GetFieldLabel("recettes_vendeurs","vd_id");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "vd_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "vd_id";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "vendeurs";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "vd_id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "vd_id";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings




	$tdatarecettes_vendeurs["vd_id"] = $fdata;
//	rc_date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "rc_date";
	$fdata["GoodName"] = "rc_date";
	$fdata["ownerTable"] = "recettes_vendeurs";
	$fdata["Label"] = GetFieldLabel("recettes_vendeurs","rc_date");
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




	$tdatarecettes_vendeurs["rc_date"] = $fdata;
//	rc_montant
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "rc_montant";
	$fdata["GoodName"] = "rc_montant";
	$fdata["ownerTable"] = "recettes_vendeurs";
	$fdata["Label"] = GetFieldLabel("recettes_vendeurs","rc_montant");
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




	$tdatarecettes_vendeurs["rc_montant"] = $fdata;


$tables_data["recettes_vendeurs"]=&$tdatarecettes_vendeurs;
$field_labels["recettes_vendeurs"] = &$fieldLabelsrecettes_vendeurs;
$fieldToolTips["recettes_vendeurs"] = &$fieldToolTipsrecettes_vendeurs;
$page_titles["recettes_vendeurs"] = &$pageTitlesrecettes_vendeurs;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["recettes_vendeurs"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["recettes_vendeurs"] = array();


	
				$strOriginalDetailsTable="vendeurs";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="vendeurs";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "vendeurs";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispMasterInfo"] = array();
				$masterParams["dispMasterInfo"][PAGE_LIST] = true;
			$masterParams["dispMasterInfo"][PAGE_PRINT] = true;
			
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 1;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["recettes_vendeurs"][0] = $masterParams;
				$masterTablesData["recettes_vendeurs"][0]["masterKeys"] = array();
	$masterTablesData["recettes_vendeurs"][0]["masterKeys"][]="vd_id";
				$masterTablesData["recettes_vendeurs"][0]["detailKeys"] = array();
	$masterTablesData["recettes_vendeurs"][0]["detailKeys"][]="vd_id";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_recettes_vendeurs()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "vd_id,  	rc_date,  	rc_montant";
$proto0["m_strFrom"] = "FROM recettes_vendeurs";
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
	"m_strName" => "vd_id",
	"m_strTable" => "recettes_vendeurs",
	"m_srcTableName" => "recettes_vendeurs"
));

$proto6["m_sql"] = "vd_id";
$proto6["m_srcTableName"] = "recettes_vendeurs";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_date",
	"m_strTable" => "recettes_vendeurs",
	"m_srcTableName" => "recettes_vendeurs"
));

$proto8["m_sql"] = "rc_date";
$proto8["m_srcTableName"] = "recettes_vendeurs";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "rc_montant",
	"m_strTable" => "recettes_vendeurs",
	"m_srcTableName" => "recettes_vendeurs"
));

$proto10["m_sql"] = "rc_montant";
$proto10["m_srcTableName"] = "recettes_vendeurs";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "recettes_vendeurs";
$proto13["m_srcTableName"] = "recettes_vendeurs";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "vd_id";
$proto13["m_columns"][] = "rc_date";
$proto13["m_columns"][] = "rc_montant";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "recettes_vendeurs";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "recettes_vendeurs";
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
$proto0["m_srcTableName"]="recettes_vendeurs";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_recettes_vendeurs = createSqlQuery_recettes_vendeurs();


	
		;

			

$tdatarecettes_vendeurs[".sqlquery"] = $queryData_recettes_vendeurs;

$tableEvents["recettes_vendeurs"] = new eventsBase;
$tdatarecettes_vendeurs[".hasEvents"] = false;

?>