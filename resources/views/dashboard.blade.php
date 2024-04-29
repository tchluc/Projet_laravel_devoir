<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-wrap justify-between mb-8">
            <div class="w-full md:w-1/2">
                <input type="text" placeholder="Rechercher par nom/type de publication" class="form-input w-full mb-4 px-4 py-2 rounded-md focus:outline-none focus:ring focus:border-blue-300">
                <div class="flex items-center gap-4">
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors">Filtrer</button>
                    <button class="bg-gray-200 text-gray-600 px-4 py-2 rounded-md hover:bg-gray-300 transition-colors">Tout afficher</button>
                </div>
            </div>
        </div>

        <section class="mb-8">
            <h3 class="text-lg font-bold mb-4">En vedette</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Exemple d'une université en vedette -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-40" style="background-image: url('url_de_votre_image.jpg')"></div>
                    <div class="p-4">
                        <h4 class="text-base font-bold mb-2">Nom de l'Université</h4>
                        <p class="text-gray-600 mb-2">Informations sur l'université</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600">4.5 étoiles</span>
                            <!-- Ajoutez ici un élément pour afficher les étoiles -->
                        </div>
                    </div>
                </div>
                <!-- Ajoutez ici d'autres éléments en vedette -->
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-40" style="background-image: url('url_de_votre_image.jpg')"></div>
                    <div class="p-4">
                        <h4 class="text-base font-bold mb-2">Nom de l'Université</h4>
                        <p class="text-gray-600 mb-2">Informations sur l'université</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600">4.5 étoiles</span>
                            <!-- Ajoutez ici un élément pour afficher les étoiles -->
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-40" style="background-image: url('url_de_votre_image.jpg')"></div>
                    <div class="p-4">
                        <h4 class="text-base font-bold mb-2">Nom de l'Université</h4>
                        <p class="text-gray-600 mb-2">Informations sur l'université</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600">4.5 étoiles</span>
                            <!-- Ajoutez ici un élément pour afficher les étoiles -->
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-40" style="background-image: url('url_de_votre_image.jpg')"></div>
                    <div class="p-4">
                        <h4 class="text-base font-bold mb-2">Nom de l'Université</h4>
                        <p class="text-gray-600 mb-2">Informations sur l'université</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600">4.5 étoiles</span>
                            <!-- Ajoutez ici un élément pour afficher les étoiles -->
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-lg overflow-hidden">
                    <div class="bg-cover bg-center h-40" style="background-image: url('url_de_votre_image.jpg')"></div>
                    <div class="p-4">
                        <h4 class="text-base font-bold mb-2">Nom de l'Université</h4>
                        <p class="text-gray-600 mb-2">Informations sur l'université</p>
                        <div class="flex items-center gap-2">
                            <span class="text-gray-600">4.5 étoiles</span>
                            <!-- Ajoutez ici un élément pour afficher les étoiles -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
