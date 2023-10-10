@extends("main.main-layout",["data"=>$data])

@section("main-section")

<nav aria-label="breadcrumb" class="breadcrumb-wrapper">
  <div class="container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{url('index')}}">Home</a></li>
      <li class="breadcrumb-item active" aria-current="page">Register</li>
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
                <button class="btn btn-black mt-4">Register</button>
              </div>
              <ul class="d-flex mt-4">
                <li> Already have an account?</li>
                <li class="ms-1">

                  <a href="/login" class="text-success">Login</a>


                </li>

              </ul>
            </div>
          </div>
        </form>
      </div>

    </div>
  </div>
</main>

<!--=====  End of Login Register page content  ======-->
@endSection