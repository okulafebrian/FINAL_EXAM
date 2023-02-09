<x-app title="Edit Role">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-6">
                <h4 class="text-center mb-4">Update Role</h4>

                <form method="POST" action="{{ route('users.update-role', $user) }}">
                    @csrf

                    <div class="mb-4">
                        <label for="role" class="form-label">{{ __('Role') }}</label>
                        <select class="form-select" name="role_id" required>
                            <option>Select role</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}"
                                    {{ $role->id == $user->role->id ? 'selected' : '' }}>
                                    {{ $role->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('role')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    @method('PUT')
                    <button type="submit" class="btn btn-primary w-100 rounded-3">
                        {{ __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app>
