<x-layout>
    <x-header title="{{$article->title}}"/>
    
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <img src="{{Storage::url($article->image)}}" alt="img_body" class="img-fluid my-3">
                <div class="text-center">
                    <h2>{{$article->subtitle}}</h2>
                    <div class="my-3 text-muted fst-italic">
                        <p>Redatto da : {{$article->user->name}} il {{$article->created_at->format('d/m/Y')}}</p>
                    </div>
                </div>
                <p class="mt-2 mainTxt bodyCus">{{$article->body}}</p>
                <div class="text-center">
                    <a href="{{route('article.index')}}" class="btn btn-info text-white my-5">Vai a più articoli</a>
                    @if (Auth::user() && Auth::user()->is_revisor)
                        <a href="{{route('revisor.acceptArticle' , compact('article'))}}" class="btn btn-success text-white">Accetta articolo</a>
                        <a href="{{route('revisor.rejectArticle' , compact('article'))}}" class="btn btn-danger text-white">Rifiuta articolo</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-layout>