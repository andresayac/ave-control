<div class="card">
    <div class="card-body">

        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h3>
        <p class="mt-1  text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>

        <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
        </form>

        <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('patch')

            <div class="mb-3">
                <label class="form-label">{{ __('Name') }}</label>
                <input id="name" name="name" type="text" class="form-control" value="{{ old('name', $user->name) }}" required autocomplete="name">
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>

            <div class="mb-3">
                <label class="form-label">{{ __('Email') }}</label>
                <input id="email" name="email" type="text" class="form-control" value="{{ old('email', $user->email) }}" required autocomplete="email">
                <x-input-error class="mt-2" :messages="$errors->get('email')" />

                @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="ms-1">
                    <p class="mt-2 text-muted">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="btn btn-info btn-sm">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                    <p class="mt-2 text-success">
                        {{ __('A new verification link has been sent to your email address.') }}
                    </p>
                    @endif
                </div>
                @endif

            </div>

            <div class="row mt-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                    @if (session('status') === 'profile-updated')
                    <div class="alert alert-success mt-3">
                        {{ __('Saved.') }}
                    </div>
                    @endif
                </div>
            </div>

        </form>

    </div>

</div>