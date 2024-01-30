<x-main>
    <x-slot:title>Articoli</x-slot>
    <h1>ARTICOLI</h1>
    <div class="container mt-5">
        <div class="row">
            @foreach($articoli as $indice => $articolo)
                <x-card
                :titolo="$articolo['titolo']"
                :categoria="$articolo['categoria']"
                :indice="$indice"/>
            @endforeach
        </div>
    </div>
</x-main>