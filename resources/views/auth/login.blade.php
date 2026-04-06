<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login | Admin Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="{{ asset('/backend/css/app.css') }}" rel="stylesheet">

    <style>
        body.login-page {
            min-height: 100vh;
            background: #f4f6f9;
        }

        .login-logo a {
            color: #2d3748;
            text-decoration: none;
        }

        .login-card-body .input-group-text {
            background: #fff;
            border-left: 0;
        }

        .login-card-body .form-control {
            border-right: 0;
        }

        .login-card-body .form-control:focus {
            box-shadow: none;
        }

        .brand-text {
            font-weight: 700;
            letter-spacing: .3px;
        }

        .auth-subtitle {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 18px;
        }
    </style>
</head>
<body class="hold-transition login-page">

    <div class="login-box">
        <div class="login-logo">
            <a href="{{ url('/') }}">
                <span class="brand-text">Admin Panel</span>
            </a>
        </div>

        <div class="card card-outline card-success shadow">
            <div class="card-body login-card-body">
                <p class="login-box-msg auth-subtitle">Sign in to start your session</p>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 pl-3">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login') }}" method="POST">
                    @csrf

                    <div class="input-group mb-3">
                        <input
                            type="email"
                            name="email"
                            class="form-control @error('email') is-invalid @enderror"
                            placeholder="Email"
                            value="{{ old('email') }}"
                            required
                            autofocus
                        >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input
                            type="password"
                            name="password"
                            class="form-control @error('password') is-invalid @enderror"
                            placeholder="Password"
                            required
                        >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember" value="1">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>

                        <div class="col-6">
                            <button type="submit" class="btn btn-success btn-block">
                                <i class="fas fa-sign-in-alt mr-1"></i> Sign In
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="{{ asset('/backend/js/app.js') }}" defer></script>
    @include('sweetalert::alert')
</body>
</html>