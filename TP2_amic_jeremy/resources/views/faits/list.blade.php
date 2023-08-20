<x-layout titre="Liste des faits">
    <div class="container mx-auto py-8">

        @if (session('success'))
            <div class="bg-green-200 text-green-800 py-2 px-4 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif
        
        <h1 class="text-3xl font-bold mb-4">Liste des Faits</h1>

        @foreach ($faits as $fait)
            <div class="bg-white shadow-md rounded p-4 mb-4">
                <p class="text-lg"><strong>Fait {{ $fait->id }}</strong></p>
                <p class="mt-2">{{ Illuminate\Support\Str::limit($fait->contenu, 60) }}</p>
                <form action="{{ route('faits.destroy', $fait->id) }}" method="POST" class="mt-4">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-4 py-2 rounded hover:from-purple-600 hover:to-indigo-700 hover:bg-gradient-to-r">Supprimer</button>
                </form>
            </div>
        @endforeach
    </div>
</x-layout>
