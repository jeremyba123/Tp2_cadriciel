@props(["titre" => "Projet Notes"])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $titre }}</title>
    <style>
        /* Custom styles */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex-grow: 1;
        }
    </style>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white py-8">
    <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center">
            <h1 class="text-3xl font-bold">FAIT.com</h1>
        </div>
        <nav class="space-x-4">
            <a class="hover:underline" href="{{ route('faits.index') }}">Accueil</a>
            <a class="hover:underline" href="{{ route('faits.list') }}">Liste des faits</a>
            <a class="hover:underline" href="{{ route('faits.create') }}">Ajouter un fait</a>
        </nav>
    </div>
</header>



<main class="container mx-auto py-12 ">

        {{ $slot }}

</main>

<footer class="bg-gray-900 text-white py-6 ">
    <div class="container mx-auto flex justify-between items-center">
        <p>&copy; 2023 FAIT.com ~ All rights reserved.</p>
        <div class="flex space-x-4">
            <a href="#" class="hover:text-gray-400">Terms of Service</a>
        </div>
    </div>
</footer>
</html>
