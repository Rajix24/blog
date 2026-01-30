<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Article - Admin</title>
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
                    <h1 class="text-2xl font-bold text-gray-800">Créer un Nouvel Article</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-8">
                <div class="max-w-4xl mx-auto">
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
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                                placeholder="Ex: Les nouvelles tendances de l'IA en 2024"
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
                                <option value="technologie">Technologie</option>
                                <option value="lifestyle">Lifestyle</option>
                                <option value="voyage">Voyage</option>
                                <option value="business">Business</option>
                                <option value="sante">Santé</option>
                                <option value="cuisine">Cuisine</option>
                            </select>
                        </div>

                        <!-- Image -->
                        <div class="mb-6">
                            <label for="image" class="block text-sm font-semibold text-gray-700 mb-2">
                                Image de couverture
                            </label>
                            <div class="flex items-center justify-center w-full">
                                <label for="image" class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <svg class="w-12 h-12 mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span class="font-semibold">Cliquez pour uploader</span> ou glissez-déposez</p>
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
                                placeholder="Écrivez votre article ici..."
                                required
                            ></textarea>
                            <p class="mt-2 text-sm text-gray-500">Minimum 100 caractères recommandés</p>
                        </div>

                        <!-- Tags -->
                        <div class="mb-6">
                            <label for="tags" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tags (optionnel)
                            </label>
                            <input 
                                type="text" 
                                id="tags" 
                                name="tags" 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:border-transparent" 
                                placeholder="Ex: IA, technologie, innovation (séparés par des virgules)"
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
                                    <span class="ml-2 text-gray-700">Publier immédiatement</span>
                                </label>
                                <label class="inline-flex items-center">
                                    <input type="radio" name="status" value="draft" class="form-radio text-indigo-600 h-5 w-5">
                                    <span class="ml-2 text-gray-700">Enregistrer comme brouillon</span>
                                </label>
                            </div>
                        </div>

                        <!-- Boutons d'action -->
                        <div class="flex justify-between items-center pt-6 border-t border-gray-200">
                            <a href="dashboard.html" class="px-6 py-3 bg-gray-200 hover:bg-gray-300 text-gray-700 rounded-lg font-semibold transition">
                                Annuler
                            </a>
                            <div class="flex space-x-4">
                                <button type="button" class="px-6 py-3 bg-gray-600 hover:bg-gray-700 text-white rounded-lg font-semibold transition">
                                    Prévisualiser
                                </button>
                                <button type="submit" class="px-6 py-3 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg font-semibold transition flex items-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                    </svg>
                                    Publier l'article
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