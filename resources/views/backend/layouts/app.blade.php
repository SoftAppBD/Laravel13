<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('backend.layouts.header')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
    <div class="wrapper">
        @php
            $y = '𝕪';
            $r = '𝕣';
        @endphp
        <nav class="main-header navbar navbar-expand navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}" target="_blank" title="Open Home Page"
                        role="button">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown user-menu">

                    <a href="#" class="btn btn-outline-success btn-flat float-right nav-link dropdown-toggle"
                        data-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-user-lock"></i>
                        &nbsp;
                        <b>
                            Profile
                        </b>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
                        <li class="user-header bg-success">
                            <p>
                            <h5>
                                {{ auth()->user()->name }}
                            </h5>
                            <small>
                                ( {{ auth()->user()->email }} )
                            </small>
                            <br>
                            <small>
                                Last Update:
                                {{ \Carbon\Carbon::parse(auth()->user()->updated_at)->format('j F, Y') }}
                            </small>
                            </p>
                        </li>
                        @php
                            $p = '𝕡';
                        @endphp
                        <li class="user-footer">
                            <a href="{{ route('profile.show') }}" class="btn btn-outline-success btn-flat">Profile</a>
                            <a href="#" class="btn btn-outline-danger btn-flat float-right" data-toggle="tooltip"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                </li>
                @php
                    $c = 'ℂ';
                    $o = '𝕠';
                @endphp
                <li class="user-footer">
                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        @php
            $i = '𝕚';
            $g = '𝕘';
        @endphp
        @include('backend.layouts.sidebar')
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>

        @php
            $h = '𝕙';
            $t = '𝕥';
        @endphp
        <br>
        <br>
        <footer class="main-footer navbar-dark">
            @include('backend.layouts.key')
            <strong>
                {{ $c . $o . $p . $y . $r . $i . $g . $h . $t }} &copy; <i> {{ now()->year }}</i>
            </strong>
        </footer>
    </div>
    @include('backend.layouts.footer')
</body>

</html>
