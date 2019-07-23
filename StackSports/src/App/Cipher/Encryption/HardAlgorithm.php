<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Encryption;


use BadMethodCallException;

class HardAlgorithm extends Algorithm
{
    /**
     * @return mixed|void
     * @throws BadMethodCallException(
     */
    public function enCipher()
    {
        throw new BadMethodCallException('Method not implemented.');
    }
}