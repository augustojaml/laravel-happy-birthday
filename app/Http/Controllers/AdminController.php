<?php

namespace App\Http\Controllers;

use App\Models\VoucherUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {

    public function login() {

      if (Auth::check()) {
        return redirect()->route('admin.dashboard');
      }

      return view('admin.login', [
        'title' => 'Login'
      ]);
    }

    public function dashboard() {

        $voucherUsers = VoucherUsers::all()->sortByDesc("updated_at");

        $facebook = $voucherUsers->where('how_did_you_find_us', 'facebook')->count();
        $google = $voucherUsers->where('how_did_you_find_us', 'google')->count();
        $instagram = $voucherUsers->where('how_did_you_find_us', 'instagram')->count();
        $site = $voucherUsers->where('how_did_you_find_us', 'site')->count();
        $outros = $voucherUsers->where('how_did_you_find_us', 'outros')->count();

        $data = (object) [
          'vouchers'  => $voucherUsers->take(8),
          'total'     => str_pad($voucherUsers->count(), 2, '0', STR_PAD_LEFT),
          'facebook'  => str_pad($facebook, 2, '0', STR_PAD_LEFT),
          'google'    => str_pad($google, 2, '0', STR_PAD_LEFT),
          'instagram' => str_pad($instagram, 2, '0', STR_PAD_LEFT),
          'site'      => str_pad($site, 2, '0', STR_PAD_LEFT),
          'outros'    => str_pad($outros, 2, '0', STR_PAD_LEFT),
        ];

        // echo '<pre>';
        // var_dump($voucherUsers);

        return view('admin.dashboard', [
          'title' => 'Dashboard',
          'data'  => $data
        ]);
    }

    public function submitLogin(Request $request) {
      if(in_array('', $request->only('email', 'password'))) {
        $json['error'] = 'Login e/ou password inválidos';
        return response()->json($json);
      }

      if(!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
        $json['error'] = 'Login e/ou password inválidos';
        return response()->json($json);
      }

      $credentials = [
        'email'     => $request->email,
        'password'  => $request->password,
      ];

      if(!Auth::attempt($credentials)) {
        $json['error'] = 'Login e/ou password inválidos';
        return response()->json($json);
      }

      $json['redirect'] = route('admin.dashboard');
      return response()->json($json);
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
