
@section('title', 'Staff Login')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Masuk</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">

<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="wrapper bg-white">
        <div class="h2 text-center">HALUAN KELANTAN</div>
        <form class="pt-3">
            <div class="form-group py-2">
                <div class="input-field" for="email" :value="__('Email')"> <span class="far fa-user p-2"></span> <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Sila masukkan emel" > </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <div class="form-group py-1 pb-2">
                <div class="input-field" id="password"  type="password" name="password" required autocomplete="current-password"> <span class="fas fa-lock p-2"></span> <input type="password" id="password" placeholder="Sila masukkan kata laluan"  type="password"
                    name="password"
                    required autocomplete="current-password">  </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Forgot password -->
        

        <div class="flex items-center justify-end mt-4">
           
            <div class="d-flex align-items-start">     
            
            <button class="btn btn-block text-center my-3">  {{ __('Daftar Masuk') }}</button>
        </form>
    </div>
</form>

@if(session('error'))
    <p>{{ session('error') }}</p>
@endif
