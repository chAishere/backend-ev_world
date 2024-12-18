<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{url('/home')}}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">EV-World <sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="{{url('/home')}}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <li class="nav-item">
                <a class="nav-link" href="{{url('/Models_List')}}">
                    <i class="fas fa-fw fa-box"></i>
                    <span>Models List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/Model_Add')}}">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add Models</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/Cars_List')}}">
                    <i class="fas fa-fw fa-car"></i>
                    <span>Cars List</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/Car_Add')}}">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Add Cars</span></a>
            </li>
           

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>