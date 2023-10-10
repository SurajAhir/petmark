@extends("main.main-layout")

@section("main-section")

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                  <button type="submit" class="btn btn-black   me-3">Login</button>
                  <div class="d-inline-flex align-items-center">
                    <input type="checkbox" id="accept_terms" class="mb-0 me-1">
                    <label for="accept_terms" class="mb-0 font-weight-400">Remember Me</label>
                  </div>
                </div>
                <p><a href="#" class="pass-lost mt-3">Lost your password?</a></p>
              </div>

            </div>
          </div>

        </form>
      </div>

      <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
        <form action="{{ url('register') }}" method="post">
          @csrf
          <h4 class="login-title">Register</h4>
          <div class="login-form">
            <div class="row">
              <!-- Name -->
              <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2 text-danger" />
              </div>

              <!-- Email Address -->
              <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2 text-danger" />
              </div>

              <!-- Password -->
              <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2 text-danger" />
              </div>

              <!-- Confirm Password -->
              <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-danger" />
              </div>
              <div class="col-md-12">
                <!-- <a href="#" class="btn btn-black">Register</a> -->
                <button class="btn btn-black">Register</button>
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