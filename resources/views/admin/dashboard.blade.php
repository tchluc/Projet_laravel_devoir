<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Gérer les utilisateurs -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-lg font-semibold mb-4">Gérer les Utilisateurs</h2>
                        <a href="{{ route('admin.users')}}" class="text-blue-500 hover:text-blue-700">Voir tous les utilisateurs</a>
                    </div>
                </div>

                <!-- Gérer les commentaires -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-lg font-semibold mb-4">Gérer les Commentaires</h2>
                        <a href="#" class="text-blue-500 hover:text-blue-700">Voir tous les commentaires</a>
                    </div>
                </div>

                <!-- Gérer les criteres -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-lg font-semibold mb-4">Gérer les critères de notation</h2>
                        <a href="{{ route('critere.create')}}" class="text-blue-500 hover:text-blue-700">Criteres </a>
                    </div>
                </div>

                <!-- Gérer les universités -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h2 class="text-lg font-semibold mb-4">Gérer les Universités</h2>
                        <a href="{{ route('university.create') }}" class="text-blue-500 hover:text-blue-700">Voir toutes les universités</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
