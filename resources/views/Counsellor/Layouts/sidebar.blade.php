<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"  href="{{ route('counsellor.index') }}" aria-expanded="false">
                        <i class="mdi mdi-view-dashboard"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                {{-- <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ rcounsellor.Profile') }}" aria-expanded="false">
                        <i class="mdi mdi-account-network"></i><span class="hide-menu">Profile</span>
                    </a>
                </li> --}}
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('counsellor.Bookings') }}" aria-expanded="false">
                        <i class="mdi mdi-border-all"></i>
                        <span class="hide-menu">Bookings</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('counsellor.Sessions') }}" aria-expanded="false">
                        <i class="mdi mdi-border-all"></i>
                        <span class="hide-menu">Sessions</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('counsellor.Programs') }}" aria-expanded="false">
                        <i class="mdi mdi-face"></i>
                        <span class="hide-menu">Programs</span>
                    </a>
                </li>

            </ul>

        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
