<?php

namespace Intellow\ReuseSoftDeletedUserEmail\Traits;

trait ReuseSoftDeletedEmails
{
    public static function bootReuseSoftDeletedEmails()
    {
        static::deleting(function($user) {
            $user->email = $user->email . now()->timestamp . '_deleted';
            $user->save();
        });
    }

    public function getEmailAttribute($email) {
        if(substr($email, -8) == '_deleted') {
            return substr($email, 0, -18);
        }
        return $email;
    }
}
