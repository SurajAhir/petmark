@extends("main.main-layout",["data"=>$data,'cart'=>$cart])

@section("main-section")

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Login</li>
        </ol>
    </div>
</nav>
<!--=============================================
    =            Login Register page content         =
    =============================================-->

<main class="page-section pb--10 pt--50">
    <div class="container">
        <header class="entry-header">
            <h1 class="entry-title">My Account</h1>
        </header>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30">
                <!-- Login Form s-->
                <form action="{{ url('login') }}" method="post">
                    @csrf
                    <h4 class="login-title">Login</h4>
                    <div class="login-form">
                        <div class="row">
                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex align-items-center flex-wrap">
                                    <!-- <a href="#" class="btn btn-black   me-3">Login</a> -->
                                    <button type="submit" class="btn btn-black   m-3">Login</button>
                                    <div class="d-inline-flex align-items-center">
                                        <input type="checkbox" id="accept_terms" class="mb-0 me-1">
                                        <label for="accept_terms" class="mb-0 font-weight-400">Remember Me</label>
                                    </div>
                                </div>
                                <p><a href="#" class="pass-lost mt-2">Lost your password?</a></p>
                            </div>

                            <ul class="d-flex mt-2">
                                        <li> Not have an account?</li>
                                        <li class="ms-1">
                                    
                                            <a href="/register" class="text-success">Register</a>
                                        
                
                                        </li>
                                        
                                    </ul>
            </div>

                        </div>
                    </div>

                </form>
            </div>


        </div>
    </div>
</main>

<!--=====  End of Login Register page content  ======-->
@endSection