<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Decryption;


use BadMethodCallException;

class HardAlgorithm extends Algorithm
{
    /**
     * @return mixed|void
     * @throws BadMethodCallException
     */
    public function deCipher()
    {
        throw new BadMethodCallException('Method not implemented.');
    }
}