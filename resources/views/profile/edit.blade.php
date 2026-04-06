<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen bg-gray-100 py-10 px-4">
    <div class="mx-auto max-w-4xl space-y-6">
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">Profile Settings</h1>
                <p class="text-sm text-gray-600">Name, email, and password update korte parben.</p>
            </div>

            <div class="flex items-center gap-3">
                <a href="{{ route('dashboard') }}"
                   class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">
                    Dashboard
                </a>

                <form method="POST" action="/logout">
                    @csrf
                    <button type="submit"
                        class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-black">
                        Logout
                    </button>
                </form>
            </div>
        </div>

        @if (session('status') === 'profile-updated')
            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                Profile updated successfully.
            </div>
        @endif

        @if (session('status') === 'password-updated')
            <div class="rounded-lg border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700">
                Password updated successfully.
            </div>
        @endif

        <div class="grid gap-6 md:grid-cols-2">
            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                <div class="mb-5">
                    <h2 class="text-lg font-semibold text-gray-900">Profile Information</h2>
                    <p class="mt-1 text-sm text-gray-600">Name and email update korun.</p>
                </div>

                <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
                    @csrf
                    @method('PATCH')

                    <div>
                        <label for="name" class="mb-1 block text-sm font-medium text-gray-700">Name</label>
                        <input
                            id="name"
                            name="name"
                            type="text"
                            value="{{ old('name', $user->name) }}"
                            required
                            autofocus
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-200"
                        >
                        @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="email" class="mb-1 block text-sm font-medium text-gray-700">Email</label>
                        <input
                            id="email"
                            name="email"
                            type="email"
                            value="{{ old('email', $user->email) }}"
                            required
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-200"
                        >
                        @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="rounded-lg border border-yellow-200 bg-yellow-50 px-4 py-3 text-sm text-yellow-800">
                            Your email is not verified yet.
                            <a href="/email/verify" class="font-medium underline">Verify now</a>
                        </div>
                    @endif

                    <div>
                        <button type="submit"
                            class="inline-flex rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-black">
                            Save Profile
                        </button>
                    </div>
                </form>
            </div>

            <div class="rounded-2xl bg-white p-6 shadow-sm ring-1 ring-gray-950/5">
                <div class="mb-5">
                    <h2 class="text-lg font-semibold text-gray-900">Update Password</h2>
                    <p class="mt-1 text-sm text-gray-600">Password change korar jonno current password din.</p>
                </div>

                <form method="POST" action="{{ route('profile.password.update') }}" class="space-y-4">
                    @csrf
                    @method('PUT')

                    <div>
                        <label for="current_password" class="mb-1 block text-sm font-medium text-gray-700">Current Password</label>
                        <input
                            id="current_password"
                            name="current_password"
                            type="password"
                            required
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-200"
                        >
                        @error('current_password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password" class="mb-1 block text-sm font-medium text-gray-700">New Password</label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            required
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-200"
                        >
                        @error('password')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="mb-1 block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input
                            id="password_confirmation"
                            name="password_confirmation"
                            type="password"
                            required
                            class="block w-full rounded-lg border border-gray-300 px-3 py-2.5 text-sm shadow-sm outline-none focus:border-gray-900 focus:ring-2 focus:ring-gray-200"
                        >
                    </div>

                    <div>
                        <button type="submit"
                            class="inline-flex rounded-lg bg-gray-900 px-4 py-2.5 text-sm font-medium text-white hover:bg-black">
                            Update Password
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>