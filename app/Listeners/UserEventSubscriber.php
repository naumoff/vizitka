<?php
/**
 * User: Andrey Naumoff
 * Date: 25-Nov-18
 * Time: 4:02 PM
 * E-mail: andrey.naumoff@gmail.com
 */

namespace App\Listeners;

use App\User;
use Illuminate\Contracts\Events\Dispatcher;

class UserEventSubscriber
{
    /**
     * @param User $user
     */
    public function onUserLogIn(User $user): void
    {
        $user->last_login = new \DateTime();
        $user->save();
    }

    /**
     * @param User $user
     */
    public function onUserLogOut(User $user)
    {
        $user->last_logout = new \DateTime();
        $user->save();
    }

    /**
     * @param Dispatcher $events
     */
    public function subscribe(Dispatcher $events): void
    {
        $events->listen(
            'auth.login',
            UserEventSubscriber::class . '@onUserLogIn'
        );

        $events->listen(
            'auth.logout',
            UserEventSubscriber::class . '@onUserLogOut'
        );
    }
}
