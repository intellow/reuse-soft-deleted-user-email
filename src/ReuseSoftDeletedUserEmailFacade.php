<?php

namespace Intellow\ReuseSoftDeletedUserEmail;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Intellow\ReuseSoftDeletedUserEmail\Skeleton\SkeletonClass
 */
class ReuseSoftDeletedUserEmailFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'reuse-soft-deleted-user-email';
    }
}
