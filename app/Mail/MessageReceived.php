<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Message; // Alias the Message model to avoid conflicts

class MessageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $message;

    public function __construct(Message $message) // Adjusted to use the alias
    {
        $this->message = $message;
    }

    public function build()
    {
        return $this->view('mail.message_received')->with('message', $this->message);
    }
}