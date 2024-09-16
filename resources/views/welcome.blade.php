<x-layout>

    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-4">Presto.it</h1>
                <a href="{{ route('article.create') }}" class="btn btn-dark">Crea un Articolo</a>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article" />
                </div>
            @empty
            <div class="col-12">
                <h3 class="text-center">Nessun Articolo Caricato</h3>
            </div>
                
            @endforelse

        </div>
    </div>


</x-layout>
