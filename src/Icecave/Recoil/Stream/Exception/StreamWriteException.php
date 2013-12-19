<?php
namespace Icecave\Recoil\Stream\Exception;

use Exception;
use RuntimeException;

class StreamWriteException extends RuntimeException
{
    public function __construct(Exception $previous = null)
    {
        parent::__construct('An error occurred while writing to the stream.', 0, $previous);
    }
}
