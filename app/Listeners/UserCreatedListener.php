<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Mail\Mailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Mail\UserCreated as UserCreatedMailer;
use Illuminate\Support\Facades\Mail;

class UserCreatedListener
{
    /**
     * @var Mailer
     */
    protected $mailer;

    /**
     * UserCreatedListener constructor.
     * @param Mailer $mailer
     */
    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * @param UserCreated $event
     */
    public function handle(UserCreated $event)
    {
        $this->mailer->send(new UserCreatedMailer($event->user));
    }
}
