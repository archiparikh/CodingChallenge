<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Decryption;


use App\Cipher\CipherConstant;

class SimpleAlgorithm extends Algorithm
{

    /**
     * @return string
     */
    public function writeToFile()
    {
        $decryptedData = $this->deCipher();
        file_put_contents(CipherConstant::SIMPLE_DECRYPTED_FILE_PATH, $decryptedData);

        return $decryptedData;
    }

    /**
     * @return mixed
     */
    public function deCipher()
    {
        $output = "";

        $inputArr = str_split($this->fileContent);

        foreach ($inputArr as $ch) {
            $output .= $this->algorithm(strtolower($ch));
        }

        return $output;
    }

    /**
     * @param $ch
     * @return mixed|string
     */
    private function algorithm($ch)
    {
        if (!ctype_alpha($ch)) {
            return $ch;
        }

        $searchArray = ["z", "h", "i", "m", "n", "e", "y", "x", "w", "v", "u", "t", "s",
            "r", "q", "p", "o", "l", "k", "j", "g", "f", "d", "c", "b", "a"];

        $replaceArray = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m",
            "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];

        if(in_array($ch, $searchArray)) {
            return $replaceArray[array_search($ch, $searchArray)];
        }

        return $ch;
    }
}