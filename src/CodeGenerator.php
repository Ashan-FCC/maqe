<?php
namespace App;

class CodeGenerator {
    private $tokenLength;
    private $noOfCodes;
    private $prefix;
    public $file;

    public function __construct($tokenLength, $noOfCodes, $prefix="MY", $file=""){
        $this->tokenLength= $tokenLength;
        $this->noOfCodes = $noOfCodes;
        $this->prefix  = $prefix;
        $this->file  = $file;
    }

    public function generateTokens(){
    $couponFile = $this->file === "" ? __DIR__."/../storage/section2.txt" : $this->file;
    $fp = fopen($couponFile,"wb");
    $tokenLength = $this->tokenLength - strlen($this->prefix);
        if($fp!== false){
            for($i =0 ; $i< $this->noOfCodes; $i++){

            $code = $this->prefix . $this->getToken($tokenLength);
            fwrite($fp, $code."\n");
            
            }
            fclose($fp);
        }

    }

    public function getToken($length)
    {
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited

        for ($i=0; $i < $length; $i++) {
            $token .= $codeAlphabet[$this->cryptoRandSecure(0, $max)];
        }

        return $token;
    }
    private function cryptoRandSecure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min; // not so random...
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
    }


}


?>