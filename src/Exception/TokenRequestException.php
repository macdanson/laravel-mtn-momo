<?php
/**
 * TokenRequestException.php
 *
 * @package Bmatovu\MtnMomo\Exception
 */

namespace Bmatovu\MtnMomo\Exception;

/**
 * Class TokenRequestException
 */
class TokenRequestException extends \RuntimeException
{
    /**
     * Constructor.
     *
     * @param string $message
     * @param int $code
     * @param \GuzzleHttp\Exception\TransferException $guzzle_exception
     */
    public function __construct($message, $code = 0, $guzzle_exception = null)
    {
        parent::__construct($message, $code, $guzzle_exception);
    }
}