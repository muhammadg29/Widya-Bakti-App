<?php

use Illuminate\Auth\Events\Lockout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;

new #[Layout('components.layouts.auth')] class extends Component {
    #[Validate('required|string|email')]
    public string $email = '';

    #[Validate('required|string')]
    public string $password = '';

    public bool $remember = false;

    /**
     * Handle an incoming authentication request.
     */
    public function login(): void
    {
        $this->validate();

        $this->ensureIsNotRateLimited();

        if (! Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'email' => __('auth.failed'),
            ]);
        }

        RateLimiter::clear($this->throttleKey());
        Session::regenerate();

        $this->redirectIntended(default: route('dashboard', absolute: false), navigate: true);
    }

    /**
     * Ensure the authentication request is not rate limited.
     */
    protected function ensureIsNotRateLimited(): void
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout(request()));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'email' => __('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the authentication rate limiting throttle key.
     */
    protected function throttleKey(): string
    {
        return Str::transliterate(Str::lower($this->email).'|'.request()->ip());
    }

};?>

{{-- <div class="card mb-0">
    <div class="card-body">
        <a href="{{ route('home') }}" class="text-nowrap logo-img text-center d-block py-3 w-100">
            <img src="/landing/assets/images/logo.png" alt="Logo" height="100" width="100">
        </a>
        <p class="text-center">Login Admin</p>
        
        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success mb-4 text-center">
                {{ session('status') }}
            </div>
        @endif

        <form wire:submit="login">
            <!-- Email Address -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input wire:model="email" 
                       type="email" 
                       class="form-control @error('email') is-invalid @enderror" 
                       id="email"
                       autofocus
                       required
                       autocomplete="email">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input wire:model="password" 
                       type="password" 
                       class="form-control @error('password') is-invalid @enderror" 
                       id="password"
                       required
                       autocomplete="current-password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="d-flex align-items-center justify-content-between mb-4">
                <div class="form-check">
                    <input wire:model="remember" 
                           class="form-check-input" 
                           type="checkbox" 
                           id="remember_me">
                    <label class="form-check-label text-dark" for="remember_me">
                        Remember this Device
                    </label>
                </div>
                @if (Route::has('password.request'))
                    <a class="text-primary fw-bold" href="{{ route('password.request') }}" wire:navigate>
                        Forgot Password?
                    </a>
                @endif
            </div>

            <button type="submit" class="btn btn-primary w-100 py-3 fs-4 mb-4 rounded-2">
                Sign In
                <span wire:loading wire:target="login">
                    <i class="fas fa-spinner fa-spin ms-2"></i>
                </span>
            </button>
        </form>

        @if (Route::has('register'))
            <div class="d-flex align-items-center justify-content-center">
                <p class="fs-4 mb-0 fw-bold">New to our platform?</p>
                <a class="text-primary fw-bold ms-2" href="{{ route('register') }}" wire:navigate>
                    Create an account
                </a>
            </div>
        @endif
    </div>
</div> --}}

<div class="flex flex-col gap-6">
    <div class="card-body">
        <div class="flex justify-center mb-4">
            <a href="{{ route('home') }}" class="logo-img">
                <img src="/landing/assets/images/logo.png" alt="Logo" height="100" width="100">
            </a>
        </div>
        
        <p class="text-center">Widya Bakti Press</p>

        <!-- Session Status -->
        @if (session('status'))
            <div class="alert alert-success mb-4 text-center">
                {{ session('status') }}
            </div>
        @endif

    <form wire:submit="login" class="flex flex-col gap-6">
        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email address')"
            type="email"
            required
            autofocus
            autocomplete="email"
            placeholder="email@example.com"
        />

        <!-- Password -->
        <div class="relative">
            <flux:input
                wire:model="password"
                :label="__('Password')"
                type="password"
                required
                autocomplete="current-password"
                :placeholder="__('Password')"
                viewable
            />

            @if (Route::has('password.request'))
                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')" wire:navigate>
                    {{ __('Forgot your password?') }}
                </flux:link>
            @endif
        </div>

        <!-- Remember Me -->
        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

        <div class="flex items-center justify-end">
            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}</flux:button>
        </div>
    </form>

    @if (Route::has('register'))
        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
            {{ __('Don\'t have an account?') }}
            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
        </div>
    @endif
</div>
