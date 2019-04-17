@extends('layouts.app')
@section('title')
    welcome to first real estate website in middle east
@endsection
@section('header')
    {!! Html::style('custom/select2.min.css') !!}
    {!! Html::style('custom/buildings.css') !!}

    <style>
        .search {
            padding: 10px;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">

                        {!! Form::open(['url'=>'search','action' => 'post']) !!}
                        <ul class="nav">

                            <li class="search">
                                {!! Form::text('price' ,null,['class'=>'form-control','placeholder'=>'price']) !!}
                            </li>
                            <li class="search">
                                {!! Form::text('square' ,null,['class'=>'form-control','placeholder'=>'square']) !!}
                            </li>
                            <li class="search">
                                {!! Form::select('place' ,all_places(),null,['class'=>'form-control select2','placeholder'=>'place']) !!}
                            </li>
                            <li class="search">
                                {!! Form::select('rent' ,building_rent(),null,['class'=>'form-control','placeholder'=>'rent']) !!}
                            </li>
                            <li class="search">
                                {!! Form::select('type' ,building_type(),null,['class'=>'form-control','placeholder'=>'type']) !!}
                            </li>
                            <li class="search">
                                {!! Form::select('rooms',rooms(),null,['class'=>'form-control select2','placeholder'=>'rooms']) !!}
                            </li>

                            <li class="search">
                                {!! Form::submit('submit',null,['class'=>'form-control']) !!}
                            </li>

                        </ul>
                        {!! Form::close() !!}
                    </div>
                    <!-- END MENU -->
                </div>
                <br>
                <div class="profile-sidebar">

                    <!-- SIDEBAR MENU -->
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{url('/showAll')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    all estates </a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/1')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    rent </a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/0')}}">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    ownership </a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/type/0')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    villa </a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/type/1')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    apartment </a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/type/3')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    chalet</a>
                            </li>
                            <li>
                                <a href="{{url('/showAll/type/2')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    house </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    @include('users.foreach')
                    <div class="text-center">
                        {{$buildings->appends(Request::except('page'))->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
@endsection
@section('footer')
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
    {!! Html::script('custom/select2.min.js') !!}

@endsection