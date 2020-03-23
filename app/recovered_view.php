<?php
// This script and data application were generated by AppGini 5.82
// Download AppGini for free from https://bigprof.com/appgini/download/

	$currDir=dirname(__FILE__);
	include("$currDir/defaultLang.php");
	include("$currDir/language.php");
	include("$currDir/lib.php");
	@include("$currDir/hooks/recovered.php");
	include("$currDir/recovered_dml.php");

	// mm: can the current member access this page?
	$perm=getTablePermissions('recovered');
	if(!$perm[0]) {
		echo error_message($Translation['tableAccessDenied'], false);
		echo '<script>setTimeout("window.location=\'index.php?signOut=1\'", 2000);</script>';
		exit;
	}

	$x = new DataList;
	$x->TableName = "recovered";

	// Fields that can be displayed in the table view
	$x->QueryFieldsTV = array(
		"`recovered`.`id`" => "id",
		"`recovered`.`state`" => "state",
		"`recovered`.`country`" => "country",
		"`recovered`.`lat`" => "lat",
		"`recovered`.`long`" => "long",
		"if(`recovered`.`date`,date_format(`recovered`.`date`,'%d/%m/%Y'),'')" => "date",
		"`recovered`.`value`" => "value",
	);
	// mapping incoming sort by requests to actual query fields
	$x->SortFields = array(
		1 => '`recovered`.`id`',
		2 => 2,
		3 => 3,
		4 => '`recovered`.`lat`',
		5 => '`recovered`.`long`',
		6 => '`recovered`.`date`',
		7 => '`recovered`.`value`',
	);

	// Fields that can be displayed in the csv file
	$x->QueryFieldsCSV = array(
		"`recovered`.`id`" => "id",
		"`recovered`.`state`" => "state",
		"`recovered`.`country`" => "country",
		"`recovered`.`lat`" => "lat",
		"`recovered`.`long`" => "long",
		"if(`recovered`.`date`,date_format(`recovered`.`date`,'%d/%m/%Y'),'')" => "date",
		"`recovered`.`value`" => "value",
	);
	// Fields that can be filtered
	$x->QueryFieldsFilters = array(
		"`recovered`.`id`" => "ID",
		"`recovered`.`state`" => "Province/State",
		"`recovered`.`country`" => "Country/Region",
		"`recovered`.`lat`" => "Lat",
		"`recovered`.`long`" => "Long",
		"`recovered`.`date`" => "Date str",
		"`recovered`.`value`" => "Value",
	);

	// Fields that can be quick searched
	$x->QueryFieldsQS = array(
		"`recovered`.`id`" => "id",
		"`recovered`.`state`" => "state",
		"`recovered`.`country`" => "country",
		"`recovered`.`lat`" => "lat",
		"`recovered`.`long`" => "long",
		"if(`recovered`.`date`,date_format(`recovered`.`date`,'%d/%m/%Y'),'')" => "date",
		"`recovered`.`value`" => "value",
	);

	// Lookup fields that can be used as filterers
	$x->filterers = array();

	$x->QueryFrom = "`recovered` ";
	$x->QueryWhere = '';
	$x->QueryOrder = '';

	$x->AllowSelection = 1;
	$x->HideTableView = ($perm[2]==0 ? 1 : 0);
	$x->AllowDelete = $perm[4];
	$x->AllowMassDelete = true;
	$x->AllowInsert = $perm[1];
	$x->AllowUpdate = $perm[3];
	$x->SeparateDV = 1;
	$x->AllowDeleteOfParents = 0;
	$x->AllowFilters = 1;
	$x->AllowSavingFilters = 0;
	$x->AllowSorting = 1;
	$x->AllowNavigation = 1;
	$x->AllowPrinting = 1;
	$x->AllowPrintingDV = 1;
	$x->AllowCSV = 1;
	$x->RecordsPerPage = 10;
	$x->QuickSearch = 1;
	$x->QuickSearchText = $Translation["quick search"];
	$x->ScriptFileName = "recovered_view.php";
	$x->RedirectAfterInsert = "recovered_view.php?SelectedID=#ID#";
	$x->TableTitle = "Recovered";
	$x->TableIcon = "resources/table_icons/health.png";
	$x->PrimaryKey = "`recovered`.`id`";
	$x->DefaultSortField = '1';
	$x->DefaultSortDirection = 'asc';

	$x->ColWidth   = array(  150, 150, 150, 150, 150, 150);
	$x->ColCaption = array("Province/State", "Country/Region", "Lat", "Long", "Date str", "Value");
	$x->ColFieldName = array('state', 'country', 'lat', 'long', 'date', 'value');
	$x->ColNumber  = array(2, 3, 4, 5, 6, 7);

	// template paths below are based on the app main directory
	$x->Template = 'templates/recovered_templateTV.html';
	$x->SelectedTemplate = 'templates/recovered_templateTVS.html';
	$x->TemplateDV = 'templates/recovered_templateDV.html';
	$x->TemplateDVP = 'templates/recovered_templateDVP.html';

	$x->ShowTableHeader = 1;
	$x->TVClasses = "";
	$x->DVClasses = "";
	$x->HighlightColor = '#FFF0C2';
	$x->HasCalculatedFields = false;

	// mm: build the query based on current member's permissions
	$DisplayRecords = $_REQUEST['DisplayRecords'];
	if(!in_array($DisplayRecords, array('user', 'group'))) { $DisplayRecords = 'all'; }
	if($perm[2]==1 || ($perm[2]>1 && $DisplayRecords=='user' && !$_REQUEST['NoFilter_x'])) { // view owner only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `recovered`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='recovered' and lcase(membership_userrecords.memberID)='".getLoggedMemberID()."'";
	}elseif($perm[2]==2 || ($perm[2]>2 && $DisplayRecords=='group' && !$_REQUEST['NoFilter_x'])) { // view group only
		$x->QueryFrom.=', membership_userrecords';
		$x->QueryWhere="where `recovered`.`id`=membership_userrecords.pkValue and membership_userrecords.tableName='recovered' and membership_userrecords.groupID='".getLoggedGroupID()."'";
	}elseif($perm[2]==3) { // view all
		// no further action
	}elseif($perm[2]==0) { // view none
		$x->QueryFields = array("Not enough permissions" => "NEP");
		$x->QueryFrom = '`recovered`';
		$x->QueryWhere = '';
		$x->DefaultSortField = '';
	}
	// hook: recovered_init
	$render=TRUE;
	if(function_exists('recovered_init')) {
		$args=array();
		$render=recovered_init($x, getMemberInfo(), $args);
	}

	if($render) $x->Render();

	// hook: recovered_header
	$headerCode='';
	if(function_exists('recovered_header')) {
		$args=array();
		$headerCode=recovered_header($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$headerCode) {
		include_once("$currDir/header.php"); 
	}else{
		ob_start(); include_once("$currDir/header.php"); $dHeader=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%HEADER%%>', $dHeader, $headerCode);
	}

	echo $x->HTML;
	// hook: recovered_footer
	$footerCode='';
	if(function_exists('recovered_footer')) {
		$args=array();
		$footerCode=recovered_footer($x->ContentType, getMemberInfo(), $args);
	}  
	if(!$footerCode) {
		include_once("$currDir/footer.php"); 
	}else{
		ob_start(); include_once("$currDir/footer.php"); $dFooter=ob_get_contents(); ob_end_clean();
		echo str_replace('<%%FOOTER%%>', $dFooter, $footerCode);
	}
?>