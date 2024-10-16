<x-app-layout>
    <div class="main-content main-content-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-trail breadcrumbs">
                        <ul class="trail-items breadcrumb">
                            <li class="trail-item trail-begin">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="trail-item trail-end active">
                                Authentication
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="content-area col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="site-main">
                        <h3 class="custom_blog_title">
                            Authentication
                        </h3>
                        <div class="customer_login">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="login-item">
                                        <h5 class="title-login">Register now</h5>
                                        <form class="register" method="POST" action="{{ route('register') }}">
                                            @csrf
                                            <p class="form-row form-row-wide">
                                                <label for="name" class="text">Your Full Name</label>
                                                <input id="name" title="email" type="text" name="name"
                                                    :value="old('name')" required autofocus autocomplete="name"
                                                    class="input-text">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />

                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="email" class="text">Email</label>
                                                <input title="email" id="email" type="email" name="email"
                                                    :value="old('email')" required autocomplete="username"
                                                    class="input-text">
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />

                                            </p>
                                            <p class="form-row form-row-wide">
                                                <label for="password" class="text">Password</label>
                                                <input id="password" type="password" name="password" required
                                                    autocomplete="new-password" class="input-text">
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </p>
                                            <p class="form-row">
                                                <span class="inline">
                                                    <input type="checkbox" id="cb2">
                                                    <label for="cb2" class="label-text">I agree to <span>Terms &
                                                            Conditions</span></label>
                                                </span>
                                            </p>
                                            <p class="">
                                                <input type="submit" class="button-submit" value="Register Now">
                                            </p>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
