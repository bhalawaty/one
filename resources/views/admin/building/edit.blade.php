@extends('admin.layouts.layout')

@section('title')
    update in state info
@endsection

@section('header')
@endsection

@section('content')


    <section class="content-header">
        <h1>update in state info</h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/adminpanel/buildings')}}">all state</a></li>
            <li class="active" href="{{url('/adminpanel/buildings/edit')}}">update state</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">update state</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        {!! Form::model($building, ['method' => 'PATCH','route' => ['buildings.update', $building->id]]) !!}
                        @include('admin.building.form')
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section('footer')
@endsection