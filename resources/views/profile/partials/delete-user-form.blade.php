<div class="card">
    <div class="card-body">

        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Delete Account') }}
        </h3>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>

        <a href="#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal-danger">{{ __('Delete Account') }}</a>

        <div  class="modal text-left" id="modal-danger" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <form method="post" action="{{ route('profile.destroy') }}" class="p-6">
                        @csrf
                        @method('delete')
                        <div class="modal-status bg-danger"></div>
                        <div class="modal-body text-center py-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M12 9v2m0 4v.01" />
                                <path d="M5 19h14a2 2 0 0 0 1.84 -2.75l-7.1 -12.25a2 2 0 0 0 -3.5 0l-7.1 12.25a2 2 0 0 0 1.75 2.75" />
                            </svg>
                            <h3>{{ __('Are you sure you want to delete your account?') }}</h3>
                            <div class="text-center">
                                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                            </div>
                            <div class="mt-4">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Password" autocomplete="off" required>
                                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-3 mb-0 text-start" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <div class="w-100">
                                <div class="row">
                                    <div class="col">
                                        <a href="#" class="btn w-100" data-bs-dismiss="modal">{{ __('Cancel') }}</a>
                                    </div>
                                    <div class="col">
                                        <button type="submit" class="btn btn-danger w-100">{{ __('Delete Account') }}</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

</div>

@push('scripts')
@if ($errors->userDeletion->isNotEmpty())
<script>
    var myModal = new bootstrap.Modal('#modal-danger');
    document.onreadystatechange = function() {
        myModal.show();
    };
</script>
@endif
@endpush