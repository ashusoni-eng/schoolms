@extends('layouts.guest_main')

@push('title')
    Register
@endpush
@section('register-section')
<body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
                {{-- here we can insert logo --}}
              <!-- /Logo -->
              <h4 class="mb-2">Empowering Education, Fostering Futures 🚀</h4>
              {{-- <p class="mb-4">Make your app management easy and fun!</p> --}}

              <form id="formAuthentication" class="mb-3" action="{{url('/register')}}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="fullName" class="form-label">Full Name</label>
                  <input
                    type="text"
                    class="form-control"
                    id="fullName"
                    name="fullName"
                    placeholder="Enter your Full Name"
                    value="{{old('fullName')}}"
                    autofocus
                  />                  
                    @error('fullName')
                      <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" value="{{old('email')}}" class="form-control" id="email" name="email" placeholder="Enter your email" />
                  @error('email')
                      <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>                    
                  </div>
                  @error('password')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                  @error('terms')
                      <span class="text-danger">{{$message}}</span>
                  @enderror
                </div>
                <button class="btn btn-primary d-grid w-100">Sign up</button>
              </form>              
              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{url('/')}}">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

@endsection