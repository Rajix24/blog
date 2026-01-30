<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Catégories - Admin</title>
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
                <a href="dashboard.html" class="flex items-center px-6 py-3 hover:bg-gray-800 transition">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                    Articles
                </a>
                <a href="categories.html" class="flex items-center px-6 py-3 bg-indigo-600 border-l-4 border-indigo-400">
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
                    <h1 class="text-2xl font-bold text-gray-800">Gestion des Catégories</h1>
                </div>
            </header>

            <!-- Content -->
            <main class="flex-1 overflow-y-auto p-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                    <!-- Formulaire d'ajout de catégorie -->
                    <div class="lg:col-span-1">
                        <div class="bg-white rounded-lg shadow-md p-6">
                            <h2 class="text-xl font-bold text-gray-800 mb-6">Ajouter une Catégorie</h2>
                            <form>
                                <div class="mb-4">
                                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Nom <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                                        placeholder="Ex: Technologie"
                                        required
                                    >
                                </div>

                                <div class="mb-4">
                                    <label for="slug" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Slug <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="slug" 
                                        name="slug" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                                        placeholder="Ex: technologie"
                                        required
                                    >
                                    <p class="mt-1 text-xs text-gray-500">URL friendly (ex: ma-categorie)</p>
                                </div>

                                <div class="mb-6">
                                    <label for="description" class="block text-sm font-semibold text-gray-700 mb-2">
                                        Description
                                    </label>
                                    <textarea 
                                        id="description" 
                                        name="description" 
                                        rows="4" 
                                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" 
                                        placeholder="Description de la catégorie..."
                                    ></textarea>
                                </div>

                                <button type="submit" class="w-full bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-lg font-semibold transition flex items-center justify-center">
                                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                    Ajouter la Catégorie
                                </button>
                            </form>
                        </div>

                        <!-- Stats -->
                        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                            <h3 class="text-lg font-bold text-gray-800 mb-4">Statistiques</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Total catégories</span>
                                    <span class="text-2xl font-bold text-indigo-600">8</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Catégories actives</span>
                                    <span class="text-2xl font-bold text-green-600">7</span>
                                </div>
                                <div class="flex justify-between items-center">
                                    <span class="text-gray-600">Catégories vides</span>
                                    <span class="text-2xl font-bold text-gray-400">1</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Liste des catégories -->
                    <div class="lg:col-span-2">
                        <div class="bg-white rounded-lg shadow-md overflow-hidden">
                            <div class="p-6 border-b border-gray-200">
                                <div class="flex justify-between items-center">
                                    <h2 class="text-xl font-bold text-gray-800">Liste des Catégories</h2>
                                    <input 
                                        type="text" 
                                        placeholder="Rechercher..." 
                                        class="px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500"
                                    >
                                </div>
                            </div>

                            <div class="divide-y divide-gray-200">
                                <!-- Catégorie 1 -->
                                <div class="p-6 hover:bg-gray-50 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3 mb-2">
                                                <h3 class="text-lg font-bold text-gray-800">Technologie</h3>
                                                <span class="bg-indigo-100 text-indigo-600 text-xs font-semibold px-3 py-1 rounded-full">12 articles</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mb-2">Slug: <span class="font-mono bg-gray-100 px-2 py-1 rounded">technologie</span></p>
                                            <p class="text-sm text-gray-500">Articles sur les nouvelles technologies, l'innovation et le numérique</p>
                                        </div>
                                        <div class="flex space-x-2 ml-4">
                                            <button class="text-indigo-600 hover:text-indigo-700 p-2" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')" class="text-red-600 hover:text-red-700 p-2" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Catégorie 2 -->
                                <div class="p-6 hover:bg-gray-50 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3 mb-2">
                                                <h3 class="text-lg font-bold text-gray-800">Lifestyle</h3>
                                                <span class="bg-purple-100 text-purple-600 text-xs font-semibold px-3 py-1 rounded-full">8 articles</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mb-2">Slug: <span class="font-mono bg-gray-100 px-2 py-1 rounded">lifestyle</span></p>
                                            <p class="text-sm text-gray-500">Mode de vie, bien-être et développement personnel</p>
                                        </div>
                                        <div class="flex space-x-2 ml-4">
                                            <button class="text-indigo-600 hover:text-indigo-700 p-2" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')" class="text-red-600 hover:text-red-700 p-2" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Catégorie 3 -->
                                <div class="p-6 hover:bg-gray-50 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3 mb-2">
                                                <h3 class="text-lg font-bold text-gray-800">Voyage</h3>
                                                <span class="bg-green-100 text-green-600 text-xs font-semibold px-3 py-1 rounded-full">15 articles</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mb-2">Slug: <span class="font-mono bg-gray-100 px-2 py-1 rounded">voyage</span></p>
                                            <p class="text-sm text-gray-500">Destinations, conseils de voyage et aventures</p>
                                        </div>
                                        <div class="flex space-x-2 ml-4">
                                            <button class="text-indigo-600 hover:text-indigo-700 p-2" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')" class="text-red-600 hover:text-red-700 p-2" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Catégorie 4 -->
                                <div class="p-6 hover:bg-gray-50 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3 mb-2">
                                                <h3 class="text-lg font-bold text-gray-800">Business</h3>
                                                <span class="bg-yellow-100 text-yellow-700 text-xs font-semibold px-3 py-1 rounded-full">6 articles</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mb-2">Slug: <span class="font-mono bg-gray-100 px-2 py-1 rounded">business</span></p>
                                            <p class="text-sm text-gray-500">Entrepreneuriat, stratégie et management</p>
                                        </div>
                                        <div class="flex space-x-2 ml-4">
                                            <button class="text-indigo-600 hover:text-indigo-700 p-2" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')" class="text-red-600 hover:text-red-700 p-2" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <!-- Catégorie 5 -->
                                <div class="p-6 hover:bg-gray-50 transition">
                                    <div class="flex justify-between items-start">
                                        <div class="flex-1">
                                            <div class="flex items-center space-x-3 mb-2">
                                                <h3 class="text-lg font-bold text-gray-800">Santé</h3>
                                                <span class="bg-pink-100 text-pink-600 text-xs font-semibold px-3 py-1 rounded-full">10 articles</span>
                                            </div>
                                            <p class="text-sm text-gray-600 mb-2">Slug: <span class="font-mono bg-gray-100 px-2 py-1 rounded">sante</span></p>
                                            <p class="text-sm text-gray-500">Santé, nutrition et fitness</p>
                                        </div>
                                        <div class="flex space-x-2 ml-4">
                                            <button class="text-indigo-600 hover:text-indigo-700 p-2" title="Modifier">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                </svg>
                                            </button>
                                            <button onclick="confirm('Êtes-vous sûr de vouloir supprimer cette catégorie ?')" class="text-red-600 hover:text-red-700 p-2" title="Supprimer">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
</html>