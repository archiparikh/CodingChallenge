<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:42 PM
 */

namespace App\Cipher\Encryption;


use App\Cipher\CipherConstant;
use InvalidArgumentException;
use Symfony\Component\Debug\Exception\UndefinedMethodException;

class EncryptionAlgorithmProvider implements EncryptionAlgorithmProviderInterface
{
    /**
     * @var string
     */
    private $cipherComplexity;

    /**
     * @var string
     */
    private $fileContent;

    /**
     * EncryptionAlgorithmProvider constructor.
     * @param $fileContent
     * @param $cipherComplexity
     */
    public function __construct($fileContent, $cipherComplexity)
    {
        $this->cipherComplexity = $cipherComplexity;
        $this->fileContent = $fileContent;
    }

    /**
     * @return mixed
     * @throws UndefinedMethodException
     */
    public function find()
    {
        if(! in_array($this->cipherComplexity, CipherConstant::CIPHER_COMPLEXITY)) {
            throw new UndefinedMethodException('Cipher algorithm not implemented.');
        }

        if($this->cipherComplexity == CipherConstant::SIMPLE) {
            return (new SimpleAlgorithm($this->fileContent))->writeToFile();

        } else if($this->cipherComplexity == CipherConstant::HARD) {
            return (new HardAlgorithm($this->fileContent))->writeToFile();
        }
    }

}