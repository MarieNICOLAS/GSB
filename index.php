<?php
/*
 * Application Name: Gestion_Visite
 * Description: Un visiteur peut Ajouter/Modifier/Supprimer un/des Medecins et un/des Rapports 
 * Version: 2.0.0
 * Requires at least: 4.6
 * Requires PHP: 5.6
 * Author: Marie Nicolas <marie.nicolas@ensitech.eu>
 */

#########################################
# Local dependencies                    #
#########################################
require_once '../GSB/config/config.php';
require_once 'vendor/autoload.php';
require_once 'src/main.php';
require_once 'src/router.php';

###########################################
# SpaceName                                   #
###########################################

use GSB\Main;
use GSB\Router;


###########################################
# Main                                    #
###########################################

$main = Main::get_instance();

$router = new Router();
$router->routeRequest();

?>
