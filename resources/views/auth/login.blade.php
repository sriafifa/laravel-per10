@extends('layouts.app')

@section('content')
<style>
    /* Custom Font & Global */
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
    }

    .login-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }

    .login-card {
        border: none;
        border-radius: 2rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(0px);
        box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .login-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 30px 55px -12px rgba(0, 0, 0, 0.3);
    }

    .card-header {
        background: transparent;
        border-bottom: none;
        text-align: center;
        font-size: 1.8rem;
        font-weight: 700;
        letter-spacing: -0.5px;
        padding-top: 2rem;
        padding-bottom: 0.5rem;
        color: #1f2937;
    }

    .card-body {
        padding: 2rem 2rem 2.5rem;
    }

    /* Custom Input Style */
    .input-group-custom {
        position: relative;
        margin-bottom: 0.25rem;
    }

    .input-icon {
        position: absolute;
        left: 1rem;
        top: 50%;
        transform: translateY(-50%);
        color: #9ca3af;
        font-size: 1.1rem;
        z-index: 10;
        pointer-events: none;
    }

    .form-control-custom {
        width: 100%;
        padding: 0.85rem 1rem 0.85rem 2.8rem;
        font-size: 0.95rem;
        border: 1px solid #e5e7eb;
        border-radius: 1.5rem;
        background-color: #f9fafb;
        transition: all 0.2s ease;
    }

    .form-control-custom:focus {
        border-color: #8b5cf6;
        box-shadow: 0 0 0 4px rgba(139, 92, 246, 0.2);
        background-color: #ffffff;
        outline: none;
    }

    .form-control-custom.is-invalid {
        border-color: #ef4444;
        background-image: none;
    }

    .invalid-feedback-custom {
        display: block;
        font-size: 0.75rem;
        color: #ef4444;
        margin-top: 0.5rem;
        margin-left: 1rem;
    }

    /* Custom Checkbox */
    .checkbox-custom {
        display: flex;
        align-items: center;
        gap: 0.5rem;
        cursor: pointer;
    }

    .checkbox-custom input {
        width: 1.1rem;
        height: 1.1rem;
        accent-color: #8b5cf6;
        cursor: pointer;
    }

    .checkbox-custom span {
        font-size: 0.9rem;
        color: #4b5563;
        user-select: none;
    }

    /* Button Gradient */
    .btn-login {
        background: linear-gradient(105deg, #8b5cf6 0%, #6d28d9 100%);
        border: none;
        padding: 0.85rem 1.5rem;
        border-radius: 2rem;
        font-weight: 600;
        font-size: 0.95rem;
        width: 100%;
        transition: all 0.3s ease;
        box-shadow: 0 4px 12px rgba(107, 70, 193, 0.25);
        color: white;
    }

    .btn-login:hover {
        transform: scale(1.02);
        background: linear-gradient(105deg, #7c3aed 0%, #5b21b6 100%);
        box-shadow: 0 8px 20px rgba(107, 70, 193, 0.4);
    }

    .btn-login:active {
        transform: scale(0.98);
    }

    /* Forgot link */
    .forgot-link {
        font-size: 0.85rem;
        color: #6b7280;
        transition: color 0.2s;
        text-decoration: none;
        margin-left: 0.75rem;
    }

    .forgot-link:hover {
        color: #8b5cf6;
        text-decoration: underline;
    }

    /* Divider */
    .divider {
        text-align: center;
        position: relative;
        margin: 1.5rem 0 0.5rem;
    }

    .divider::before,
    .divider::after {
        content: "";
        position: absolute;
        top: 50%;
        width: 45%;
        height: 1px;
        background-color: #e5e7eb;
    }

    .divider::before {
        left: 0;
    }

    .divider::after {
        right: 0;
    }

    .divider span {
        background-color: transparent;
        padding: 0 1rem;
        font-size: 0.8rem;
        color: #9ca3af;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
        .card-header {
            font-size: 1.5rem;
        }
    }

    /* Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .login-card {
        animation: fadeInUp 0.6s ease-out;
    }
</style>

<!-- Font Awesome 6 (free) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="login-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card login-card">
                    <div class="card-header">
                        {{ __('Selamat Datang') }}
                        <p style="font-size: 0.85rem; font-weight: normal; color: #6b7280; margin-top: 0.5rem;">Silakan masuk ke akun Anda</p>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Field -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input id="email" type="email" 
                                           class="form-control-custom @error('email') is-invalid @enderror" 
                                           name="email" value="{{ old('email') }}" 
                                           required autocomplete="email" autofocus
                                           placeholder="Alamat Email">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback-custom" role="alert">
                                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Field -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input id="password" type="password" 
                                           class="form-control-custom @error('password') is-invalid @enderror" 
                                           name="password" required autocomplete="current-password"
                                           placeholder="Kata Sandi">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback-custom" role="alert">
                                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Remember Me & Forgot Password -->
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <label class="checkbox-custom">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span>{{ __('Ingat Saya') }}</span>
                                </label>

                                @if (Route::has('password.request'))
                                    <a class="forgot-link" href="{{ route('password.request') }}">
                                        <i class="fas fa-key me-1"></i> {{ __('Lupa Password?') }}
                                    </a>
                                @endif
                            </div>

                            <!-- Login Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-login">
                                    <i class="fas fa-arrow-right-to-bracket me-2"></i> {{ __('Masuk') }}
                                </button>
                            </div>

                            <!-- Divider Optional -->
                            <div class="divider">
                                <span>Atau</span>
                            </div>

                            <!-- Optional: extra link to register if needed (custom) -->
                            <div class="text-center mt-3">
                                <span style="font-size: 0.85rem; color: #6b7280;">Belum punya akun? 
                                    <a href="{{ route('register') }}" style="color: #8b5cf6; text-decoration: none; font-weight: 500;">Daftar sekarang</a>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection