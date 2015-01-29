<?php 

$_GET['db']='/var/data/owncloud/owncloud.db';
$_GET['sqlite']='toto';
$_GET['username']='gza';


function adminer_object() {
    // required to run any plugin
    include_once __DIR__ . "/plugins/plugin.php";

    // autoloader
    foreach (glob(__DIR__ . "/plugins/*.php") as $filename) {
        include_once "$filename";
    }
    
    $plugins = array(
        // specify enabled plugins here
	new AdminerFrames,
    );

    /* It is possible to combine customization and plugins:
    class AdminerCustomization extends AdminerPlugin {
    }
    return new AdminerCustomization($plugins);
    */
    
    return new AdminerPlugin($plugins);
}
// include original Adminer or Adminer Editor
require __DIR__ . "/adminer-4.1.0-en.phps";
?>
