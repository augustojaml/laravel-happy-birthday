@extends('main')

@section('content')
<section class="mt-home">
  <div class="home-wrapper">
    <div class="container">
      <div class="info">
        <a href="{{ env('URL_REDIRECT') }}" class="header">
          <img src="{{ url(asset('assets/images/logo.png')) }}" alt="Armazem do juca" />
          <span>
          <i class="bx bxs-home"></i>
          Voltar para Home
          </span>
        </a>
        <div class="body">
          <h1>
            Hoje vai ser <br />
            Uma Festa!
          </h1>
          <p>
            No dia do seu aniversário o {{ env('APP_NAME') }} vai te presentear com um voucher valendo um rodźio de pizza.
          </p>
          <h3>E aí, quer ganhar um rodźio gratuito?</h3>
          <a href="{{ route('front.form') }}"> Retire seu vouche </a>
        </div>
      </div>
      <div class="hero">
        <img class="animate-up-down" src="{{ url(asset('assets/images/balloon.png')) }}" alt="Armazem do Juca Balões" />
      </div>
    </div>
  </div>
</section>
@endSection
