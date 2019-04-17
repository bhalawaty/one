@csrf

<div class="form-group row">
    <label for="name" class="col-md-2 col-form-label text-md-right">{{ __('Name') }}</label>

    <div class="col-md-10">
        {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="place" class="col-md-2 col-form-label text-md-right">{{ __('place') }}</label>

    <div class="col-md-10">
        {!! Form::select('place' ,all_places(),null,['class'=>'form-control select2','placeholder'=>'place']) !!}

        @if ($errors->has('place'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="price" class="col-md-2 col-form-label text-md-right">{{ __('price') }}</label>

    <div class="col-md-10">
        {!! Form::text('price', null, array('placeholder' => 'price','class' => 'form-control select2')) !!}

        @if ($errors->has('price'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="rooms" class="col-md-2 col-form-label text-md-right">{{ __('rooms') }}</label>

    <div class="col-md-10">
        {!! Form::select('rooms',rooms(), null, array('placeholder' => 'rooms','class' => 'form-control')) !!}

        @if ($errors->has('rooms'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rooms') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="rent" class="col-md-2 col-form-label text-md-right">{{ __('rent') }}</label>

    <div class="col-md-10">
        {!! Form::select('rent',building_rent() ,null, array('placeholder' => 'rent','class' => 'form-control')) !!}

        @if ($errors->has('rent'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('rent') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="type" class="col-md-2 col-form-label text-md-right">{{ __('type') }}</label>

    <div class="col-md-10">
        {!! Form::select('type',building_type(), null, array('placeholder' => 'type','class' => 'form-control')) !!}

        @if ($errors->has('type'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="status" class="col-md-2 col-form-label text-md-right">{{ __('status') }}</label>

    <div class="col-md-10">
        {!! Form::select('status',building_status() ,null, array('placeholder' => 'status','class' => 'form-control')) !!}

        @if ($errors->has('status'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('status') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="square" class="col-md-2 col-form-label text-md-right">{{ __('square') }}</label>

    <div class="col-md-10">
        {!! Form::text('square', null, array('placeholder' => 'square','class' => 'form-control')) !!}

        @if ($errors->has('square'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('square') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="meta" class="col-md-2 col-form-label text-md-right">{{ __('meta') }}</label>

    <div class="col-md-10">
        {!! Form::text('meta', null, array('placeholder' => 'meta','class' => 'form-control')) !!}

        @if ($errors->has('meta'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('meta') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="small_description" class="col-md-2 col-form-label text-md-right">{{ __('small_description') }}</label>

    <div class="col-md-10">
        {!! Form::textarea('small_description', null, array('placeholder' => 'small_description','rows'=>3 ,'class' => 'form-control')) !!}

        @if ($errors->has('small_description'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('small_description') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="long_description" class="col-md-2 col-form-label text-md-right">{{ __('long_description') }}</label>

    <div class="col-md-10">
        {!! Form::textarea('long_description', null, array('placeholder' => 'long_description','class' => 'form-control')) !!}

        @if ($errors->has('long_description'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('long_description') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="longitude" class="col-md-2 col-form-label text-md-right">{{ __('longitude') }}</label>

    <div class="col-md-10">
        {!! Form::text('longitude', null, array('placeholder' => 'longitude','class' => 'form-control')) !!}

        @if ($errors->has('longitude'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('longitude') }}</strong>
                                    </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="Latitude" class="col-md-2 col-form-label text-md-right">{{ __('Latitude') }}</label>

    <div class="col-md-10">
        {!! Form::text('Latitude', null, array('placeholder' => 'Latitude','class' => 'form-control')) !!}

        @if ($errors->has('Latitude'))
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Latitude') }}</strong>
                                    </span>
        @endif
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ __('submit') }}
        </button>
    </div>
</div>

