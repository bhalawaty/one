@extends('admin.layouts.layout')
@section('title')
    Site Settings

@endsection

@section('header')
@endsection

@section('content')


    <section class="content-header">
        <h1>
            Site Settings
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active" href="{{url('/adminpanel/sitesettings')}}">Site Settings</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">site setting</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{ url('adminpanel/sitesettings') }}">
                            {{csrf_field()}}
                            @foreach($sitesetting as $siteinfo)
                                <div class="form-group row">
                                    <div class="col-md-2">
                                        {{$siteinfo->slug}}
                                    </div>
                                    <div class="col-md-10">
                                        @if($siteinfo->type == 0)
                                            {!! Form::text($siteinfo->namesetting, $siteinfo->value, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        @else
                                            {!! Form::textarea($siteinfo->namesetting, $siteinfo->value, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                        @endif
                                        @if ($errors->has($siteinfo->namesetting))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first($siteinfo->namesetting) }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        <div class="form-group row ">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary">
                                  <li class="fa fa-save "></li>  {{ __('save') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
