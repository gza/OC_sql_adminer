<?php

$this->create('sql_adminer_main','/')->action(
	function($params){
		require __DIR__ . '/../index.php';
	}
);

$this->create('sql_adminer_iframe','/iframe/')->action(
        function($params){
                require __DIR__ . '/../wrapper.phps';
        }
);   
