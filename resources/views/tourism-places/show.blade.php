<x-app-layout>
    <div class="max-w-7xl p-6 mx-auto sm:px-6 lg:px-8 mt-16">
        <div class="relative">
            <img class="h-my150 w-full object-cover object-center"
                src="{{ Storage::url($lugares_turistico->image->url) }}" alt="">
            <div class="absolute bottom-7 left-7">
                <h2 class="text-gray-50 text-3xl">Atractivo</h2>
                <h1 class="text-gray-50 text-6xl">Parque arenal</h1>
            </div>
        </div>
        <div class="grid grid-cols-4 mt-4">
            <div class="col-span-1">
                <ul class="divide-y divide-gray-200 sticky top-0">
                    <li class="py-2 text-base">
                        <a class="cursor-pointer hover:text-orange-500 capitalize" href="#acerca">Acerca de</a>
                    </li>
                    <li class="py-2 text-base">
                        <a class="cursor-pointer hover:text-orange-500 capitalize" href="#comollegar">Como llegar</a>
                    </li>
                    <li class="py-2 text-base">
                        <a class="cursor-pointer hover:text-orange-500 capitalize" href="#quehacer">Cosas que hacer</a>
                    </li>
                    <li class="py-2 text-base">
                        <a class="cursor-pointer hover:text-orange-500 capitalize" href="#infogeneral">Información general</a>
                    </li>
                    <li class="py-2 text-base">
                        <a class="cursor-pointer hover:text-orange-500 capitalize" href="#interes">Tambien te puede
                            interesar</a>
                    </li>
                </ul>
            </div>
            <div class="col-span-3">
                <p id="acerca">{{ $lugares_turistico->description }}</p>
                <div class="w-full object-cover mt-4">
                    {{-- aniadiendo codigo php que me reemplaze en la cadena 600 por 100% --}}
                    <?php
                    $url = str_replace('600', '100%', $lugares_turistico->location);
                    ?>
                    {!! $url !!}
                </div>
                <p class="text-xl my-4" id="comollegar">¿Como llegar?</p>
                @foreach ($lugares_turistico->routes as $ruta)
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-location-dot text-3xl text-red-600"></i>
                        <div class="pl-2">
                            <a class="font-bold" href="#">{{ $ruta->start }} - {{ $ruta->end }}</a>
                            <p><span class="font-semibold">{{ $ruta->transport }}</span>: {{ $ruta->time }}</p>
                        </div>
                    </div>
                @endforeach
                <p class="text-xl my-4" id="quehacer">¿Cosas que hacer?</p>

                @foreach ($lugares_turistico->tasks as $task)
                    <div class="flex items-center mb-2">
                        <i class="fa-solid fa-check-circle text-3xl text-red-600"></i>
                        <div class="pl-2">
                            <a class="font-bold" href="#">{{ $task->name }}</a>
                            <p>{{ $task->description }}</p>
                        </div>
                    </div>
                @endforeach
                <p class="text-xl my-4" id="infogeneral">Información general</p>
                <div class="grid grid-cols-3">
                    <div class="bg-gray-300 text-center p-2">
                        <div class="mb-2">
                            <i class="fa-solid fa-clock text-xl"></i>
                            <span class="text-base font-bold">Horario</span>
                        </div>
                        <p>{{$lugares_turistico->hours}}</p>
                    </div>
                    <div class="bg-gray-300 text-center p-2">
                        <div class="mb-2">
                            <i class="fa-solid fa-cloud-sun text-xl"></i>
                            <span class="text-base font-bold">Clima de hoy</span>
                        </div>
                        <p>{{$lugares_turistico->weater}}</p>
                    </div>
                    <div class="bg-gray-300 text-center p-2">
                        <div class="mb-2">
                            <i class="fa-solid fa-hand-holding-dollar text-xl"></i>
                            <span class="text-base font-bold">Precio</span>
                        </div>
                        <p>{{$lugares_turistico->price}}</p>
                    </div>
                    <div class="bg-gray-300 text-center p-2">
                        <div class="mb-2">
                            <i class="fa-solid fa-mountain-sun text-xl"></i>
                            <span class="text-base font-bold">Altura</span>
                        </div>
                        <p>{{$lugares_turistico->altitude}}</p>
                    </div>
                    <div class="bg-gray-300 text-center p-2">
                        <div class="mb-2">
                            <i class="fa-solid fa-clipboard-check text-xl"></i>                            <span class="text-base font-bold">Recomendaciones</span>
                        </div>
                        <p>{{$lugares_turistico->essential}}</p>
                    </div>
                </div>
                <p class="text-xl my-4" id="interes">También te puede interesar</p>
                <div class="grid grid-cols-3">
                    @foreach($sugerencias as $sugerencia)
                        <x-card :tourismPlace="$sugerencia"></x-card>
                    @endforeach
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
