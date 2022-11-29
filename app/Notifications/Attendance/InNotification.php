<?php

namespace App\Notifications\Attendance;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class InNotification extends Notification
{
    use Queueable;
    public $employee;
    public $user;
    public function __construct($employee,$user)
    {
        $this->employee = $employee;
        $this->user = $user;
    }
    public function via($notifiable)
    {
        return ['database'];
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }
    public function toArray($notifiable)
    {
        $user = $this->user;
        return [
            'tipe' => 'Online',
            'nama' => $notifiable->name,
            'pesan' => "Hi ".$notifiable->name.", ".$user->name." is online now."
        ];
    }
}
