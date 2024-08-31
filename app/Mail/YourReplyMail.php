<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class YourReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public $record;

    public function __construct($record)
    {
        $this->record = $record;
    }

    public function build()
    {
        return $this->view('admin.emails.replay')
            ->with([
                'name' => $this->record->name,
                'reply' => $this->record->reply, // تأكد من أن هذا المفتاح مكتوب بشكل صحيح
            ]);
    }
}

