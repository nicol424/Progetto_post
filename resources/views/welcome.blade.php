<x-layout>
    <x-header title="Articoli piu recenti"/>
    
    @if (session('message'))
    <div class="alert alert-danger text-center">
        {{session('message')}}
    </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3 p-2 mt-4">
                <x-card :article="$article"/>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>