<x-app-layout>

    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl mb-4 text-sky-700">La liste des utilisateurs</h2>
                    <div class="overflow-x-auto">
                        <table class="table-auto min-w-full divide-y divide-gray-200">
                            <thead class="bg-sky-500">
                                <tr class="text-white">
                                    <th class="px-6 py-3 text-left text-sm font-semibold">Id</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold">Nom du critere</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold">Description</th>
                                    <th class="px-6 py-3 text-left text-sm font-semibold">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($criteres as $critere)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $critere->id }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $critere->nom }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">{{ $critere->description }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <a href="{{ url('delete/' . $critere->id) }}"
                                                class="text-red-500 hover:text-red-700">Supprimer</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
