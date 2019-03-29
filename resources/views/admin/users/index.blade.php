@extends('admin.layouts.layout')

@section('title')
    users
    @endsection


@section('header')
    <!-- DataTables -->
    {!! Html::style('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') !!}


@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/adminpanel')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><a  href="{{url('/adminpanel/users')}}" >All Users</a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">All Users</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>user name</th>
                                <th>use E-mail</th>
                                <th>created at</th>
                                <th>auth</th>
                                <th>operations</th>
                            </tr>
                            </thead>
                            <tbody>
                                    @foreach($user as $userinfo)
                                        <tr>
                                            <td>{{$userinfo->id}}</td>
                                            <td>{{$userinfo->name}}</td>
                                            <td>{{$userinfo->email}}</td>
                                            <td>{{$userinfo->created_at}}</td>
                                            <td>{{$userinfo->admin == 1 ? "admin" : "user"}}</td>
                                            <td>
                                                <a href="{{url('/adminpanel/users/'.$userinfo->id.'/edit')}}">EDIT</a>
                                                |
                                                <a href="{{url('/adminpanel/users/'.$userinfo->id.'/delete')}}">DELETE</a>
                                            </td>
                                        </tr>
                                        @endforeach

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>user name</th>
                                <th>use E-mail</th>
                                <th>created at</th>
                                <th>auth</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
@endsection

@section('footer')
    <!-- jQuery 3 -->
    {!!  Html::script('/admin/bower_components/jquery/dist/jquery.min.js') !!}
    <!-- DataTables -->
    {!!  Html::script('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js') !!}
    {!!  Html::script('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') !!}




    <script type="text/javascript">
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            });
    </script>
@endsection