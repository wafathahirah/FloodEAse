<section id="password">
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label class="form-label" for="current_password">Kata Laluan Sekarang</label>
            <div class="input-group">
                <input class="form-control" id="current_password" name="current_password" type="password" required>
                <span class="input-group-text toggle-password" onclick="togglePassword('current_password')">
                    <i class="bi bi-eye-slash"></i>
                </span></div>
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>
<br>
        <div>
            <label class="form-label" for="password">Kata Laluan Baru</label>
            <div class="input-group">
                <input class="form-control" id="password" name="password" type="password" required>
                <span class="input-group-text toggle-password" onclick="togglePassword('password')">
                    <i class="bi bi-eye-slash"></i>
                </span>
            </div>            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>
<br>
        <div>
            <label class="form-label" for="password_confirmation">Pengesahan Kata Laluan</label>
                <div class="input-group">
                    <input class="form-control" id="password_confirmation" name="password_confirmation" type="password" required>
                    <span class="input-group-text toggle-password" onclick="togglePassword('password_confirmation')">
                        <i class="bi bi-eye-slash"></i>
                    </span>
                </div>            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>
<br>
        <button class="btn btn-primary" type="submit" onclick="showSavedMessage()">Simpan</button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
