<?php

require 'vendor/autoload.php';

use App\CodeGenerator;

$generator = new CodeGenerator(10, 250, "MY");
$generator->generateTokens();

echo "Finished\n";

?>