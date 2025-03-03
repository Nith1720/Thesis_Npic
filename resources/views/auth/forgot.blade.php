@extends('layouts.app')

@section('content')

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Forgot to Your Account</h5>
                    <p class="text-center small">Enter your email & password to Forgot</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate method="post" action="">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Email</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your email.</div>
                      </div>
                    </div>

                   

                    <div class="col-12">
                      
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                    <p class="small mb-0">Already have an account? <a href="{{ url('/') }}">Log in</a></p>
                    </div>
                  </form>

                </div>
              </div>

              @endsection