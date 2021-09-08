@extends('main')

@section('content')
<section class="mt-dashboard">
    <div class="dashboard-wrapper">
    <div class="info">
        <div class="title">
          <h1>Dados Gerais</h1>
          <a href="{{ route('admin.logout') }}"><i class='bx bxs-exit' ></i> Sair</a>
        </div>
        <div class="grid">
        <div class="item">
            <div class="header">
            <span>Total de voucher</span>
            <i class="bx bx-stats"></i>
            </div>
            <strong>{{ $data->total }}</strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Facebook</span>
            <i class="bx bxl-facebook"></i>
            </div>
            <strong>{{ $data->facebook }}</strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Google</span>
            <i class="bx bxl-google"></i>
            </div>
            <strong>{{ $data->google }}</strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Instagram</span>
            <i class="bx bxl-instagram"></i>
            </div>
            <strong>{{ $data->instagram }}</strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Sites</span>
            <i class="bx bx-globe"></i>
            </div>
            <strong>{{ $data->site }}</strong>
        </div>
        <div class="item">
            <div class="header">
            <span>Outros</span>
            <i class="bx bx-pie-chart-alt-2"></i>
            </div>
            <strong>{{ $data->outros }}</strong>
        </div>
        </div>
        <div class="title">
        <h1>Voucher Recentes</h1>
        </div>
        <table>
        <thead>
            <tr>
            <th>Nome</th>
            <th style="width: 120px">Data de Nasc</th>
            {{-- <th style="width: 100px">Vouchers</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($data->vouchers as $voucher)
              <tr>
                <td>{{ $voucher->name }}</td>
                <td>{{ $voucher->date_of_birth }}</td>
                {{-- <td>{{ $voucher->voucher }}</td> --}}
              </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    <div class="hero">
        <img src="../assets/images/grafic.png" alt="Hero" />
    </div>
    </div>
</section>
@endSection
