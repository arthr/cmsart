<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendConfirmation extends Notification {

    use Queueable;
    
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user) {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable) {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable) {
        return (new MailMessage)
            ->subject('Email Confirmation - ' . config('app.name'))
            ->greeting("Hello {$this->user->name}!")
            ->line('Verify your email!')
            ->action('Veriry', url(config('app.url') . route('register.confirmation', $this->user->confirmation_code, false)))
            ->line('After verification, you will can manage your account.');
    }


}
