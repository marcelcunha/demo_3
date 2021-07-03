<?php

namespace App\Notifications;

use App\Models\ProspectUser;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ProspectNotification extends Notification
{
    use Queueable;
    private ProspectUser $prospect;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(ProspectUser $prospect)
    {
        $this->prospect = $prospect;
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
                    ->line('Você foi cadastrado como um pré usuário em nossa instituição')
                    ->line('Clique no botão para completar o seu cadastro:')
                    ->action('Completar Cadastro', url('/'));
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
