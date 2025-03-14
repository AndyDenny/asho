<?php

namespace classes;

use classes\Main\MessageConstants;
class Validator
{
    private string $sInputString;

    public function getSInputString(): string {
        return $this->sInputString;
    }

    private function setSInputString(string $sInputString): void {
        $this->sInputString = $sInputString;
    }

    public function __construct(string $sInputString = '') {
        $this->setSInputString($sInputString);
        return $this;
    }

    public function validateInputString(): string {
        try {
            $sTmpString = $this->getSInputString();
            if (strlen($sTmpString) > 0){
                $sTmpString = trim($this->getSInputString()," \n\r\t\v\x00");
                if (strlen($sTmpString) > 0){
                    $sTmpString = htmlspecialchars(strip_tags($sTmpString));
                }else{
                    throw new \Exception(MessageConstants::$VALIDATOR_EMPTY_STR);
                }
            }else{
                throw new \Exception(MessageConstants::$VALIDATOR_EMPTY_STR);
            }
        }catch (\Exception $e) {
            echo $e->getMessage();
        }
        $this->setSInputString($sTmpString);
        return $this->getSInputString();
    }
    public function isValidInputString(): bool {
        return $this->validateInputString();
    }
}