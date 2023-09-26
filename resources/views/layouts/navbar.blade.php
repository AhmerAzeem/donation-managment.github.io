<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>

</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('dashboard') }}" class="brand-link">
        <img src="{{ asset('assets/admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Donation Managment</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('profile.edit') }}" class="d-block">{{ auth()->user()->name }}</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link @if (Request::segment(1) == 'dashboard') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item @if (Request::segment(1) == 'shopkeepers') menu-open @endif  @if (Request::segment(1) == 'add-shopkeeper') menu-open @endif"
                    id="shopkeepermenu">
                    <a href="#"
                        class="nav-link @if (Request::segment(1) == 'shopkeepers') active @endif  @if (Request::segment(1) == 'add-shopkeeper') active @endif">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Shopkeepers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('add.shopkeeper') }}"
                                class="nav-link @if (Request::segment(1) == 'add-shopkeeper') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Shopkeeper</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('manage.shopkeepers') }}"
                                class="nav-link @if (Request::segment(1) == 'shopkeepers') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Shopkeepers</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item @if (Request::segment(1) == 'fund') menu-open @endif" id="fundsmenu">
                    <a href="#" class="nav-link  @if (Request::segment(1) == 'fund') active @endif">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            Funds
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('generate.fund') }}"
                                class="nav-link  @if (Request::segment(1) == 'fund') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Generate Fund</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if (Request::segment(1) == 'accounts') menu-open @endif @if (Request::segment(1) == 'ledger') menu-open @endif"
                    id="fundsmenu">
                    <a href="#" class="nav-link  @if (Request::segment(1) == 'accounts') active @endif">
                        <i class="nav-icon fas fa-user"></i>
                        <p>
                            Accounts
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('manage.account') }}"
                                class="nav-link  @if (Request::segment(1) == 'accounts') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Manage Accounts</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('search.account') }}"
                                class="nav-link @if (Request::segment(1) == 'ledger') active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Search Ledger</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('expenses') }}"
                        class="nav-link @if (Request::segment(1) == 'expenses') active @endif">
                        <i class="nav-icon fas fa-money-bill"></i>
                        <p>
                            Expenses
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a class="nav-link" style="cursor: pointer" :href="route('logout')"
                            onclick="event.preventDefault();
                                  this.closest('form').submit();">
                            <i class="fas fa-sign-out nav-icon"></i>
                            <p>
                                Log Out
                            </p>
                        </a>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
