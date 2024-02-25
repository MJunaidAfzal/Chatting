@extends('layouts.scaffold')
@push('title')
    {{ $title ?? '' }}
@endpush
@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
@endpush
@section('content')
    <div class="auth-bg">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-xl-3 col-lg-4">
                    <div class="p-4 pb-0 p-lg-5 pb-lg-0 auth-logo-section">
                        <div class="text-white-50">
                            <h3><a href="index.html" class="text-white"><i
                                        class="bx bxs-message-alt-detail align-middle text-white h3 mb-1 me-2"></i> Doot</a>
                                </h5>
                                <p class="font-size-16">Responsive Bootstrap 5 Chat App</p>
                        </div>
                        <div class="mt-auto">
                            <img src="{{ asset('assets/images/auth-img.png') }}" alt="" class="auth-img">
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-xl-9 col-lg-8">
                    <div class="authentication-page-content">
                        <div class="d-flex flex-column h-100 px-4 pt-4">
                            <div class="row justify-content-center my-auto">
                                <div class="col-sm-8 col-lg-6 col-xl-5 col-xxl-4">

                                    <div class="py-md-5 py-4">

                                        <div class="text-center mb-5">
                                            <h3>Register Account</h3>
                                            <p class="text-muted">Get your free Doot account now.</p>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="useremail" class="form-label">Name</label>
                                                <input id="name" type="text"
                                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name" autofocus
                                                    placeholder="Enter email">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>
                                            <div class="mb-3">
                                                <label for="username" class="form-label">Email</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email"
                                                    placeholder="Enter username">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror

                                            </div>

                                            <div class="mb-3">

                                                <label for="userpassword" class="form-label">Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input id="password" type="password"
                                                        class="form-control @error('password') is-invalid @enderror"
                                                        name="password" required autocomplete="current-password"
                                                        placeholder="Enter Password">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <i style="padding: 12px" class="position-absolute end-0 top-0 text-decoration-none text-muted toggle-password fa-solid fa-eye"></i>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input id="password-confirm" type="password" class="form-control"
                                                    name="password_confirmation" required autocomplete="new-password"
                                                    placeholder="Enter password">
                                                    <i style="padding: 12px"
                                                    class="position-absolute end-0 top-0 text-decoration-none text-muted toggle-password fa-solid fa-eye"></i>
                                            </div>
                                        </div>



                                            <div class="mb-3">
                                                <button class="btn btn-primary w-100 waves-effect waves-light"
                                                    type="submit">Register</button>
                                            </div>
                                       
                                        </form><!-- end form -->

                                        <div class="mt-5 text-center text-muted">
                                            <p>Already have an account ? <a href="{{ route('login') }}"
                                                    class="fw-medium text-decoration-underline">Login</a></p>
                                        </div>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="text-center text-muted p-4">
                                        <p class="mb-0">&copy;
                                            <script>
                                                document.write(new Date().getFullYear())
                                            </script> Doot. Crafted with <i
                                                class="mdi mdi-heart text-danger"></i> by Themesbrand
                                        </p>
                                    </div>
                                </div><!-- end col -->
                            </div><!-- end row -->

                        </div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end auth bg -->
@endsection
@push('scripts')
    <script>
        $(".toggle-password").click(function() {
            $(this).toggleClass("fa-eye fa-eye-slash");
            input = $(this).parent().find("input");
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
@endpush
