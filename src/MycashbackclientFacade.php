<?php

namespace Myolchauzpackage\Mycashbackclient;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Myolchauzpackage\Mycashbackclient\Skeleton\SkeletonClass
 */
class MycashbackclientFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'mycashbackclient';
    }
}
