@extends('main')

@section('content')
<section class="mt-form">
  <div class="form-wrapper">
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
          <h3>
            Aqui no {{ env('APP_NAME') }} <br />
            aniversariante do dia ganha <br />
            rodízio gratis
          </h3>
          <p>
            Válido somente no dia do seu aniversário,
            <strong>MEDIANTE APRESENTAÇÃO DO VOUCHER IMPRESSO E DOCUMENTO DE INDENTIFICAÇÃO COM FOTO</strong>.
            Consultar horário de funcionamento no site <a href="{{ env('URL_REDIRECT') }}">{{ env('APP_NAME') }}</a>. Bebidas e sobremesas, 10% a
            parte. Cadastre-se 2 dias antes para enviarmos seu voucher.
          </p>
        </div>
      </div>

      <div class="form">
        <form action="{{ route('front.registerVoucher')}}" method="POST">

          @csrf
          <div class="header">
            <h3>Quer receber seu voucher de Aniversário grátis</h3>
            <p>Basta preecher o formulário abaixo para recebê-lo em seu e-mail</p>
          </div>
          <div class="body">
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class="bx bxs-user"></i>
                </div>
                <input type="text" name="name" placeholder="Nome" value="{{ old('name') }}" />
              </div>
              <span>
                @if ($errors->first('name'))
                  <i class="bx bx-info-circle"></i>
                  {{ $errors->first('name') }}
                @endif
              </span>
            </div>
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class='bx bxs-envelope'></i>
                </div>
                <input type="text" name="email" placeholder="E-mail"  value="{{ old('email') }}"/>
              </div>
              <span>
                @if ($errors->first('email'))
                  <i class="bx bx-info-circle"></i>
                  {{ $errors->first('email') }}
                @endif
              </span>
            </div>
            <div class="input-double">
              <div class="input-single">
                <div>
                  <div class="icon">
                    <i class='bx bxl-whatsapp'></i>
                  </div>
                  <input type="text" name="whatsapp" placeholder="Whatsapp" value="{{ old('whatsapp') }}"/>
                </div>
                <span>
                  @if ($errors->first('whatsapp'))
                    <i class="bx bx-info-circle"></i>
                    {{ $errors->first('whatsapp') }}
                  @endif
                </span>
              </div>
              <div class="input-single">
                <div>
                  <div class="icon">
                    <i class='bx bxs-calendar' ></i>
                  </div>
                  <input type="text" name="date_of_birth" placeholder="Data Nasc" value="{{ old('date_of_birth') }}"/>
                </div>
                <span>
                  @if ($errors->first('date_of_birth'))
                    <i class="bx bx-info-circle"></i>
                    {{ $errors->first('date_of_birth') }}
                  @endif
                </span>
              </div>
            </div>
            <div class="input-single">
              <div>
                <div class="icon">
                  <i class='bx bx-happy-heart-eyes'></i>
                </div>
                  <select name="how_did_you_find_us">
                      <option value="">Como nos conheceu</option>
                      <option value="facebook" {{ old('where_did_you_find_us') == 'facebook' ? 'selected' : '' }}>Facebook</option>
                      <option value="google" {{ old('where_did_you_find_us') == 'google' ? 'selected' : '' }}>Google</option>
                      <option value="instagram" {{ old('where_did_you_find_us') == 'instagram' ? 'selected' : '' }}>Instagram</option>
                      <option value="site" {{ old('where_did_you_find_us') == 'site' ? 'selected' : '' }}>Site</option>
                      <option value="outros" {{ old('where_did_you_find_us') == 'outros' ? 'selected' : '' }}>Outros</option>
                  </select>
              </div>
              <span>
                @if ($errors->first('how_did_you_find_us'))
                  <i class="bx bx-info-circle"></i>
                  {{ $errors->first('how_did_you_find_us') }}
                @endif
              </span>
            </div>
            <div class="input-captcha">
              <span>Quanto é <strong></strong> + <strong></strong> = ?</span>
              <input type="text" id="inputCaptcha" />
            </div>
            <button class="btn-captcha" type="submit" disabled>Receber voucher</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endSection
