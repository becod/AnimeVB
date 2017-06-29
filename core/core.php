<?php 
//CONECTION DATA
define('CON_HOST','sql8.freemysqlhosting.net');
define('CON_PORT', '3306');
define('CON_DB','sql8182127');
define('CON_USERNAME','sql8182127');
define('CON_PASSWORD','kmNJIEcIaM');
define('CON_UTF','UTF8');



define('HTML_DIR','html');
define('URL_BASE', 'http://localhost.org/phpExam/');

define('NUM_SLIDE', '7');

//GLOBALS
include('model/db_connect.php');

//sha1(); codificar;
//addslashes(); limpiar de injecciones para caracteres especiales
//htmlspecialchars();
//htmlentities(); limpiar de injecciones de Inputs

//PHP CONFIG FUNCTIONS
//ini_set('display_errors', 0);

?>