<x-app-layout>
    <x-slot name="header">
    </x-slot>
    @foreach ($fichiers as $fichier)
        <a target="blank" href="{{ \Storage::download($fichier->no)}}">{{$fichier->nom_fichier}}</a>
        <p><i>Uploader le {{$fichier->created_at}}</i></p> <br>
    @endforeach
</x-app-layout>