<?php

	/* ---===|| Site Mode ||===--- */

	define("SITE_MODE", "development");
	//define("SITE_MODE", "production");


	/* ---===|| DB Info ||===--- */

	define("DB_HOST", "127.0.0.1");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "creative");

	// define("DB_HOST", "10.2.0.31");
	// define("DB_USER", "root");
	// define("DB_PASS", "curse35124");
	// define("DB_NAME", "creative");

	// define("DB_HOST", "jameswatsonv.com");
	// define("DB_USER", "jlwatson_admin");
	// define("DB_PASS", "sgb4trjb");
	// define("DB_NAME", "jlwatson_creative");

	
	

	/* ---===|| Path Info ||===--- */

	//$PATH['http']['host']				= "http://localhost";
	$PATH['http']['host']				= "http://localhost:81";
	//$PATH['http']['host']				= "http://jameswatsonv.com";
	//$PATH['http']['host']				= "http://www.cursesf.local";
	
	$PATH['http']['siteRoot'] 			= $PATH['http']['host'] . "/creative";
	//$PATH['http']['siteRoot'] 			= $PATH['http']['host'] . "/CRM";

	$PATH['http']['assets'] 			= $PATH['http']['siteRoot'] . "/assets";

	$PATH['physical']['siteRoot'] 		= dirname(dirname(dirname(__FILE__)));
	$PATH['physical']['app']			= $PATH['physical']['siteRoot'] . '/app';
	$PATH['physical']['engine']			= $PATH['physical']['app'] . '/engine';
	$PATH['physical']['templates'] 		= $PATH['physical']['app'] . '/templates';
	$PATH['physical']['lib']			= $PATH['physical']['app'] . '/lib';
	$PATH['physical']['assets']			= $PATH['physical']['siteRoot'] . '/assets';