@extends('layouts.app')

@section('content')
<style>
    /* reuse style dari login, dengan sedikit penyesuaian */
    @import url('https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap');
    
    body {
        font-family: 'Inter', sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
    }

    .register-wrapper {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }

    .register-card {
        border: none;
        border-radius: 2rem;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(0px);
        box-shadow: 0 25px 45px -12px rgba(0, 0, 0, 0.25);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .register-card:hover {
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

    /* input style */
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
    }

    .invalid-feedback-custom {
        display: block;
        font-size: 0.75rem;
        color: #ef4444;
        margin-top: 0.5rem;
        margin-left: 1rem;
    }

    /* button */
    .btn-register {
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

    .btn-register:hover {
        transform: scale(1.02);
        background: linear-gradient(105deg, #7c3aed 0%, #5b21b6 100%);
        box-shadow: 0 8px 20px rgba(107, 70, 193, 0.4);
    }

    .btn-register:active {
        transform: scale(0.98);
    }

    /* link login */
    .login-link {
        font-size: 0.85rem;
        color: #6b7280;
        transition: color 0.2s;
        text-decoration: none;
        font-weight: 500;
    }

    .login-link:hover {
        color: #8b5cf6;
        text-decoration: underline;
    }

    /* divider */
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

    @media (max-width: 768px) {
        .card-body {
            padding: 1.5rem;
        }
        .card-header {
            font-size: 1.5rem;
        }
    }

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

    .register-card {
        animation: fadeInUp 0.6s ease-out;
    }
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<div class="register-wrapper">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card register-card">
                    <div class="card-header">
                        {{ __('Buat Akun Baru') }}
                        <p style="font-size: 0.85rem; font-weight: normal; color: #6b7280; margin-top: 0.5rem;">Isi data diri Anda</p>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-user input-icon"></i>
                                    <input id="name" type="text" 
                                           class="form-control-custom @error('name') is-invalid @enderror" 
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                                           placeholder="Nama lengkap">
                                </div>
                                @error('name')
                                    <span class="invalid-feedback-custom" role="alert">
                                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Email -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-envelope input-icon"></i>
                                    <input id="email" type="email" 
                                           class="form-control-custom @error('email') is-invalid @enderror" 
                                           name="email" value="{{ old('email') }}" required autocomplete="email"
                                           placeholder="Alamat Email">
                                </div>
                                @error('email')
                                    <span class="invalid-feedback-custom" role="alert">
                                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Password -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-lock input-icon"></i>
                                    <input id="password" type="password" 
                                           class="form-control-custom @error('password') is-invalid @enderror" 
                                           name="password" required autocomplete="new-password"
                                           placeholder="Kata sandi">
                                </div>
                                @error('password')
                                    <span class="invalid-feedback-custom" role="alert">
                                        <i class="fas fa-exclamation-circle me-1"></i> {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <!-- Confirm Password -->
                            <div class="mb-4">
                                <div class="input-group-custom">
                                    <i class="fas fa-check-circle input-icon"></i>
                                    <input id="password-confirm" type="password" 
                                           class="form-control-custom" 
                                           name="password_confirmation" required autocomplete="new-password"
                                           placeholder="Konfirmasi kata sandi">
                                </div>
                            </div>

                            <!-- Register Button -->
                            <div class="mb-3">
                                <button type="submit" class="btn btn-register">
                                    <i class="fas fa-user-plus me-2"></i> {{ __('Daftar') }}
                                </button>
                            </div>

                            <!-- Divider -->
                            <div class="divider">
                                <span>Atau</span>
                            </div>

                            <!-- Link to Login -->
                            <div class="text-center mt-3">
                                <span style="font-size: 0.85rem; color: #6b7280;">Sudah punya akun? 
                                    <a href="{{ route('login') }}" class="login-link">Masuk di sini</a>
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