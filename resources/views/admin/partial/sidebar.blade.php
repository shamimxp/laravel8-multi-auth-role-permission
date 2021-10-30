<div class="app-sidebar__user">
{{--    <img class="app-sidebar__user-avatar" src="https://s3.amazonaws.com/uifaces/faces/twitter/jsa/48.jpg" alt="User Image">--}}
    <div>
        <p class="app-sidebar__user-name">Name: {{ Auth::guard('admin')->user()->name }}</p>
        <p class="app-sidebar__user-designation">Email: {{ Auth::guard('admin')->user()->email }}</p>
    </div>
</div>
<ul class="app-menu">
    <li><a class="app-menu__item active" href="{{url('/')}}"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Core Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Department</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Designation</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Core Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Department</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Designation</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Core Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Department</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Designation</a></li>
        </ul>
    </li>
    <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">Core Data</span><i class="treeview-indicator fa fa-angle-right"></i></a>
        <ul class="treeview-menu">
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Department</a></li>
            <li><a class="treeview-item" href="#"><i class="icon fa fa-circle-o"></i>Designation</a></li>
        </ul>
    </li>
</ul>
