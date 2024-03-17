@extends('layouts.guest_main')
@push('title')
    Login
@endpush

@section('login-section')

<body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
                {{-- here we can insert logo --}}
              <!-- /Logo -->
              <h4 class="mb-2">Welcome to {{env('APP_NAME',"NONAME")}} 👋</h4>
              <p class="mb-4">Please sign-in to your account and start the adventure</p>

              <form id="formAuthentication" class="mb-3" action="{{url('/login')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input
                    type="text"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter your email"
                    value="{{old('email')}}"
                    autofocus
                  />
                  @error('email')
                    <sppan class="text-danger">{{$message}}</sppan>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                  @error('password')
                    <sppan class="text-danger">{{$message}}</sppan>
                  @enderror
                </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember" />
                    <label class="form-check-label" for="remember"> Remember Me </label>
                  </div>
                </div>
                @error('invalidUser')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                </div>
              </form>

              <p class="text-center">
                <span>New on our platform?</span>
                <a href="{{url('/register')}}">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
@endsection