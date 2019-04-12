<form method="post" action="{{ route('register') }}" id="register-account-form" >
    @csrf
    <div class="input-with-icon-left">
        <i class="icon-material-baseline-mail-outline"></i>
        <input type="text" class="input-text with-border" name="name" id="name" placeholder="name" required/>
    </div>
    <div class="input-with-icon-left">
        <i class="icon-material-baseline-mail-outline"></i>
        <input type="text" class="input-text with-border" id="email" name="email" placeholder="Email" required/>
    </div>

    <div class="input-with-icon-left" title="Should be at least 8 characters long" data-tippy-placement="bottom">
        <i class="icon-material-outline-lock"></i>
        <input type="password" class="input-text with-border" id="password" name="password" placeholder="Пароль" required/>
    </div>

    <div class="input-with-icon-left">
        <i class="icon-material-outline-lock"></i>
        <input type="password" class="input-text with-border" id="password-confirm" name="password_confirmation" placeholder="Повторите пароль" required/>
    </div>
    <!-- Button -->
    <button class="margin-top-10 button full-width button-sliding-icon ripple-effect" type="submit" form="register-account-form">Регистрация <i class="icon-material-outline-arrow-right-alt"></i></button>

</form>

