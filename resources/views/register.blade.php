@extends('layout-log-reg')

@section('title', 'Register')

@section('contents')
<style>
.gradient-custom-3 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
  /* fallback for old browsers */
  background: #84fab0;

  /* Chrome 10-25, Safari 5.1-6 */
  background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));

  /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>


<section class="vh-100 bg-image" style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-3">REGISTER</h2>
  
                <form action="/register" method="POST">
                  @csrf
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example3cg" class="form-control form-control-lg" required  value="{{old('email')}}"/>
                        <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>
                    @error('email')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                    @enderror

                    <div class="form-outline mb-4">
                        <input type="text" name="name" id="form3Example1cg" class="form-control form-control-lg" required value="{{old('name')}}"/>
                        <label class="form-label" for="form3Example1cg">Your Name</label>
                    </div>
                    @error('name')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                    @enderror
  
                    <div class="form-outline mb-4">
                        <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Example4cg">Password</label>
                    </div>
                    @error('password')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                    @enderror
  
                    <div class="form-outline mb-4">
                        <input type="password" name="password_confirmation" id="form3Example4cdg" class="form-control form-control-lg" required />
                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div>
                    @error('passwordd_confirmation')
                    <div class="alert alert-danger">
                      {{ $message }}
                    </div>
                    @enderror
  
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                    </div>
  
                </form>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection