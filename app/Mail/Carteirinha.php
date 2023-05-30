<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;

class Carteirinha extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client, $attachment)
    {
       
        $this->nome = $client->nome;
        $this->attachment = $attachment;
        
       
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address(getConfiguration('email_envio_smtp')->valor,  getConfiguration('nome_envio')->valor),
            subject: 'Carteirinha de Associado ABRAVIR',
        );
        
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            view: 'emails.carteirinha',
            with: [
                'nome' => $this->nome,
                
                
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
      return [
      Attachment::fromData(fn() => $this->attachment, 'carteirinhas.pdf')->withMime('application/pdf'),
      ];
    }
}
