@extends('layout-log-reg')

@section('title', 'Login')

@section('contents')

<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 12px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: rgb(252, 186, 3);
  background-image: linear-gradient(45deg,rgb(252, 188, 38),rgb(224, 184, 72));
  width: 100%;
  border: 0;
  padding: 15px;
  color: black;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: rgb(252, 186, 3);
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}

body {
  background-color: rgb(255, 233, 171);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}


</style>
<div class="login-page">

    <div class="form">
        <div class="login">
            <div class="login-header">
              <h3>LOGIN</h3>
            </div>
        </div>
  
        <form class="login-form" method="POST" action="/login">
          @csrf
            <input type="email" name="email" id="email" placeholder="email" required value="{{Cookie::get('cookie') != null ? Cookie::get('cookie') : ''}}">
            <input type="password" name="password" id="password" placeholder="password" required>
            <input type="checkbox" name="remember" id="remember" >Remember Me
            <input type="submit" value="login"></button>
        </form>
     
    </div>
</div>


@endsection