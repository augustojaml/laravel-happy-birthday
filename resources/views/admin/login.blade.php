@extends('main')

@section('content')
<section class="mt-login">
    <div class="login-wrapper">
    <div class="hero">
        <img src="{{ url(asset('assets/images/hero.png')) }}" alt="Hero" />
    </div>
    <div class="form">
        <form action="" method="POST" data-action="{{ route('admin.submitLogin') }}">
        <div class="header">
            <img src="{{ url(asset('assets/images/logo-matraca.png')) }}" alt="Hero" />
            <div class="message-content">
              <div class="message">Password e/ou senha inválidos</div>
            </div>
        </div>
        <div class="input-single">
            <label>
            <i class="bx bxs-envelope"></i>
            E-mail
            </label>
            <input type="text" name="email" />
            <span>
            &nbsp;
            {{-- <i class="bx bx-info-circle"></i>
            Preecha todos os campos --}}
            </span>
        </div>
        <div class="input-single">
            <label>
            <i class="bx bxs-lock-open-alt"></i>
            Password
            </label>
            <input type="password" name="password" />
            <span>
              &nbsp;
            {{-- <i class="bx bx-info-circle"></i>
            Preecha todos os campos --}}
            </span>
        </div>
        <div class="input-single">
          <button type="submit">Entrar</button>
        </div>
        </form>
    </div>
    </div>
</section>
@endsection

@section('js')
    {{-- <script>
      (function($) {
        $(".mt-login form").submit(function(event) {
          event.preventDefault();
          $.ajaxSetup({ headers: {"X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),},});

          $.ajax({
            url: $(this).data('action'),
            async: "true",
            type: "POST",
            data: {
              form: $(this).serialize()
            },
            success: function (response) {
              alert(response);
            },
        });
        });
      })(jQuery)
    </script> --}}
@endsection
