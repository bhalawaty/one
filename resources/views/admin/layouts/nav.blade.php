<li class=" treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>site settings</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/sitesettings')}}"><i class="fa fa-circle-o"></i> main setting</a></li>
        <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> additional setting</a></li>
    </ul>
</li>


<li class=" treeview">
    <a href="#">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="active"><a href="{{url('/adminpanel/users/create')}}"><i class="fa fa-circle-o"></i> add user</a></li>
        <li><a href="{{url('/adminpanel/users')}}"><i class="fa fa-circle-o"></i> all users</a></li>
    </ul>
</li>