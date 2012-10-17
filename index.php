<?php

// Check if we are a user
if( !OCP\User::isLoggedIn()){
	header( "Location: ".OC\Helper::linkTo( '', 'index.php' ));
	exit();
}


OCP\App::setActiveNavigationEntry( 'adminer_index');
$tmpl = new OCP\Template( 'sql_adminer', 'main', 'user' );
//$tmpl->assign('srcpath',OC::$WEBROOT.'/apps/sql_adminer/adminer/adminer/plugin.php');
$tmpl->assign('srcpath',OC_App::getAppWebPath('sql_adminer').'/wrapper.php');
switch(OC_Config::getValue( "dbtype", "sqlite" )) {
	case 'sqlite':
		$queryString="sqlite=&db=".OC_Config::getValue( "datadirectory", OC::$SERVERROOT.'/data' ).'/'.OC_Config::getValue( "dbname", "owncloud" ).'.db&username='.OCP\USER::getUser();
	case 'sqlite3':
		$queryString="sqlite=&db=".OC_Config::getValue( "datadirectory", OC::$SERVERROOT.'/data' ).'/'.OC_Config::getValue( "dbname", "owncloud" ).'.db&username='.OCP\USER::getUser();
	}
if (! isset($queryString) ) {
	echo "Your DB is not supported, yet.";
} else {
	$tmpl->assign('queryString',$queryString);
	$tmpl->printPage();
}
//$tmpl->assign('dbtype',OC_CONFIG::getValue('dbtype'));
//$tmpl->assign('dbname' ,OC_CONFIG::getValue('dbname'));
//$tmpl->assign('dbuser' ,OC_CONFIG::getValue('dbuser'));
//$tmpl->assign('dbpassword' ,OC_CONFIG::getValue('dbpassword'));
//$tmpl->assign('dbhost' ,OC_CONFIG::getValue('dbhost'));



?>