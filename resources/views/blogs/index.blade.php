<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Blog - Accueil</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-50">
    <nav class="bg-white shadow-sm sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="/" class="text-2xl font-bold text-indigo-600">
                        📝 Mon Blog
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="index.html" class="text-gray-700 hover:text-indigo-600 px-3 py-2 rounded-md text-sm font-medium">Accueil</a>
                    <a href="{{ route('admin.index') }}" class="bg-indigo-600 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-indigo-700">Admin</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-gradient-to-r from-indigo-600 to-purple-600 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Bienvenue sur Mon Blog 📚</h1>
            <p class="text-xl text-indigo-100">Découvrez nos articles et restez informé sur les dernières actualités</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
            <aside class="lg:col-span-1">
                <div class="bg-white rounded-lg shadow-md p-6 sticky top-24">
                    <h3 class="text-lg font-semibold mb-4 text-gray-800">🏷️ Catégories</h3>
                    <ul class="space-y-2">
                        @foreach ($category as $categ)  
                        <li>
                            <a href="{{ route('categories.show', $catege = $categ->id)}}" class="flex items-center justify-between px-3 py-2 rounded-md hover:bg-indigo-50 text-gray-700 hover:text-indigo-600 transition">
                                <span>{{$categ->categorie}}</span>
                                <span class="bg-indigo-100 text-indigo-600 text-xs font-semibold px-2 py-1 rounded-full">12</span>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <main class="lg:col-span-3">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                     @foreach ($blogs as $blog)
                     
                    <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-xl transition transform hover:-translate-y-1">
                        <div class="h-48 bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center">
                            <span class="text-6xl">💻</span>
                        </div>
                        <div class="p-6">
                            <span class="inline-block bg-indigo-100 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full mb-3">{{ $blog->categorie->categorie}}</span>
                            <h2 class="text-xl font-bold text-gray-800 mb-2 hover:text-indigo-600 transition">{{ $blog->title }}</h2>
                            <p class="text-gray-600 text-sm mb-4">{{ $blog->description }}</p>
                            <div class="flex items-center justify-between">
                                <span class="text-sm text-gray-500">📅 {{ $blog->created_at}}</span>
                                <a href="article.html" class="text-indigo-600 hover:text-indigo-700 font-semibold text-sm flex items-center">
                                    Lire la suite 
                                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center items-center space-x-2 mt-12">
                    <button class="px-4 py-2 bg-gray-200 text-gray-600 rounded-md hover:bg-gray-300 disabled:opacity-50" disabled>
                        Précédent
                    </button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md">1</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">2</button>
                    <button class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300">3</button>
                    <button class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        Suivant
                    </button>
                </div>
            </main>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <div class="text-center">
                <p class="text-gray-400">&copy; 2024 Mon Blog. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>