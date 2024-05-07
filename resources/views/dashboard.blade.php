<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="h-screen w-screen bg-gradient-to-br from-pink-50 to-indigo-100 p-8">
        <h1 class="text-center font-bold text-2xl text-indigo-500">liste des universités au togo </h1>
            <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7 my-10">
                @foreach ($universities as $university)
                <!-- Card 1 -->
                <div class="bg-white rounded-lg border shadow-md max-w-xs md:max-w-none overflow-hidden">
                    <img class="h-56 lg:h-60 w-full object-cover" src="{{ $university->image }}" alt="" />
                    <div class="p-3">
                        <h3 class="font-semibold text-xl leading-6 text-gray-700 my-2">
                            {{ $university->nom }}
                        </h3>
                        <p class="paragraph-normal text-gray-600">
                            {{ $university->description }}...
                        </p>
                            <a href="{{ route('university.show', $university->id) }}" target="_blank"
                            class="group relative overflow-hidden bg-blue-600 focus:ring-4 focus:ring-blue-300 inline-flex items-center px-7 py-2.5 rounded-lg text-white justify-center">
                            <span class="z-40">Voir plus</span>
                            <svg class="z-40 ml-2 -mr-1 w-3 h-3 transition-all duration-300 group-hover:translate-x-1" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <div
                                class="absolute inset-0 h-[200%] w-[200%] rotate-45 translate-x-[-70%] transition-all group-hover:scale-100 bg-white/30 group-hover:translate-x-[50%] z-20 duration-1000">
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        
    </section>
            
</x-app-layout>
