<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function tawk_to_ClientAreaFooterOutput($vars) {
	$sql = "SELECT value FROM `tbladdonmodules` WHERE setting = 'clientareacode' AND module = 'tawk_to';";
	$sql = mysql_query($sql);
	if(mysql_num_rows($sql) > 0)
	{
		$data = mysql_fetch_assoc($sql);
		$value = html_entity_decode($data["value"]);
	} else {
		$value = '';
	}
    return "{$value}";
}

add_hook("ClientAreaFooterOutput",1,"tawk_to_ClientAreaFooterOutput");