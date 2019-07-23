<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Decryption;
use App\Cipher\CipherConstant;


/**
 * Class Algorithm
 * @package App\Cipher\Encryption
 */
abstract class Algorithm implements AlgorithmInterface
{
    /**
     * @var string
     */
    protected $fileContent;

    /**
     * Algorithm constructor.
     * @param string $fileContent
     */
    public function __construct($fileContent)
    {

        $this->fileContent = $fileContent;
    }

    /**
     * @return string
     */
    public function writeToFile()
    {
        $decryptedData = $this->deCipher();
        file_put_contents(CipherConstant::DECRYPTED_FILE_PATH, $decryptedData);

        return $decryptedData;
    }

    public abstract function deCipher();
}