<?php
/**
 * Created by PhpStorm.
 * User: Archi Parikh
 * Date: 7/23/2019
 * Time: 12:20 PM
 */

namespace App\Cipher;

class CipherConstant
{
    const ENCRYPTION = 'Encryption';
    const DECRYPTION = 'Decryption';

    const CIPHER_MODE = [CipherConstant::ENCRYPTION, CipherConstant::DECRYPTION];

    const SIMPLE = 'Simple';
    const HARD = 'Hard';

    const CIPHER_COMPLEXITY = [CipherConstant::SIMPLE, CipherConstant::HARD];

    const SAMPLE_DATA_PATH              = 'sample-data/cipher/';

    const ENCRYPTED_FILE_PATH           = CipherConstant::SAMPLE_DATA_PATH . 'encrypted.txt';
    const SIMPLE_ENCRYPTED_FILE_PATH    = CipherConstant::SAMPLE_DATA_PATH . 'encrypted_simple.txt';
    const HARD_ENCRYPTED_FILE_PATH      = CipherConstant::SAMPLE_DATA_PATH . 'encrypted_hard.txt';

    const DECRYPTED_FILE_PATH           = CipherConstant::SAMPLE_DATA_PATH . 'decrypted.txt';
    const SIMPLE_DECRYPTED_FILE_PATH    = CipherConstant::SAMPLE_DATA_PATH . 'decrypted_simple.txt';
    const HARD_DECRYPTED_FILE_PATH      = CipherConstant::SAMPLE_DATA_PATH . 'decrypted_hard.txt';
}