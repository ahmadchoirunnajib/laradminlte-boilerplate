        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="https://marketplace.canva.com/MAB3jXMvMYo/1/thumbnail/canva-avatar-man-icon-business-people-design--MAB3jXMvMYo.png" class="img-circle" alt="User Image" />
                    </div>
                    <div class="pull-left info">
                        <p>{{ Auth::user()->name }}</p>
                        <!-- Status -->
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MENU</li>
                    <!-- Optionally, you can add icons to the links -->
                    <li class="{{ Active::check('dashboard', true) }}"><a href="{{ route('home') }}"><i class="fa  fa-dashboard"></i><span>Dashboard</span></a></li>
                    <li><a href="{{ url('') }}"  target="_blank"><i class="fa fa-heart"></i><span>Visit Web</span></a></li>

                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>
