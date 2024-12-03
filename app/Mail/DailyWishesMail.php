<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;


class DailyWishesMail extends Mailable
{
    use Queueable, SerializesModels;

    public $firstName;
    public $lastName;
    public $birthdayMessage;

    /**
     * Create a new message instance.
     */
    public function __construct($firstName, $lastName, $birthdayMessage)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthdayMessage = $birthdayMessage;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Happy Birthday ' . $this->firstName . '!'
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.daily_wishes',
            with: [
                'firstName' => $this->firstName,
                'lastName' => $this->lastName,
                'birthdayMessage' => $this->birthdayMessage,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
