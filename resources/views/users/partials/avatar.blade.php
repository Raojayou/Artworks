{{ method_field('PATCH') }}

<div class="col rounded parallax col-lg-12 col-form-label text-white text-lg-center">
    <p>Avatar del Usuario:</p>
    <div class="col-sm-3 ">
        <img src="{{ $user['avatar'] }}" width="261" height="245">
        {{--<label class="{{ $errors->has('avatar') ? 'is-invalid-label' : ''}}" for="avatar">Avatar: </label>--}}
        {{--<input type="text" id="avatar" name="avatar" placeholder="{{ $user->avatar }}"--}}
        {{--class="{{ $errors->has('avatar') ? 'is-invalid-input' : ''}}">--}}
        {{--@if( $errors->has('avatar') )--}}
        {{--<p class="validation-error">{{ $errors->first('avatar') }}</p>--}}
        {{--@endif--}}
    </div>

    {{--<div class="col-lg-12 col-form-label text-lg-center">--}}
    {{--<button type="submit" class="button">Actualizar</button>--}}
    {{--</div>--}}
</div>