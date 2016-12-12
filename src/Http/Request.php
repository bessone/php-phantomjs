<?php

/*
 * This file is part of the php-phantomjs.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace JonnyW\PhantomJs\Http;

use GuzzleHttp\Psr7\Request as BaseRequest;
use JonnyW\PhantomJs\IO\Input\InputInterface;

/**
 * PHP PhantomJs.
 *
 * @author Jon Wenmoth <contact@jonnyw.me>
 */
class Request extends BaseRequest implements InputInterface
{
    use \GuzzleHttp\Psr7\MessageTrait;
    use \JonnyW\PhantomJs\IO\Input\InputTrait;

    /**
     * Get input type.
     *
     * @return string
     */
    public function getType()
    {
        return 'http';
    }
}
