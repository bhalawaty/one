@extends('admin.layouts.layout')

@section('title')
    @endsection

@section('header')
    {!! Html::style('custom/select2.min.css') !!}
@endsection

@section('content')


    <section class="content-header">
        <h1>
            Add New User
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{url('/adminpanel/users')}}">all users</a></li>
            <li class="active" href="{{url('/adminpanel/users/create')}}" >add user</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Add New User</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form method="POST" action="{{ url('adminpanel/users') }}">
                        @include('admin.users.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('footer')
    <script>
        $(document).ready(function () {
            $('.select2').select2();
        });
    </script>
    {!! Html::script('custom/select2.min.js') !!}
@endsection