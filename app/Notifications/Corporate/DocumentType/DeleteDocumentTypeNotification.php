<?php

namespace App\Notifications\Corporate\DocumentType;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class DeleteDocumentTypeNotification extends Notification
{
    use Queueable;
    public function __construct()
    {
        //
    }
    public function via($notifiable)
    {
        return ['database','broadcast'];
    }
    public function toMail($notifiable)
    {
        //
    }
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
