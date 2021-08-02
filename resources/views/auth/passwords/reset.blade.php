@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-5 d-none d-xl-block login-banner-bg"
                style="background-image: url({{ asset('img/banner.png') }})">
                <div class="login-banner">
                    <div class="login-banner__body m-auto text-center">
                        <h4 class="login-banner__subtitle mt-0">
                            nice to see you again
                        </h4>
                        <h1 class="login-banner__title">
                            welcome back
                        </h1>
                        <p class="login-banner__text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam vel rerum enim impedit
                            doloremque obcaecati mollitia odio consectetur
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-xl-7">
                <div class="row g-3 justify-content-center">
                    <div class="col-xl-10">
                        <div class="login-content">
                            <div class="login-content__head d-flex align-items-center justify-content-between">
                                <a href="#" class="login-content__logo-text">
                                    agrostar
                                </a>
                                <a class="btn secondary-button"
                                    href="{{ route('register') }}">{{ __('Register') }}</a>
                            </div>
                            <div class="login-content__box mt-auto mb-4">
                                <h3 class="login-content__title mt-0">login account</h3>
                                <p class="login-content__text">
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur! Dicta
                                    ea
                                    voluptas eum non. Nulla tempora
                                </p>
                            </div>
                            <div class="login-content__form mb-auto">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">
                                    <div class="form-group row justify-content-center mb-3">
                                        <div class="col-md-7">
                                            <input id="email" type="email"
                                                class="form-control form-input @error('email') is-invalid @enderror"
                                                name="email" value="{{ $email ?? old('email') }}" placeholder="email"
                                                required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group row justify-content-center mb-3">
                                        <div class="col-md-7">
                                            <input id="password" type="password" placeholder="password"
                                                class="form-control form-input @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row justify-content-center mb-3">
                                        <div class="col-md-7">
                                            <input id="password-confirm" type="password" class="form-control form-input"
                                                name="password_confirmation" placeholder="confirm password" required
                                                autocomplete="new-password">
                                        </div>
                                    </div>


                                    <div class="form-group row mb-0 justify-content-center mb-5">
                                        <div class="col-md-7">
                                            <button type="submit" class="btn primary-button text-uppercase w-100">
                                                {{ __('reset password') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
