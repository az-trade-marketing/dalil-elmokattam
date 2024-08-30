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
        return $this->subject('Your Reply')
                    ->view('emails.reply')
                    ->with([
                        'name' => $this->record->name,
                        'reply' => $this->record->replay,
                    ]);
    }
}

