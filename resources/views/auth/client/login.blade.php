@extends('layout.index')
@section('login')
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
                                    <h3 class="mb-4">Sign In</h3>
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
                            <form action="{{route('client.handleLogin')}}" class="signin-form" method="post">
                                @csrf
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" required name="email" value="{{old('email')}}">
                                    <label class="form-control-placeholder" for="username">Email</label>
                                    @error('email')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-field" type="password" class="form-control" required name="password" value="{{old('password')}}">
                                    <label class="form-control-placeholder" for="password">Password</label>
                                    <span toggle="#password-field"
                                          class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    @error('password')
                                    <span style="color: #e70707">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In
                                    </button>
                                </div>
                                <div class="form-group d-md-flex">
                                    <div class="w-100 text-md-right">
                                        <a href="#">Forgot Password</a>
                                    </div>
                                </div>
                            </form>
                            <p class="text-center">Not a member? <a data-toggle="tab" href="#signup">Sign Up</a></p>
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
    </script>
@endsection
