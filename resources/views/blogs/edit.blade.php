<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier l'Article - Admin</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-white flex-shrink-0">
            <div class="p-6">
                <h2 class="text-2xl font-bold">⚙️ Admin Panel</h2>
            </div>
            <nav class="mt-6">
                <a href="dashboard.html" class="flex items-center px-6 py-3 bg-indigo-600 border-l-4 border-indigo-400">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Articles
                </a>
                <a href="categories.html" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    Catégories
                </a>
                <a href="../client/index.html" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                    Voir le site
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header -->
            <header class="bg-white shadow-sm">
                <div class="px-8 py-4">
                    <h1 class="text-2xl font-bold text-gray-800">Modifier l'Article</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-4xl mx-auto">
                    <!-- Success Message -->
                    <div class="mb-6 bg-blue-50 border-l-4 border-blue-500 p-4 rounded">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-blue-700">
                                    Vous modifiez l'article #1. Les modifications seront enregistrées immédiatement.
                                </p>
                            </div>
                        </div>
                    </div>

                    <form class="bg-white rounded-lg shadow-md p-8">
                        <!-- Titre -->
                        <div class="mb-6">
                            <label for="title" class="block text-sm font-semibold text-gray-700 mb-2">
                                Titre de l'article <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="title" 
                                name="title" 
                                value="Les nouvelles tendances de l'IA en 2024"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                                required
                            >
                        </div>

                        <!-- Catégorie -->
                        <div class="mb-6">
                            <label for="category" class="block text-sm font-semibold text-gray-700 mb-2">
                                Catégorie <span class="text-red-500">*</span>
                            </label>
                            <select 
                                id="category" 
                                name="category" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent"
                                required
                            >
                                <option value="">Sélectionnez une catégorie</option>
                                <option value="technologie" selected>Technologie</option>
                                <option value="lifestyle">Lifestyle</option>
                                <option value="voyage">Voyage</option>
                                <option value="business">Business</option>
                                <option value="sante">Santé</option>
                                <option value="cuisine">Cuisine</option>
                            </select>
                        </div>

                        <!-- Image actuelle -->
                        <div class="mb-6">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Image actuelle
                            </label>
                            <div class="flex items-center space-x-4">
                                <div class="h-32 w-32 bg-gradient-to-br from-blue-400 to-indigo-600 rounded-lg flex items-center justify-center shadow-md">
                                    <span class="text-5xl">💻</span>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-600 mb-2">Image de couverture actuelle</p>
                                    <button type="button" class="text-red-600 hover:text-red-700 text-sm font-semibold">
                                        Supprimer l'image
                                    </button>
                                </div>
                            </div>
                        </div>

                        <!-- Nouvelle image -->
                        <div class="mb-6">
                            <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                                Modifier l'image de couverture
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label for="image" class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Cliquez pour uploader</span> une nouvelle image</p>
                                        <p class="text-xs text-gray-500">PNG, JPG, GIF jusqu'à 10MB</p>
                                    </div>
                                    <input id="image" name="image" type="file" class="hidden" accept="image/*" />
                                </label>
                            </div>
                        </div>

                        <!-- Contenu -->
                        <div class="mb-6">
                            <label for="content" class="block text-sm font-semibold text-gray-700 mb-2">
                                Contenu de l'article <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="content" 
                                name="content" 
                                rows="15" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                                required
                            >L'intelligence artificielle continue de révolutionner notre monde de manière spectaculaire. En 2024, nous assistons à des avancées sans précédent qui transforment non seulement les industries technologiques, mais aussi notre vie quotidienne.

Les modèles de langage de grande taille (LLM) ont franchi de nouvelles étapes impressionnantes. Ces systèmes d'IA sont désormais capables de comprendre et de générer du texte avec une précision et une nuance remarquables.

Le secteur médical bénéficie énormément des progrès de l'IA. Les algorithmes d'apprentissage automatique peuvent maintenant détecter des maladies à un stade précoce, analyser des images médicales avec une précision supérieure à celle des humains.</textarea>
                        </div>

                        <!-- Tags -->
                        <div class="mb-6">
                            <label for="tags" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tags
                            </label>
                            <input 
                                type="text" 
                                id="tags" 
                                name="tags" 
                                value="IA, technologie, innovation, 2024"
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                            >
                        </div>

                        <!-- Statut de publication -->
                        <div class="mb-8">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Statut de publication
                            </label>
                            <div class="flex space-x-4">
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="published" class="form-radio text-indigo-600 h-5 w-5" checked>
                                    <span class="ml-2 text-gray-700">Publié</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="draft" class="form-radio text-indigo-600 h-5 w-5">
                                    <span class="ml-2 text-gray-700">Brouillon</span>
                                </label>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                            <div class="flex space-x-4">
                                <a href="dashboard.html" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-semibold transition">
                                    Annuler
                                </a>
                                <button type="button" onclick="confirm('Êtes-vous sûr de vouloir supprimer cet article ?')" class="px-6 py-3 bg-red-600 hover:bg-red-700 text-white rounded-lg font-semibold transition">
                                    Supprimer
                                </button>
                            </div>
                            <div class="flex space-x-4">
                                <button type="button" class="px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg font-semibold transition">
                                    Prévisualiser
                                </button>
                                <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-semibold transition flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Enregistrer les modifications
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
</body>
</html>