<?php

namespace App\Notifications\Corporate\Document;

use App\Models\HRM\Employee;
use Illuminate\Bus\Queueable;
use App\Models\Corporate\LegalDoc;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class DeleteDocumentNotification extends Notification
{
    use Queueable;
    protected $document,$employee;
    public function __construct(LegalDoc $document,Employee $employee)
    {
        $this->doc = $document;
        $this->employee = $employee;
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
            'tipe' => 'File',
            'nama' => $this->employee->name,
            'pesan' => "Hi ".$this->employee->name.", File ".$this->doc->code." just deleted by ".$this->employee->name." at ".date('d F Y, g:i a')."."
        ];
    }
}
