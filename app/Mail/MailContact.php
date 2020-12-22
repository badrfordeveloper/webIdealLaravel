<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailContact extends Mailable
{
    use Queueable, SerializesModels;

    public $details ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject($this->details["title"])->view("emails.sendMailContact")->with([
                        'email' => $this->details["email"],
                        'name' => $this->details["name"],
                        'phone' => $this->details["phone"],
                        'subject' => $this->details["subject"],
                        'comment' => $this->details["comment"],
                    ]);;
    }
}
