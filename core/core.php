<?php 
//CONECTION DATA
define('CON_HOST','localhost');
define('CON_DB','project');
define('CON_USERNAME','root');
define('CON_PASSWORD','');
define('CON_UTF','');



define('HTML_DIR','html');
define('URL_BASE', 'http://localhost.org/phpExam/');


//GLOBALS
include('model/db_connect.php');

//sha1(); codificar;
//addslashes(); limpiar de injecciones para caracteres especiales
//htmlspecialchars();
//htmlentities(); limpiar de injecciones de Inputs

//PHP CONFIG FUNCTIONS
//ini_set('display_errors', 0);

?>