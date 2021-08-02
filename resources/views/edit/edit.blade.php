@extends('layouts.app')

@section('content')
<div class="dashboard">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-md-1">
                <div class="dashboard__left-menu pt-3">
                    <div class="dashboard__logo mx-auto mb-5">
                        <span class="dashboard__logo-text text-uppercase text-center m-auto">
                            as
                        </span>
                    </div>
                    <ul class="list list--column dashboard__list">
                        <li class="list--column__item dashboard__left-menu-item text-center py-3">
                            <a href="#" class="dashboard__icon dashboard__icon--alpha">
                                <i class='bx bxs-home'></i>
                            </a>
                            <a href="#" class="dashboard__icon-text text-capitalize text-center sm-text mt-2">
                                home
                            </a>
                        </li>
                        <li class="list--column__item dashboard__left-menu-item text-center py-3">
                            <a href="#" class="dashboard__icon dashboard__icon--beta">
                                <i class='bx bx-list-ul' ></i>
                            </a>
                            <a href="#" class="dashboard__icon-text text-capitalize text-center sm-text mt-2">
                                list
                            </a>
                        </li>
                        <li class="list--column__item dashboard__left-menu-item text-center py-3">
                            <a href="#" class="dashboard__icon dashboard__icon--gamma">
                                <i class='bx bx-calendar' ></i>
                            </a>
                            <a href="#" class="dashboard__icon-text text-capitalize text-center sm-text mt-2">
                                campaign
                            </a>
                        </li>
                        <li class="list--column__item dashboard__left-menu-item text-center py-3 mt-auto">
                            <a href="#" class="dashboard__icon dashboard__icon--danger">
                                <i class='bx bx-log-out' ></i>
                            </a>
                            <a href="#" class="dashboard__icon-text text-capitalize text-center sm-text mt-2">
                                logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-11">
                <div class="row g-3">
                    <div class="col-12">
                        <div class="py-3">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <ul class="list list--row">
                                        <li class="list--row__item">
                                            <div class="search-box">
                                                <input type="text" class="form-control search-box__input" placeholder="search here..">
                                                <span class="search-box__icon">
                                                    <i class='bx bx-search' ></i>
                                                </span>
                                            </div>
                                        </li>
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                service
                                            </a>
                                        </li>
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                pricing
                                            </a>
                                        </li>
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                blog
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list list--row justify-content-end">
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                <span class="d-inline-block xxlg-text lh-1">
                                                    <i class='bx bx-bell' ></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                <span class="d-inline-block xxlg-text lh-1">
                                                    <i class='bx bx-cog' ></i>
                                                </span>
                                            </a>
                                        </li>
                                        <li class="list--row__item">
                                            <a href="#" class="primary-link">
                                                pricing
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="dashboard__body">
                            <div class="px-5 pt-5">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-card">
                                            <div class="profile-card__head justify-content-between align-items-center">
                                                <a href="#" class="btn profile-button profile-button--fb">
                                                    <i class='bx bxl-facebook' ></i>
                                                </a>
                                                <span class="d-inline-block profile-card__text text-capitalize text-fb">
                                                    1k views
                                                </span>
                                            </div>
                                            <div class="profile-card__body mt-3">
                                                <ul class="list list--row">
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            4.2M
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            followers
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            90
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            reaction
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            365
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            comments
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="profile-card">
                                            <div class="profile-card__head justify-content-between align-items-center">
                                                <a href="#" class="btn profile-button profile-button--tw">
                                                    <i class='bx bxl-twitter' ></i>
                                                </a>
                                                <span class="d-inline-block profile-card__text text-capitalize text-tw">
                                                    1k views
                                                </span>
                                            </div>
                                            <div class="profile-card__body mt-3">
                                                <ul class="list list--row">
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            4.2M
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            followers
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            90
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            reaction
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            365
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            comments
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="profile-card">
                                            <div class="profile-card__head justify-content-between align-items-center">
                                                <a href="#" class="btn profile-button profile-button--ins">
                                                    <i class='bx bxl-instagram' ></i>
                                                </a>
                                                <span class="d-inline-block profile-card__text text-capitalize text-ins">
                                                    1k views
                                                </span>
                                            </div>
                                            <div class="profile-card__body mt-3">
                                                <ul class="list list--row">
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            4.2M
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            followers
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            90
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            reaction
                                                        </span>
                                                    </li>
                                                    <li class="list--row__item list--row__item-free">
                                                        <h5 class="text-capitalize mt-0 mb-1 text-center">
                                                            365
                                                        </h5>
                                                        <span class="d-block xsm-text text-capitalize text-center">
                                                            comments
                                                        </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-5 px-5">
                                <div class="row g-3">
                                    <div class="col-xl-10">
                                        <div class="mb-4">
                                            <h3 class="login-content__title mt-0 text-ms">edit profile</h3>
                                            <p class="login-content__text text-start me-auto ms-0">
                                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veritatis, aspernatur! Dicta ea
                                                voluptas eum non. Nulla tempora
                                            </p>
                                        </div>
                                        <div class="login-content__form mb-auto">
                                            <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                                                @csrf

                                                <div class="form-group row mb-3">
                                                    <div class="col-md-7">
                                                        <input type="text" class="form-control form-input @error('text') is-invalid @enderror"
                                                            name="name" value="{{ Auth::user()->name }}" placeholder="email" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <div class="col-md-7">
                                                        <input type="email" class="form-control form-input @error('email') is-invalid @enderror"
                                                            name="email" value="{{ Auth::user()->email }}" placeholder="email" required autocomplete="email" autofocus>

                                                        @error('email')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <div class="col-md-7">
                                                        <input type="file" class="form-control form-input" name="image" >
                                                    </div>
                                                </div>
                                                <div class="form-group row mb-3">
                                                    <div class="col-md-7">
                                                        <textarea name="address" cols="30" rows="3" class="form-control mb-3 form-input">{{ Auth::user()->address->address }}</textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group row mb-0 mb-5">
                                                    <div class="col-md-7">
                                                        <button type="submit" class="btn primary-button text-uppercase">
                                                            {{ __('Update profile') }}
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
                    <div class="col-3">
                        <div class="mx-3">
                            <h6 class="text-capitalize mt-0 mb-3">
                                similar profiles
                            </h6>
                            <ul class="list list--column">
                                <li class="list--column__item">
                                    <div class="similar-profile d-flex">
                                        <div class="similar-profile__content d-flex align-items-center flex-grow-1">
                                            <div class="similar-profile__img flex-shrink-0" style="background-image: url({{ asset('img/user-1.jpg') }})"></div>
                                            <div class="similar-profile__text ms-3">
                                                <a href="#" class="similar-profile__name text-capitalize">
                                                    angle henry
                                                </a>
                                                <span class="similar-profile__info xsm-text text-capitalize">
                                                    developer
                                                </span>
                                            </div>
                                        </div>
                                        <a href="#" class="similar-profile__link">
                                            <span class="d-inline-block my-auto">
                                                <i class='bx bx-chevron-right' ></i>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="list--column__item">
                                    <div class="similar-profile d-flex">
                                        <div class="similar-profile__content d-flex align-items-center flex-grow-1">
                                            <div class="similar-profile__img flex-shrink-0" style="background-image: url({{ asset('img/user-2.jpg') }})"></div>
                                            <div class="similar-profile__text ms-3">
                                                <a href="#" class="similar-profile__name text-capitalize">
                                                    Natalie Portman
                                                </a>
                                                <span class="similar-profile__info xsm-text text-capitalize">
                                                    designer
                                                </span>
                                            </div>
                                        </div>
                                        <a href="#" class="similar-profile__link">
                                            <span class="d-inline-block my-auto">
                                                <i class='bx bx-chevron-right' ></i>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                                <li class="list--column__item">
                                    <div class="similar-profile d-flex">
                                        <div class="similar-profile__content d-flex align-items-center flex-grow-1">
                                            <div class="similar-profile__img flex-shrink-0" style="background-image: url({{ asset('img/user-3.jpg') }})"></div>
                                            <div class="similar-profile__text ms-3">
                                                <a href="#" class="similar-profile__name text-capitalize">
                                                    tony stark
                                                </a>
                                                <span class="similar-profile__info xsm-text text-capitalize">
                                                    developer
                                                </span>
                                            </div>
                                        </div>
                                        <a href="#" class="similar-profile__link">
                                            <span class="d-inline-block my-auto">
                                                <i class='bx bx-chevron-right' ></i>
                                            </span>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <h6 class="text-capitalize mt-5 mb-3">
                                about user
                            </h6>
                            <div class="similar-profile d-flex">
                                <div class="similar-profile__content d-flex align-items-center flex-grow-1">
                                    {{ $myName->address->address }}
                                </div>
                                <a href={{ route('edit.page') }} class="similar-profile__link">
                                    <span class="d-inline-block my-auto">
                                        <i class='bx bx-chevron-right' ></i>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
