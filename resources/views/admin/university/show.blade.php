<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $university->nom }}
        </h2>
    </x-slot>


    <!-- Afficher les détails de l'université -->
    <div class=" py-6 sm:px-6 lg:px-8">
    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
        <div class="p-6">
            <input type="hidden" id="id_universite" value="{{ $university->id }}">
            <input type="hidden" id="id_users" value="{{ Auth::user()->id }}">
            <h2 class="text-xl font-semibold mb-4">{{ $university->nom }}</h2>
            <p class="text-gray-600 mb-4">{{ $university->description }}</p>
            <p class="text-gray-600 mb-4">Localisation : {{ $university->localisation }}</p>
            <p class="text-gray-600 mb-4">Site Web : <a href="{{ $university->site_web }}"
                    class="text-blue-500 hover:text-blue-700">{{ $university->site_web }}</a></p>
            <div class="bg-white shadow-md rounded-lg overflow-hidden mb-6">
                <div class="p-6">
                    
                    <form action="{{ route('comment.store', $university->id) }}" method="post">
                        @csrf
                        <!-- Ajoutez les divs pour les notes des critères ici -->
                        <h2 class="text-xl font-semibold mb-4">Veuillez noter l"universite</h2>
                        @foreach ($criteres as $critere)
                            <p>{{ $critere->nom }}</p>
                            <div class="radio-input">
                                <input value="1" name="critere{{ $critere->id }}"
                                    id="critere{{ $critere->id }}-1" type="radio" checked="">
                                <label for="critere{{ $critere->id }}-1"><span>1</span></label>
                                <input value="2" name="critere{{ $critere->id }}"
                                    id="critere{{ $critere->id }}-2" type="radio">
                                <label for="critere{{ $critere->id }}-2"><span>2</span></label>
                                <input value="3" name="critere{{ $critere->id }}"
                                    id="critere{{ $critere->id }}-3" type="radio">
                                <label for="critere{{ $critere->id }}-3"><span>3</span></label>
                                <input value="4" name="critere{{ $critere->id }}"
                                    id="critere{{ $critere->id }}-4" type="radio">
                                <label for="critere{{ $critere->id }}-4"><span>4</span></label>

                            </div>
                        @endforeach
                        <div class="mb-4">
                            <br><br>
                            <div class="w-full px-4 md:w-1/2 lg:w-1/3">
                                <div class="mb-12">
                                   <label for="" class="mb-[10px] block text-base font-medium text-dark">
                                    Laisser un commentaire
                                   </label>
                                   <textarea rows="5" placeholder="Comment trouvez vous notre universite ?" class="w-full bg-transparent rounded-md border border-stroke dark:border-dark-3 p-5 text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-gray-2"></textarea>
                                </div>
                             </div>
                        </div>
                        <div class="mt-4">
                            <button type="submit"
                                class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:bg-blue-600">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    

    <!-- Afficher les commentaires -->
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="p-6">
            <h2 class="text-xl font-semibold mb-4">Commentaires</h2>
            @forelse ($comments as $comment)
            <!-- This is an example component -->
            <div class="relative grid grid-cols-1 gap-4 p-4 mb-8 border rounded-lg bg-white shadow-lg">
                <div class="relative flex gap-4">
                    <img src="https://icons.iconarchive.com/icons/diversity-avatars/avatars/256/charlie-chaplin-icon.png" class="relative rounded-lg -top-8 -mb-4 bg-white border h-20 w-20" alt="" loading="lazy">
                    <div class="flex flex-col w-full">
                        <div class="flex flex-row justify-between">
                            <p class="relative text-xl whitespace-nowrap truncate overflow-hidden">{{ \App\Models\User::find($comment->id_users)->name }}</p>
                            <a class="text-gray-500 text-xl" href="#"><i class="fa-solid fa-trash"></i></a>
                        </div>
                        <p class="text-gray-400 text-sm">{{ $comment->created_at }}</p>
                    </div>
                </div>
                <p class="-mt-4 text-gray-500">{{ $comment->contenu }}</p>
            </div>
            @empty
                <p class="text-gray-600">Aucun commentaire pour le moment.</p>
            @endforelse
            {{ $comments->links() }} 
        </div>
        
    </div>
    </div>
    </div>

    <style>
        /* Style pour le paragraphe */
        p {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        /* Style pour les radios et les labels */
        .radio-input input[type="radio"] {
            display: none;
        }

        .radio-input label {
            display: inline-block;
            cursor: pointer;
            margin-right: 10px;
        }

        .radio-input label span {
            padding: 5px 10px;
            background-color: #f0f0f0;
            border-radius: 5px;
        }

        .radio-input input[type="radio"]:checked+label span {
            background-color: #3498db;
            color: #fff;
        }

        /* Style pour la sélection */
        .radio-input .selection {
            display: inline-block;
            width: 20px;
            height: 20px;
            border: 2px solid #3498db;
            border-radius: 50%;
            position: relative;
            margin-right: 10px;
        }

        .radio-input input[type="radio"]:checked+label+.selection::before {
            content: "";
            width: 12px;
            height: 12px;
            background-color: #3498db;
            border-radius: 50%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: block;
        }
    </style>
</x-app-layout>
