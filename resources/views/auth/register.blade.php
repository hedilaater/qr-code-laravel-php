@extends('layouts.app')

@section('content')
<body class="bg-gradient-primary">

    <div class="container">

   
    <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <img src="qr.png" width="400px" height="400px">
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">créer un compte!</h1>
                            </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="nom de utlisateur" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="nom de utilisateur" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                     </div>
                        
                                     <div class="col-sm-6">
                                <input id="noms" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="nom de société" name="noms" value="{{ old('noms') }}" required autocomplete="noms" autofocus>

                                @error('noms')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                     </div>
                        </div>
                        <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="telephone" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="numéro telephone" name="telephone" value="{{ old('telephone') }}" required autocomplete="noms" autofocus>

                                @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="email" type="email" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="adresse mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                    </div>
                        </div>

                        <div class="form-group row">

                        <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password" type="password" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="mot de passe" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                <input id="password-confirm" type="password" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="confirme mot de passe" name="password_confirmation" required autocomplete="new-password">
                                     </div>
                                     </div>

                        
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('inscription') }}
                                </button>
                            
                    </form>
                    <hr>
                           
                            <div class="text-center">
                                <a class="small" href="{{ route('adminlogin') }}">Vous avez déjà un compte ? Connectez-vous!</a>
                            </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



      
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>