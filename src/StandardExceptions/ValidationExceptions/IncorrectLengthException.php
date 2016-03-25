<?php

namespace Exceptions\ValidationExceptions;

/**
 * Use this exception when the length of a string is invalid based on other parameters or domain validation.
 *
 * This exception is only used for backwards compatibility with SPL's LengthException.
 *
 * @deprecated in favor of \Exceptions\ValidationExceptions\InvalidLengthException, will be removed in version
 *             2.0
 *
 * @author     Mathieu Dumoulin aka CrazyCodr <thecrazycodr@gmail.com>
 * @license    MIT
 */
class IncorrectLengthException extends \LengthException
{
    public function __construct(
        $message = 'The length of the passed data is invalid for the requested operation',
        $code = 0,
        $previous = null
    ) {
        parent::__construct($message, $code, $previous);
    }
}
