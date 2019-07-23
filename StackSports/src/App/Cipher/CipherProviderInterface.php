<?php
/**
 * Created by PhpStorm.
 * User: archi.parikh
 * Date: 11/17/2017
 * Time: 8:39 PM
 */
namespace App\Cipher;

/**
 * Interface DataConverterInterface
 * @package App\DataConverter
 */
interface CipherProviderInterface {

    /**
     * @return mixed
     */
    function isSupported();

    /**
     * @return mixed
     */
    function cipher();
}