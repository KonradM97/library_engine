<div class="row">
  <h2 class="col-md">Dodaj ucznia</h2><!-- AJAX zmienić trochę rejestrację?-->
</div>
<form action="addborrower" type="POST">
  @csrf
    <div class="form-group">
      <label for="username">{{ __('Login wypożyczającego') }}</label>
        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
      </div>
      @error('username')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror

  <div class="form-group">
      <label for="email">{{ __('Adres E-Mail') }}</label>
      <div class="form-group">
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email">
      </div>
      @error('email')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    
  </div>

  <div class="form-group">

    
      <label for="password">{{ __('Hasło') }}</label>
      <div class="form-group">
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
      </div>
      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    
  </div>

  <div class="form-group">
    
      <label for="password-confirm">{{ __('Confirm Password') }}</label>
      <div class="form-group">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
  </div>

  <div class="form-group ">
    
      <div class="form-group">
        <label for="formGroupExampleInput">Imię</label>
        <input type="text" class="form-control" id="formGroupExampleInput" required="required" placeholder="Wpisz imię">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Drugie imię</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Wpisz drugie imię (opcjonalnie)">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Nazwisko</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" required="required" placeholder="Wpisz nazwisko">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Klasa</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Wpisz klasę np. VIIa (opcjonalnie)">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">PESEL</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" pattern="[0-9]{11}" title="Pesel musi składać się z 11-stu cyfr!" placeholder="Numer PESEL (opcjonalnie)">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput2">Data urodzenia</label>
        <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="Data urodzenia (opcjonalnie)">
      </div>
      <label>Płeć</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <label class="form-check-label" for="exampleRadios1">
          Mężczyzna
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
        <label class="form-check-label" for="exampleRadios2">
          Kobieta
        </label>
      </div>
      <div class="form-group">
        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Dodaj ucznia!">
      </div>
</form>