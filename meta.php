<?php
	// VERSION //
	self::$version = "1.0.0";
	
	
	// DEPENDENCIES //
	// used extensions
	self::$use[] = "page";
	self::$use[] = "project";
	
	
	// ROUTES //
	self::$route["www.selbstbestimmungsgesetz-jetzt.de"] = [
		["path" => "**",		"redirect_domain" => "selbstbestimmungsgesetz-jetzt.de"]
	];
	
	self::$route["selbstbestimmungsgesetz-jetzt.de"] = [
		["path" => "",		"target" => "page/start"]
	];
?>
