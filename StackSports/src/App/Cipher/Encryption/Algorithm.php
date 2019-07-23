<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Encryption;
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
        $encryptedData = $this->enCipher();
        file_put_contents(CipherConstant::ENCRYPTED_FILE_PATH, $encryptedData);

        return $encryptedData;
    }

    public abstract function enCipher();
}