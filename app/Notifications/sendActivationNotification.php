<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\HtmlString;

class sendActivationNotification extends Notification
{
    use Queueable;

    private $data;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
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
            ->subject('Successful created an account at payView! 🎉')
            ->greeting('Hello ' . $this->data->firstname . '! 👋')
            ->line('You have just successfully completed a registration at payView using the information below:')
            ->line(new HtmlString('<strong>Firstname:</strong> ' . $this->data->firstname))
            ->line(new HtmlString('<strong>Lastname:</strong> ' . $this->data->lastname))
            ->line(new HtmlString('<strong>E-mail:</strong> ' . $this->data->email))
            ->line('In order to use your account, you need to activate you\'re account, you do this by pressing the button below.')
            ->action('Activate your\'re account', route('auth.activate', $this->data->activation_token));
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
            'data' => $this->data->user->email,
        ];
    }
}
