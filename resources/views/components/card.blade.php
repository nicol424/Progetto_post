<div class="card" style="width: 18rem;">
    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="img_article">
    <div class="card-body">
        <h5 class="card-title titleCus">{{$article->title}}</h5>
        <p class="card-text bodyCus">{{$article->subtitle}}</p>
        <p class="card-text bodyCus">{{$article->category->name}}</p>
    </div>

    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        Redatto il : {{$article->created_at->format('d/m/Y')}} da {{$article->user->name}}
        <a href="{{route('article.show' , compact('article'))}}" class="btn btn-primary">Leggi</a>
    </div>

    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        
        <a href="{{route('article.byCategory', ['category'=>$article->category->id])}}" class="small text-muted fst-italic test-capitalize" >{{$article->category->name}}</a>
        
        
    </div>

    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
        <a href="{{route('article.byUser', ['user'=>$article->user->id])}}" class="small text-muted fst-italic test-capitalize" >{{$article->user->name}}</a>
    </div>
    
</div>