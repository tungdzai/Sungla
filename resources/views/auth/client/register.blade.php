@extends('layout.index')
@section('register')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="wrap">
                        <div class="img"
                             style="background-image: url(https://preview.colorlib.com/theme/bootstrap/login-form-15/images/bg-1.jpg.webp);"></div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign Up </h3>
                                </div>
                                <div class="w-100">
                                    <p class="social-media d-flex justify-content-end">
                                        <a href="#"
                                           class="social-icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-facebook text-primary"></i>
                                        </a>
                                        <a href="#"
                                           class="social-icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-google text-danger"></i>
                                        </a>
                                        <a href="#"
                                           class="social-icon d-flex align-items-center justify-content-center">
                                            <i class="fab fa-twitter text-info"></i>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <form action="#" class="signin-form" method="post">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required name="name" value="{{old('name')}}">
                                    <label class="form-control-placeholder" for="name">Họ và tên</label>
                                    @error('name')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input type="number" class="form-control" required name="phone" value="{{old('phone')}}">
                                    <label class="form-control-placeholder" for="name">Số điện thoại</label>
                                    @error('phone')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required name="email" value="{{old('email')}}">
                                    <label class="form-control-placeholder" for="username">Email</label>
                                    @error('email')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" required name="password" >
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                          class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirmation" type="password" class="form-control" required name="password_confirmation">
                                    <label class="form-control-placeholder" for="confirm">Confirm</label>
                                    <span toggle="#password-confirmation" class="fa fa-fw fa-eye field-icon toggle-password-confirmation"></span>
                                    @error('password_confirmation')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up
                                    </button>
                                </div>
                            </form>
                            <p class="text-center">Be a member? <a href="{{route('client.login')}}">Sign In</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.querySelectorAll(".toggle-password").forEach(function (element) {
            element.addEventListener("click", function () {
                this.classList.toggle("fa-eye");
                this.classList.toggle("fa-eye-slash");
                var input = document.querySelector(this.getAttribute("toggle"));
                if (input.getAttribute("type") === "password") {
                    input.setAttribute("type", "text");
                } else {
                    input.setAttribute("type", "password");
                }
            });
        });
        document.querySelectorAll(".toggle-password-confirmation").forEach(function (element) {
            element.addEventListener("click", function () {
                this.classList.toggle("fa-eye");
                this.classList.toggle("fa-eye-slash");
                var input = document.querySelector(this.getAttribute("toggle"));
                if (input.getAttribute("type") === "password") {
                    input.setAttribute("type", "text");
                } else {
                    input.setAttribute("type", "password");
                }
            });
        });
    </script>
@endsection
