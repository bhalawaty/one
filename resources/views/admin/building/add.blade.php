@extends('admin.layouts.layout')

@section('title')
    add state
@endsection

@section('header')
@endsection

@section('content')


    <section class="content-header">
        <h1>
            add state
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/adminpanel/buildings')}}">all state</a></li>
            <li class="active" href="{{url('/adminpanel/buildings/create')}}">add state</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New state</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{ url('adminpanel/buildings') }}">
                            @include('admin.building.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
@endsection