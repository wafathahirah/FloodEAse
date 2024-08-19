@extends('staff.layout')
@section('content')
<link rel="stylesheet"
          href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet"
         
          integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
  
    <div class="container-xl px-4 mt-4">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@include('components.errorMessage')

        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-0 shadow">
                    <div class="card mb-4 mb-xl-0">
                        <div class="card-body text-center">
                            <h5 class=" card-header m-0 font-weight-bold">{{ session('user') }}</h5><br>
                            <a href="#password">Tukar Kata Laluan</a>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <!-- update profile -->
                <div class="card mb-4 shadow">
                    <div class="card-header m-0 font-weight-bold text-primary"> Kemaskini Profil</div>
                    <div class="card-body">
                        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                            @csrf
                        </form>

                        <form method="post" action="{{ route('profile.StaffUpdate') }}" class="mt-6 space-y-6">
                            @csrf
                            @method('patch')

                            <!-- Form Row-->
                            <div class="mb-3">
                                <label class="small mb-1" for="address">Alamat</label>
                                <input class="form-control" id="SAddress" name="SAddress" type="text" value="{{ $staff->SAddress }}" 
                                oninput="this.value = this.value.toUpperCase()">
                            </div>
                            <!-- Form Row-->
                            <div class="mb-3">

                                <label class="small mb-1" for="phoneNum">Nombor Telefon</label>
                                <input class="form-control" id="SPhoneNum" name="SPhoneNum" type="text" value="{{ $staff->SPhoneNum }}">

                            </div>
                            <!-- Form Row        -->
                            <div class="mb-3">

                                <label class="small mb-1" for="email">Emel</label>
                                <input class="form-control" id="SEmail" name="SEmail" type="email"
                                    value="{{ old('email', $user->email) }}">
                                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                    <div id="verification-section">
                                        <p class="text-sm mt-2 text-gray-800">
                                            {{ __('Your email address is unverified.') }}

                                            <button form="send-verification"
                                                class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                {{ __('Click here to re-send the verification email.') }}
                                            </button>
                                        </p>

                                        @if (session('status') === 'verification-link-sent')
                                            <p class="mt-2 font-medium text-sm text-green-600">
                                                {{ __('A new verification link has been sent to your email address.') }}
                                            </p>
                                        @endif
                                    </div>
                                @endif
                            </div>

                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit" onclick="showSavedMessage()">Simpan</button>
                            @if (session('status') === 'profile-updated')
                            <p id="saved-message" class="text-sm text-gray-600">Saved.</p>

                            @endif
                        </form>
                        <hr class="sidebar-divider">

                        @include('staff.updatePwd')

                    </div>
                </div>
            </div>
        </div>
    </div>

      <script>
        function resendVerification() {
            document.getElementById('send-verification').submit();
        }

        function showSavedMessage() {
            var savedMessage = document.getElementById('saved-message');
            if (savedMessage) {
                savedMessage.style.display = 'block';
                setTimeout(function() {
                    savedMessage.style.display = 'none';
                }, 2000);
            }
        }

        function togglePassword(fieldId) {
                        const passwordInput = document.getElementById(fieldId);
                        const icon = document.querySelector(`#${fieldId} + .input-group-text i`);
            
                        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                        passwordInput.setAttribute('type', type);
                        icon.className = type === 'password' ? 'bi bi-eye-slash' : 'bi bi-eye';
                    }

    </script>
@endsection
