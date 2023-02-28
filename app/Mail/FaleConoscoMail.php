<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Envelope;;
use Illuminate\Queue\SerializesModels;

class FaleConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->nome = $client->name;
        $this->telefone = $client->phone;
        $this->mensagem = $client->client;
        $this->email = $client->email;
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
            subject: 'Contato vindo do site',
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
            view: 'emails.contato',
            with: [
                'nome' => $this->nome,
                'telefone' => $this->telefone,
                'email' => $this->email,
                'mensagem' => $this->mensagem
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
        return [];
    }
}
