<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017/6/24
 * Time: 下午11:57
 */

namespace inhere\process\pool;

/**
 * Class ResourceFactory
 * @package inhere\process\pool
 */
class ResourceFactory implements ResourceInterface
{
    public function create()
    {
        return new \PDO('dsn');
    }

    public function destroy($obj)
    {
        // ...
    }
}
