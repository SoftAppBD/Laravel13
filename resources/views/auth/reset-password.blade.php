@extends('auth.layout')

@section('title', 'Reset Password')

@section('content')
    <div>
        <h2 class="text-3xl font-semibold tracking-tight text-slate-900">Reset password</h2>
        <p class="mt-2 text-sm text-slate-500">
            Enter your email address and choose a new password.
        </p>
    </div>

    <form method="POST" action="{{ route('password.update') }}" class="mt-8 space-y-5">
        @csrf

        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <div>
            <label for="email" class="mb-2 block text-sm font-medium text-slate-700">Email address</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email', request('email')) }}"
                required
                autofocus
                autocomplete="username"
                class="block w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10"
                placeholder="you@example.com"
            >
        </div>

        <div>
            <label for="password" class="mb-2 block text-sm font-medium text-slate-700">New password</label>
            <input
                id="password"
                type="password"
                name="password"
                required
                autocomplete="new-password"
                class="block w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10"
                placeholder="Enter a new password"
            >
        </div>

        <div>
            <label for="password_confirmation" class="mb-2 block text-sm font-medium text-slate-700">Confirm password</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
                autocomplete="new-password"
                class="block w-full rounded-2xl border border-slate-200 bg-white px-4 py-3 text-sm text-slate-900 shadow-sm outline-none transition focus:border-slate-900 focus:ring-4 focus:ring-slate-900/10"
                placeholder="Repeat your new password"
            >
        </div>

        <button
            type="submit"
            class="inline-flex w-full items-center justify-center rounded-2xl bg-slate-900 px-4 py-3 text-sm font-semibold text-white shadow-lg shadow-slate-300 transition hover:bg-slate-800 focus:outline-none focus:ring-4 focus:ring-slate-900/20"
        >
            Reset password
        </button>
    </form>

    <p class="mt-8 text-center text-sm text-slate-500">
        <a href="{{ route('login') }}" class="font-semibold text-slate-900 hover:text-slate-700">Back to sign in</a>
    </p>
@endsection
