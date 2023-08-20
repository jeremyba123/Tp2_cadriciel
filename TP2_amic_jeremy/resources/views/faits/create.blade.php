<x-layout titre="Création de faits">
    <form class="create" action="{{ route('faits.store') }}" method="POST">
        @csrf 

        @error('contenu')
            <div style="color: red;">{{ $message }}</div>
        @enderror

        <label for="contenu">Contenu du fait:</label>
        <textarea name="contenu" id="contenu" cols="50" rows="10" required></textarea>

        <button class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-4 py-2 rounded hover:from-purple-600 hover:to-indigo-700 hover:bg-gradient-to-r" type="submit">Ajouter</button>
    </form>
</x-layout>
