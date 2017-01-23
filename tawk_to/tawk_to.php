<?php

if (!defined("WHMCS"))
	die("This file cannot be accessed directly");

function tawk_to_config() {
    $configarray = array(
    "name" => "Tawk.To",
    "description" => "Exiba em todas as páginas o Tawk.To.",
    "version" => "1.0",
    "author" => "Saulo Henrique",
    "website" => "www.ninjashost.com.br",
    "language" => "portuguese",
    "fields" => array(
    	"clientareacode" => array ("FriendlyName" => "Client Area Tracking Code", "Type" => "textarea", "Rows" => "10", "Cols" => "50", "Description" => "Tracking Code for the client area", "Default" => "", )
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

	echo "Para configurar, vá para Setup -> Addon Modules -> Tawk.To -> Cofigure.";

}

function tawk_to_sidebar($vars) {

}