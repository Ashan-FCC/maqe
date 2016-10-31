<?php

require 'vendor/autoload.php';

use src\CodeGenerator;

$generator = new CodeGenerator(10, 250, "MY");
$generator->generateTokens();

echo "Finished";

?>