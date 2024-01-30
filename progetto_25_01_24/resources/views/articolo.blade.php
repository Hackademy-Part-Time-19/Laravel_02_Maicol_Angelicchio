<x-main>
    <x-slot:title>Articolo</x-slot>
    <h1>DETTAGLIO ARTICOLO</h1>
    <div>
        <h5>Prodotto: {{$articolo['titolo']}}</h5>
        <h5>Descrizione: {{$articolo['descrizione']}}</h5>
        <h5>Categoria: {{$articolo['categoria']}}</h5>
    </div>
</x-main>