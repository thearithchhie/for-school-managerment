<aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">

        <div class="user-profile">
            <div class="ulogo">
                <a href="">
                    <!-- logo for regular state and mobile devices -->
                    <div class="d-flex align-items-center justify-content-center">
                        <img src="{{ asset('../backend/images/logo-dark.png') }}" alt="">
                        <h3><b>School</b> management</h3>
                    </div>
                </a>
            </div>
        </div>

        <!-- sidebar menu-->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="treeview">
                <a href="#">
                    <i data-feather="message-circle"></i>
                    <span>Department</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('departments.create') }}"><i class="ti-more"></i>Create</a></li>
                    <li><a href="{{ route('departments.index') }}"><i class="ti-more"></i>List</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>Role</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('roles.create') }}"><i class="ti-more"></i>Create</a></li>
                     <li><a href="{{ route('roles.index') }}"><i class="ti-more"></i>List</a></li>
                      <li><a href="{{ route('admin.roles.list') }}"><i class="ti-more"></i>All Role</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="mail"></i> <span>Permission</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('permissions.add') }}"><i class="ti-more"></i>Create</a></li>
                    <li><a href=""><i class="ti-more"></i>List</a></li>
                </ul>
            </li>

            <li class="header nav-small-cap">User Interface</li>

            <li class="treeview">
                <a href="#">
                    <i data-feather="grid"></i>
                    <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-right pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="components_alerts.html"><i class="ti-more"></i>Alerts</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('admin.logout') }}">
                    <i data-feather="lock"></i>
                    <span>Log Out</span>
                </a>
            </li>

        </ul>
    </section>

    <div class="sidebar-footer">
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings"
            aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
        <!-- item-->
        <a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i
                class="ti-email"></i></a>
        <!-- item-->
        <a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i
                class="ti-lock"></i></a>
    </div>
</aside>