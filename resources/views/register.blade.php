<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <title>Document</title>
</head>

<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
                        class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    <form action="{{ route('register') }}" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <input type="username" name="username" class="form-control form-control-lg"
                                placeholder="Enter a valid email address" />
                            <label class="form-label" for="form3Example3">Username</label>
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-3">
                            <input type="password" name="password" class="form-control form-control-lg"
                                placeholder="Enter password" />
                            <label class="form-label" for="Password">Password</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="password" name="rePassword" class="form-control form-control-lg"
                                placeholder="Enter re-password" />
                            <label class="form-label" for="Re-Password">Re-Password</label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="number" name="phone_number" class="form-control form-control-lg"
                                placeholder="Enter Phone number" />
                            <label class="form-label" for="Phone">Phone: </label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="text" name="name" class="form-control form-control-lg"
                                placeholder="Enter Fullname" />
                            <label class="form-label" for="name">Fullname: </label>
                        </div>
                        <div class="form-outline mb-3">
                            <input type="email" name="email" class="form-control form-control-lg"
                                placeholder="Enter Email" />
                            <label class="form-label" for="Email">Email: </label>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-0">
                                <input class="form-check-input me-2" type="checkbox" value=""
                                    id="form2Example3" />
                                <label class="form-check-label" for="form2Example3">
                                    Remember me
                                </label>
                            </div>
                            <a href="#!" class="text-body">Forgot password?</a>
                        </div>

                        <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="button" class="btn btn-primary btn-lg"
                                style="padding-left: 2.5rem; padding-right: 2.5rem;">Register</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!"
                                    class="link-danger">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
