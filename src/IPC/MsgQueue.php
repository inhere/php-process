<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017/6/1
 * Time: 下午9:03
 */

namespace Inhere\Process\IPC;

/**
 * class MsgQueue
 * @package Inhere\Process\IPC
 */
class MsgQueue extends AbstractIPC
{
    /** @var string  */
    protected static $name = 'msgQueue';

    /**
     * @return bool
     */
    public static function isSupported(): bool
    {
        // TODO: Implement isSupported() method.
    }
}
