<x-layout>
    <x-header title="Accedi"/>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="card p-5 shadow bodyBg" action="{{route('login')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control lightBg" id="email"
                            value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control lightBg" id="password">
                    </div>
                    <div class="mt-2">
                        <button class="btn bg-info text-white">Accedi</button>
                        <p class="small mt-2">Non sei registrato? <a href="{{route('register')}}">Clicca qui</a></p>

                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
