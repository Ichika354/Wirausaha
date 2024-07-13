@extends('layouts.auth')

@section('content')
    <div class="position-relative">
        <div
            class="authentication-wrapper authentication-wrapper-regis authentication-basic authentication-basic-regis container-p-y">
            <div class="authentication-inner authentication-inner-regis py-4">
                <!-- Register Card -->
                <div class="card p-2">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center mt-5">
                        <a href="{{ route('page') }}" class="app-brand-link gap-2">
                            <span class="app-brand-text demo text-heading fw-semibold">WAU</span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <div class="card-body mt-2">
                        <h4 class="mb-2">Petualangan dimulai di sini 🚀</h4>
                        <p class="mb-4">Jadikan manajemen aplikasi Anda mudah dan menyenangkan!</p>

                        <form id="formAuthentication" class="mb-3" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-1">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Enter your name" autofocus />
                                        <label for="name">Nama Lengkap</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Enter your email" />
                                        <label for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control" id="npm" name="npm"
                                            placeholder="Enter your NPM" oninput="validateNumberInput(this)" />
                                        <label for="npm">NPM</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="form-floating form-floating-outline mb-3">
                                        <input type="text" class="form-control" id="phone_number" name="phone_number"
                                            placeholder="Enter your number phone" oninput="validateNumberInput(this)" />
                                        <label for="phone_number">Number Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="mb-3 form-password-toggle">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="password" id="password" class="form-control" name="password"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" />
                                                <label for="password">Password</label>
                                            </div>
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="mdi mdi-eye-off-outline"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-1">
                                    <div class="mb-3 form-password-toggle">
                                        <div class="input-group input-group-merge">
                                            <div class="form-floating form-floating-outline">
                                                <input type="password" id="confirm_password" class="form-control"
                                                    name="password_confirmation"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="password" />
                                                <label for="confirm_password">Confirm Password</label>
                                            </div>
                                            <span class="input-group-text cursor-pointer"><i
                                                    class="mdi mdi-eye-off-outline"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 mb-1 d-flex justify-content-center">
                                    <div class="form-floating form-floating-outline mb-4 w-50">
                                        <select class="form-select" id="exampleFormControlSelect1"
                                            aria-label="Default select example" name="role">
                                            <option selected>Pilih Role</option>
                                            <option value="Buyer">Pembeli</option>
                                            <option value="Seller">Penjual</option>
                                        </select>
                                        <label for="exampleFormControlSelect1">Pilih Role</label>
                                    </div>
                                </div>

                                <button class="btn btn-primary d-grid w-100">Sign up</button>
                            </div>
                        </form>

                        <p class="text-center">
                            <span>Sudah punya akun?</span>
                            <a href="{{ route('login') }}">
                                <span>Login</span>
                            </a>
                        </p>
                    </div>
                </div>
                <!-- Register Card -->
                <img src="{{ asset('dashboard/img/illustrations/tree-3.png') }}" alt="auth-tree"
                    class="authentication-image-object-left d-none d-lg-block" />
                <img src="{{ asset('dashboard/img/illustrations/auth-basic-mask-light.png') }}"
                    class="authentication-image d-none d-lg-block" alt="triangle-bg"
                    data-app-light-img="illustrations/auth-basic-mask-light.png"
                    data-app-dark-img="illustrations/auth-basic-mask-dark.png" />
                <img src="{{ asset('dashboard/img/illustrations/tree.png') }}" alt="auth-tree"
                    class="authentication-image-object-right d-none d-lg-block" />
            </div>
        </div>
    </div>
@endsection
