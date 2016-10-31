<?php

use src\CodeGenerator;

class CodeGeneratorTest extends PHPUnit_Framework_TestCase
{
    private $generator;
    public function setUp(){
        $this->generator = new CodeGenerator(10, 250, $prefix="MY", $file="");
    }
    /** @test */
    public function create_code_with_10_characters()
    {
        
        $token = $this->generator->getToken(10);

        $this->assertTrue(strlen($token) == 10);
    }
    /** @test */
    public function create_all_codes_at_default_location(){

        $this->generator->generateTokens();

        $file = __DIR__.'/../storage/section2.txt';
        $this->assertTrue(file_exists($file));

        $codes = fopen($file, "r");
        $count = 0;
        while(!feof($codes)){
            $line = fgets($codes);
            if($line !== false)
            $count++;


        }
        fclose($codes);
        $this->assertEquals(250 , $count);



    }
    private function removeLineBreaks($line){
        str_replace("", "", $line);
        str_replace("\n", "", $line);
        str_replace("\r\n", "", $line);
        return $line;
    }
}
?>