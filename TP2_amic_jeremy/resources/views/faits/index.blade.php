<x-layout titre="fait random">

 <section class="bg-gray-100 p-4 flex-grow">
    <h2 class="text-2xl font-bold mb-2 text-center"> {{ $faits->contenu }} </h2>

<x-ImageRandom nombre="2"/>

    <a class="block text-blue-500 hover:underline mb-2" href="{{ route('faits.list') }}">Liste des faits</a>
    <a class="block text-blue-500 hover:underline" href="{{ route('faits.create') }}">Ajouter un fait</a>
</section>


</x-layout>


