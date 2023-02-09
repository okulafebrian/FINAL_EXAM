<div class="modal fade" id="change-password" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content border-0 rounded-3">
            <div class="modal-body p-5">
                <h4 class="mb-4">Change Password</h4>

                <form method="POST" action="{{ route('users.update-password', auth()->user()) }}">
                    @csrf

                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('New password') }}</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label for="password-confirm" class="form-label">{{ __('Confirm new password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required>

                        @error('password-confirm')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @method('PUT')
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Confirm') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
