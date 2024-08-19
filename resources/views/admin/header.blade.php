<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

    <!-- Sidebar Toggle (Topbar) -->
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>


    <!-- Topbar Navbar -->
    <ul class="navbar-nav ml-auto">

        <!-- Nav Item - Alerts -->
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">{{auth()->user()->unreadnotifications->count()}}</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Status Pembahagian
                </h6>
                <a style="text-decoration: none;justify-content: center;display: flex;"  href="{{route('markRead')}}">TANDAKAN SEMUA SEBAGAI BACA</a>

                @foreach (auth()->user()->unreadNotifications as $notification)

                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-info text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">{{ $notification->data['title'] }}</div>
                        <span class="font-weight-bold">{!! $notification->data['messages'] !!}</span>
                    </div>
                </a>
                @endforeach

            </div>
        </li>


        <div class="topbar-divider d-none d-sm-block"></div>

        <!-- Nav Item - User Information -->
        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang,
                    {{ implode(' ', array_slice(str_word_count(session('user'), 1), 0, 3)) }}</span>
                <i class="fas fa-caret-down"></i>
            </a>
            <!-- Dropdown - User Information -->
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('profile.Adminedit') }}">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Log Keluar
                </a>
            </div>
        </li>

    </ul>

</nav>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Adakah anda ingin log keluar?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    <button type="submit" class="btn btn-primary">Log Keluar</button>
                </form>
                <!-- Trigger the form submission when clicking the Logout button -->
                <a href="#" class="btn btn-primary"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Log Keluar
                </a>
            </div>
        </div>
    </div>
</div>


