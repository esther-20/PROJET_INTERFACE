<!--Start sidebar-wrapper-->
    <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
    
        <div class="brand-logo">
            <a href="#">
                <img src="{{asset('assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
                <h5 class="logo-text">Dashtreme Admin</h5>
            </a>
        </div>
        <ul class="sidebar-menu do-nicescrol">
            
            <li class="sidebar-header">Menu Principal</li>
            <li>
                <a href="{{ Route('home') }}">
                    <i class="zmdi zmdi-view-dashboard"></i> <span>Tableau de Bord</span>
                </a>
            </li>

            <li>
                <a href="{{ Route('admin.users.index') }}">
                    <i class="zmdi zmdi-accounts"></i> <span>Liste des Inscrits</span>
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
                    <small class="badge float-right badge-light">New</small>
                </a>
            </li>

        </ul>

    </div>
<!--End sidebar-wrapper-->
