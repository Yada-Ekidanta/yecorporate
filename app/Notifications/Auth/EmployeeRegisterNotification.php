<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EmployeeRegisterNotification extends Notification
{
    use Queueable;
    public function __construct()
    {
        //
    }
    public function via($notifiable)
    {
        return ['mail','database','broadcast'];
    }
    public function toMail($notifiable)
    {
        return (new MailMessage)->subject('Yada Ekidanta | Thank you for your enthusiasm')->from('noreply@yadaekidanta.com')->view('email.auth.welcome_employee',compact('notifiable'));
    }
    public function toArray($notifiable)
    {
        return [
            'tipe' => 'Registration Employee',
            'nama' => $notifiable->name,
            'pesan' => "Hi ".$notifiable->name.", Thank you for your enthusiasm, see you in the next step."
        ];
    }
}
