<!DOCTYPE html>
<html lang="en">

<head>
    <title>Stylish - Shoes Online Store HTML Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="TemplatesJungle">
    <meta name="keywords" content="Online Store">
    <meta name="description" content="Stylish - Shoes Online Store HTML Template">

    <link rel="stylesheet" href="{{ asset('assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&family=Playfair+Display:ital,wght@0,900;1,900&family=Source+Sans+Pro:wght@400;600;700;900&display=swap"
        rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/9.1.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <div class="bg-danger container" style="background: url('{{ asset('/assets/images/background-image.PNG') }}')">
        <div class="row vh-100 justify-content-end">
            <div class="col-4 d-flex  align-items-center">
                <div
                    style="width: 400px; border-left: 4px solid #0399D9; border-right: 4px solid #FF9900;border-bottom: 4px solid #FC0000; border-top: 4px solid #b3e140; padding: 20px; border-radius: 12px; background: #FFF;">
                    <div class="form-logo d-flex justify-content-center p-2">
                    <img src="{{ asset('/assets/images/main-logo.PNG') }}"/>
                    </div>
                    <form id="#register_form" class="mt-3">
                        @csrf
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="firstname" class="form-control" name="firstname" autocomplete="firstname"/>
                                <label class="form-label" for="firstname">First name</label>
                            </div>
                            </div>
                            <div class="col">
                            <div data-mdb-input-init class="form-outline">
                                <input type="text" id="lastname" class="form-control" name="lastname" autocomplete="lastname"/>
                                <label class="form-label" for="lastname">Last name</label>
                            </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="email" id="email" class="form-control" name="email" autocomplete="email"/>
                            <label class="form-label" for="email">Email address</label>
                        </div>

                        <!-- Password input -->
                        <div data-mdb-input-init class="form-outline mb-4">
                            <input type="password" id="password" class="form-control" name="password"/>
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-center mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                            <label class="form-check-label" for="form2Example33">
                            Subscribe to our newsletter
                            </label>
                        </div>

                        <!-- Submit button -->
                        <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4">Sign up</button>

                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>or sign up with:</p>
                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-facebook-f"></i>
                            </button>

                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-google"></i>
                            </button>

                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-twitter"></i>
                            </button>

                            <button data-mdb-ripple-init type="button" class="btn btn-secondary btn-floating mx-1">
                            <i class="fab fa-github"></i>
                            </button>
                        </div>
                    </form>
                        
                </div>
            </div>
        </div>
    </div>


    <!-- footer section starts  -->
    @include('front.partials.footer');
    <!-- footer section ends  -->
