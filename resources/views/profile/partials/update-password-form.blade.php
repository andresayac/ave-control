<div class="card">
    <div class="card-body">

        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('put')

            <div class="mb-3">
                <label class="form-label">{{ __('Current Password') }}</label>
                <input id="current_password" name="current_password" type="password" class="form-control" autocomplete="current_password">
                <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('New Password') }}</label>
                <input id="password" name="password" type="password" class="form-control" autocomplete="new-password">
                <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" autocomplete="new-password">
                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    @if (session('status') === 'password-updated')
                    <div class="alert alert-success mt-3">
                        {{ __('Saved.') }}
                    </div>
                    @endif
                </div>
            </div>

        </form>

    </div>
</div>