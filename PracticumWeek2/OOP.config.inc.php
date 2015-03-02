<?php
	/**
	 * om op verschillende platforms te kunnen werken is het handig om op ��n plek aan te geven
	 * op welk platform je werkt
	 * Mogelijke waardes: localhost, remote
	 */
	define('PLATFORM', 'localhost');

	if (PLATFORM == 'localhost')
	{
		$database['location'] = 'localhost';
		$database['db_name'] = 'week2';
		$database['loginname'] = 'root';
		$database['password'] = 'root';
	}

	if (PLATFORM == 'remote')
	{
		$database['location'] = '';
		$database['db_name'] = '';
		$database['loginname'] = '';
		$database['password'] = '';
	}
?>
