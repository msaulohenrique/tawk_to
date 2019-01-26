<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function tawk_to_config() {
    $configarray = array(
    "name" => "Tawk.To",
    "description" => "Exiba em todas as páginas o Tawk.To.",
    "version" => "1.0",
    "author" => "Saulo Henrique",
    "website" => "https://github.com/msaulohenrique",
    "language" => "portuguese",
    "fields" => array(
    	"clientareacode" => array ("FriendlyName" => "URL Takw.To", "Type" => "textarea", "Rows" => "1", "Description" => "Informe a URL. Ex: https://embed.tawk.to/55d1187c14f3be7a3816d367/default", "Default" => "", )
    ));
    return $configarray;
}

function tawk_to_activate() {
    # Return Result
    return array('status'=>'success','description'=>'O módulo foi instalado. Clique em configurar para inserir o código do widget.');
    return array('status'=>'error','description'=>'Ocorreu um erro na ativação.');
    return array('status'=>'info','description'=>'Pode haver um problema.');

}

function tawk_to_deactivate() {
    # Return Result
    return array('status'=>'success','description'=>'O módulo Tawk.To foi desativado com sucesso.');
    return array('status'=>'error','description'=>'Ocorreu um erro ao desativar o módulo Tawk.To');
    return array('status'=>'info','description'=>'Pode haver um problema.');

}

function tawk_to_upgrade($vars) {

}

function tawk_to_output($vars) {

	echo "Para configurar, vá para Setup -> Addon Modules -> Tawk.To -> Configure.";

}

function tawk_to_sidebar($vars) {

}
