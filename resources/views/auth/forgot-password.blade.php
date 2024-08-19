
@section('title', 'Forgot Password')
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reset Kata Laluan</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js	" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" rel="stylesheet">
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
<link href="//fonts.googleapis.com/css2?family=Kaushan+Script&family=Poppins&display=swap" rel="stylesheet">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="wrapper bg-white">
            <div class="h2 text-center">HALUAN KELANTAN</div>
            <form class="pt-3">
                <div class="form-group py-2">
        <!-- Email Address -->
        <div class="form-group py-2">
            <div class="input-field" id="email" name="email" type="email"  :value="old('email')"> <span class="far fa-user p-2"></span> <input type="email" id="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="Sila masukkan emel" > </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <button class="btn btn-block text-center my-3">
                {{ __('Reset Kata Laluan') }}
            </button>
        </div>
    </form>

