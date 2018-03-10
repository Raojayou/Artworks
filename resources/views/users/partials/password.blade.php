{{ method_field('PATCH') }}

<div class="col rounded bg-color col-lg-12 col-form-label text-white text-lg-right">
    <label for="current_password" class="{{ $errors->has('current_password') ? 'is-invalid-label' : ''}}">Contraseña
        Actual: </label>
    <input type="password" id="current_password" name="current_password"
           class="{{ $errors->has('current_password') ? 'is-invalid-input' : ''}}"></div>
@if( $errors->has('current_password') )
    <p class="validation-error">{{ $errors->first('current_password') }}</p>
@endif

<div class="col rounded bg-color col-lg-12 col-form-label text-white text-lg-right">
    <label for="password" class="{{ $errors->has('password') ? 'is-invalid-label' : ''}}">Contraseña Nueva: </label>
    <input type="password" id="password" name="password"
           class="{{ $errors->has('password') ? 'is-invalid-input' : ''}}"></div>
@if( $errors->has('password') )
    <p class="validation-error">{{ $errors->first('password') }}</p>
@endif

<div class="col rounded bg-color col-lg-12 col-form-label text-white text-lg-right">
    <label for="password_confirmation">Repetir Contraseña: </label>
    <input type="password" id="password_confirmation" name="password_confirmation">
    @if( $errors->has('password_confirmation') )
        <p class="validation-error">{{ $errors->first('password_confirmation') }}</p>
    @endif
</div>

<div class="col rounded col-lg-12 col-form-label text-white text-lg-center">
    <button type="submit" class="button">Actualizar</button>
</div>