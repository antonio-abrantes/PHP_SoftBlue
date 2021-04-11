<?php

require "./Login1.php";
require "./Login2.php";

use \Api\Login as LoginApi;
use \App\Login as LoginApp;


$sistema = new LoginApi();
$sistema->efetuarLogin('Antonio', '12345');

echo "<br>";

$sistema = new LoginApp();
$sistema->efetuarLogin('Antonio', '12345');

?>