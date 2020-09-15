<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     
     private $email;
    public function __construct($email)
    {
        //
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('misbahur@osingtech.net')
                   ->view('emailku')
                   ->with(
                    [
                        'nama' => $this->email['nama'],
                        'tanggal_transaksi' => $this->email['tanggal_transaksi'],
                        'tanggal_berkunjung' => $this->email['tanggal_berkunjung'],
                        'barcode'=>$this->email['barcode'],
                        'negara'=> $this->email['negara'],
                        'bayar'=> $this->email['bayar']
                    ]);
    }
}
