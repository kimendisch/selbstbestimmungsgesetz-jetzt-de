<?php
	// VERSION //
	self::$version = "1.0.2";
	
	
	// DEPENDENCIES //
	// used extensions
	self::$use[] = "lang";
	self::$use[] = "page";
	self::$use[] = "file";
	self::$use[] = "hidden";
	self::$use[] = "project";
	
	
	// ROUTES //
	self::$route["www.selbstbestimmungsgesetz-jetzt.de"] = [
		["path" => "**",		"redirect_domain" => "selbstbestimmungsgesetz-jetzt.de"]
	];
	
	self::$route["selbstbestimmungsgesetz-jetzt.de"] = [
		["path" => "",		"target" => "page/start"]
	];
?>
