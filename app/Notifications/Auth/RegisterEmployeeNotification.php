<?php

namespace App\Notifications\Auth;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RegisterEmployeeNotification extends Notification
{
    use Queueable;
    public $employee;
    public function __construct($employee)
    {
        $this->employee = $employee;
    }
    public function via($notifiable)
    {
        return ['mail','database','broadcast'];
    }
    public function toMail($notifiable)
    {
        $employee = $this->employee;
        return (new MailMessage)->subject('Yada Ekidanta | New Registration Employee')->from('noreply@yadaekidanta.com')->view('email.auth.register_employee',compact('notifiable','employee'));
    }
    public function toArray($notifiable)
    {
        return [
            'tipe' => 'New Registration Employee',
            'nama' => $notifiable->name,
            'pesan' => "Hi ".$notifiable->name.", Candidate ".$this->employee->name." just joined."
        ];
    }
}
