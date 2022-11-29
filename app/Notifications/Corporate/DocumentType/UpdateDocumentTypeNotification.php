<?php

namespace App\Notifications\Corporate\DocumentType;

use App\Models\HRM\Employee;
use Illuminate\Bus\Queueable;
use App\Models\Corporate\LegalDocType;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UpdateDocumentTypeNotification extends Notification
{
    use Queueable;
    protected $documentType,$employee;
    public function __construct(LegalDocType $documentType,Employee $employee)
    {
        $this->type = $documentType;
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
            'tipe' => 'Folder',
            'nama' => $this->employee->name,
            'pesan' => "Hi ".$this->employee->name.", Folder ".$this->type->name." just updated by ".$this->employee->name." at ".date('d F Y, g:i a')."."
        ];
    }
}
