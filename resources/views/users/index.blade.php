<x-app title="Users">
    <x-navbar></x-navbar>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="col-8">Account</th>
                            <th class="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }} {{ $user->last_name }} - {{ $user->role->name }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user) }}" class="btn btn-warning rounded-3">
                                        Update Role
                                    </a>

                                    <form method="POST" action="{{ route('users.destroy', $user) }}" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="_method" value='DELETE'>

                                        <button class="btn btn-danger rounded-3" type="submit">
                                            <i class="bi bi-trash-fill"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app>
