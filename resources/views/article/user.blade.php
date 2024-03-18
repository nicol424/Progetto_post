<x-layout>
    <x-header title="Redattore : {{$user->name}}"/>
    

    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach ($articles as $article)
            <div class="col-12 col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="img_article">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->category->name}}</p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il : {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
                        <a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">Leggi</a>
                        <a href="{{route('article.index' , compact('article'))}}" class="btn btn-primary">Torna Indietro</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-layout>