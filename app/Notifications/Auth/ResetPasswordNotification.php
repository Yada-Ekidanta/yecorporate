<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetPasswordNotification extends Notification
{
    use Queueable;
    public $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function via($notifiable)
    {
        return ['mail','database','broadcast'];
    }
    public function toMail($notifiable)
    {
        $data = $this->data;
        return (new MailMessage)->subject('Yada Ekidanta | Reset Password Confirmation')->from('noreply@yadaekidanta.com')->view('email.auth.reset_password',compact('notifiable','data'));
    }
    public function toArray($notifiable)
    {
        return [
            'tipe' => 'Reset Password Confirmation',
            'nama' => $notifiable->name,
            'pesan' => "Hi ".$notifiable->name.", Sorry to hear you’re having trouble logging into ".config('app.name').". We got a message that you forgot your password."
        ];
    }
}
