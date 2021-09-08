<?php

namespace App\Http\Controllers;

use App\Http\Requests\VoucherUsersRequest;
use App\Mail\VoucherMail;
use App\Models\VoucherUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class FrontController extends Controller {

    public function home() {
      return view('front.home');
    }

    public function form() {

      return view('front.form', [
        'title' => 'Receber Voucher'
      ]);
    }

    public function congratulations(VoucherUsers $voucherUser) {
      return view('front.congratulations', ['title' => 'Congratulations', 'voucherUser' => $voucherUser]);
    }

    public function sendEmail() {
      //Mail::to('brawziin@gmail.com')->send(new VoucherMail());
    }

    public function registerVoucher(VoucherUsersRequest $request) {

      $voucherUser = null;

      $findUser = VoucherUsers::where(['name' => $request->name, 'email'  => $request->email])->first();

      if($findUser) {
        $findUser->voucher = $findUser->voucher + 1;
        $findUser->token = strtoupper(Str::random(15));
        $findUser->save();
        $voucherUser = $findUser;
      }
      else {
        $voucherUser = VoucherUsers::create([
          'name'                  => $request->name,
          'email'                 => $request->email,
          'whatsapp'              => $request->whatsapp,
          'token'                 => strtoupper(Str::random(15)),
          'date_of_birth'         => $request->date_of_birth,
          'how_did_you_find_us'   => $request->how_did_you_find_us,
        ]);
      }
      //return new VoucherMail($voucherUser);
      Mail::send(new VoucherMail($voucherUser));
      return redirect()->route('front.congratulations', [$voucherUser]);
    }
}
