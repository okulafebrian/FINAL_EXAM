<x-app title="Profile">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row g-5 justify-content-center">
            <div class="col-3">
                <img src="/storage/users/{{ auth()->user()->photo }}" class="rounded-4" width="100%">
            </div>

            <div class="col-7">
                <form method="POST" action="{{ route('users.update', auth()->user()->id) }}"
                    enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <div class="col">
                            <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                            <input id="first_name" type="text"
                                class="form-control @error('firsT_name') is-invalid @enderror" name="first_name"
                                value="{{ auth()->user()->first_name }}" required>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ auth()->user()->last_name }}" required>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <label for="gender" class="form-label">{{ __('Gender') }}</label>
                            <fieldset id="gender">
                                @foreach ($genders as $gender)
                                    <input type="radio" class="btn-check" id="{{ $gender->id }}" name="gender"
                                        value="{{ $gender->id }}"
                                        {{ $gender->id == auth()->user()->gender->id ? 'checked' : '' }}>
                                    <label for="{{ $gender->id }}"
                                        class="btn btn-outline-primary px-3 rounded-pill">{{ $gender->description }}</label>
                                @endforeach
                            </fieldset>

                            @error('gender')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="role" class="form-label">{{ __('Role') }}</label>
                            <input id="role" type="text" class="form-control" readonly
                                value="{{ auth()->user()->role->name }}">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                            <label for="photo" class="form-label">{{ __('Display Picture') }}</label>
                            <input id="photo" type="file"
                                class="form-control @error('photo') is-invalid @enderror" name="photo">

                            @error('photo')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email"
                                class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ auth()->user()->email }}" required>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    @method('PUT')
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Save') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-app>
