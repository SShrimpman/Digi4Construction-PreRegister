<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class PreRegisterMS extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return (new MailMessage)
            ->greeting('Hi' .  ' ' . $notifiable->name . '!')
            ->greeting('Welcome to Management Solutions!')
            ->line('Thank you for choosing MS as your construction management partner. We are delighted that you pre-registered to access MS Tools and be eligible to become a privileged user.')
            ->line('At launch, your account will be automatically transferred, and you will receive a notification to verify your standard MS account.')
            ->line('We are looking forward to receiving your feedback at:')
            ->line(new HtmlString('<strong>' . 'info@ms4aeco.com' . '</strong>'))

            ->line('Feel free to send us any reviews or questions you might have during your privileged MS trial.');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
