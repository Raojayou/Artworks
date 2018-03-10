{{ method_field('PATCH') }}

<div class="col rounded bg-color col-lg-12 col-form-label text-white text-lg-right">
    <label class="{{ $errors->has('name') ? 'is-invalid-label' : ''}}" for="name">Nombre: </label>
    <input type="text" name="name" id="name" placeholder="{{ $user->name }}"
           class="{{ $errors->has('name') ? 'is-invalid-input' : ''}}">
    @if( $errors->has('name') )
        <p class="validation-error">{{ $errors->first('name') }}</p>
    @endif
</div>
<div class="col rounded bg-color col-lg-12 col-form-label text-white text-lg-right">
    <label class="{{ $errors->has('email') ? 'is-invalid-label' : ''}}" for="email">Email: </label>
    <input type="text" id="email" name="email" placeholder="{{ $user->email }}"
           class="{{ $errors->has('email') ? 'is-invalid-input' : ''}}">
    @if( $errors->has('email') )
        <p class="validation-error">{{ $errors->first('email') }}</p>
    @endif
</div>

<div class="col-lg-12 col-form-label text-lg-center">
    <button type="submit" class="button">Actualizar</button>
</div>