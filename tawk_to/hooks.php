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
    return '	<!--Start of Tawk.to Script-->
	<script type="text/javascript">
	var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
	(function(){
	var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
	s1.async=true;
	s1.src="{$value}";
	s1.charset="UTF-8";
	s1.setAttribute("crossorigin","*");
	s0.parentNode.insertBefore(s1,s0);
	})();
	</script>
	<!--End of Tawk.to Script-->';
}

add_hook("ClientAreaFooterOutput",1,"tawk_to_ClientAreaFooterOutput");
