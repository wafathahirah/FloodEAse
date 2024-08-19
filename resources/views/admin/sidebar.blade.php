<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-text mx-3">Haluan Kelantan</div>
    </a>

    

    <!-- Nav Item --->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Laman Utama</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('resident.index') }}">
            <i class="fa fa-users"></i>
            <span>Penduduk</span></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.listAllInventory') }}">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Inventori</span></a>
    </li>
     <!-- Divider -->
     <hr class="sidebar-divider">

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.listAllJKK') }}">
            <i class="fa fa-user"></i>
            <span>Wakil Tempat</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu ajk -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Kakitangan</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{ route('admin.listAllStaff') }}">Senarai Kakitangan</a>
                <a class="collapse-item" href="{{ route('admin.listAllPosition') }}">Jawatan</a>
                <a class="collapse-item" href="{{ route('admin.listAllCommittee') }}">AJK</a>
                <a class="collapse-item" href="{{ route('admin.listAllLeaderLocation') }}">Lokasi</a>
            </div>
        </div>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading 
    <div class="sidebar-heading">
        Addons
    </div> -->

    

    

</ul>