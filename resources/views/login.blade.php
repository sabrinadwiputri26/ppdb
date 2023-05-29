@extends('layout')
@section('content')

{{-- https://img.freepik.com/free-vector/video-conference-remote-working-flat-illustration-screen-laptop-with-group-colleagues-people-conn_88138-548.jpg?w=996&t=st=1671813199~exp=1671813799~hmac=20bc7b65c5fad5a165456a20a37ddf3c3d28d03fdd27f444209c0e4e78b704d0 --}}
<section class="ftco-section">
    <div class="container ">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center mb-5">
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                <div class="img">
                </div>

{{-- alert --}}
    <div class="login-wrap p-4 p-md-5">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
    @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
    @endforeach
        </ul>
    </div>
    @endif
    @if (Session('success'))
    <div class="alert alert-success scslgn">
        {{Session('success')}}
    </div>
    @endif
    @if (Session::get('notAllowed'))
    <div class="alert alert-danger scslgn">
        {{Session::get('notAllowed')}}
    </div>
    @endif                      
{{-- alert end --}}

{{-- form --}}
    <div class="d-flex">                   
        <div class="w-100">
            <h3 class="mb-4"> Silahkan Masuk <br> ke akun PPDB</h3>
        </div>                            
    </div>
        <form action="{{route('login.auth')}}" method="POST" class="signin-form">
            @csrf 
            <div class="form-group mb-3">
                <label class="label" for="name">Username</label>
                <input type="email" class="form-control login-inp" placeholder="Username" name="email" required>
            </div>

            <div class="form-group mb-3">
                <label class="label" for="password">Password</label>
                <input type="password" class="form-control login-inp" placeholder="Password" name="password" required>
            </div>

            <div class="form-group">
                <button type="submit" class="form-control btn submit px-3">Sign In</button>
            </div>          
              </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
{{-- form end --}}
  

    
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="{{ url('assets/js/script.js') }}"></script>

@endsection