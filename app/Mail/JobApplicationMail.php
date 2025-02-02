<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class JobApplicationMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    /**
     * Crea un'istanza del messaggio.
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Costruisce il messaggio email.
     */
    public function build()
    {
        $email = $this->subject('Nuova Candidatura: ' . $this->data['position'])
                      ->view('emails.job-application')
                      ->with('data', $this->data);

        // Se il candidato ha caricato un CV, lo allega all'email
        if (!empty($this->data['cv_path'])) {
            $email->attach(storage_path('app/' . $this->data['cv_path']));
        }

        return $email;
    }
}
