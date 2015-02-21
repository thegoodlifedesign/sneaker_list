<?php namespace TGL\Tools\Mailer;


class RegisterMailer extends AbstractMailer
{

    public function sendWelcome($event)
    {
        $this->sendTo($event->user->email,
            'Welcome to The Sneaker List!',
            'emails.auth.register',
            [
                'username'      => $event->user->username,
                'email'         => $event->user->email,
            ]);
    }

    public function sendNewUser($event)
    {
        $this->sendto('rodrigo@tgld.co',
            'New Member!',
            'emails.auth.activated',
            [
                'username' => $event->user->username,
            ]);
    }
}