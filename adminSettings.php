<?php

OCP\User::checkAdminUser();

if ($_POST) {
	OCP\JSON::callCheck();
        if(isset($_POST[$param])){
        	OC_Appconfig::setValue('sql_adminer', $param, $_POST[$param]);
	}
}

// fill template
$tmpl = new OC_Template( 'sql_adminer', 'adminSettings');
foreach($params as $param){
                $value = OC_Appconfig::getValue('sql_adminer', $param,'');
                $tmpl->assign($param, $value);
}
return $tmpl->fetchPage();
?>
