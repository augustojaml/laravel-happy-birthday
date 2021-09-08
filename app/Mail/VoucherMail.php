<?php

namespace App\Mail;

use App\Models\VoucherUsers;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VoucherMail extends Mailable
{
    use Queueable, SerializesModels;

    public $voucherUser;

    public function __construct(VoucherUsers $voucherUser) {
      $this->voucherUser = $voucherUser;
    }

    public function build() {

        $this->subject('Seu Aniversário Feliz');
        $this->to($this->voucherUser->email, $this->voucherUser->name);
        return $this->view('front.mail', ['voucherUser' => $this->voucherUser]);
    }
}
