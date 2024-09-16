<div class="card text-center">
    <div class="card-header">
     Articolo N.{{$article->id}}
    </div>
    <div class="card-body">
      <h5 class="card-title">Titolo: {{$article->title}}</h5>
      <p class="card-text">Descrizione: {{$article->description}}</p>
      <p class="card-text">Prezzo: {{$article->price}}</p>
      <p class="card-text">Categoria: {{$article->category->name}}</p>
      <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary">Vedi di Più</a>
      @if (Route::currentRouteName() == 'article.index')
          
      <a class="btn btn-dark" href="{{route('article.byCategory',['category' => $article->category])}}">{{$article->category->name}}</a>
      @endif
    </div>
    <div class="card-footer text-body-secondary">
        {{$article->created_at->diffForHumans()}} <br>
        Inserito da: {{$article->user->name}}
    </div>
</div>