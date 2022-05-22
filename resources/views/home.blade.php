<x-app-layout>
    <div class="relative h-screen w-full bg-no-repeat"
        style="background-image: url('https://upload.wikimedia.org/wikipedia/commons/5/5c/Iglesiasanfrancisco.jpg'); background-size:cover; background-position: center;)">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
            <p class="text-3xl text-gray-100">Ven a conocer...</p>
            <P class="text-6xl text-gray-100">La <span class="text-cyan-400">SUCURSAL</span> del CIELO</P>
        </div>
    </div>
    <div class="max-w-7xl p-6 mx-auto sm:px-6 lg:px-8 mt-6">
        <section class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex justify-center items-center p-6">
                <div class="">
                    <p class="font-semibold">Santa Cruz</p>
                    <h2 class="text-5xl font-bold">Camiri</h2>
                    <p class="mt-12 text-justify">{{$rest}}...</p>

                    <a class="inline-block px-6 py-2 mt-12 rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-100" href="{{route('about')}}">Seguir
                        leyendo...</a>
                </div>
            </div>
            <div class="grid grid-cols-3 grid-rows-3 gap-2">
                <img class="col-span-2 w-full h-full object-cover object-center rounded-lg"
                    src="https://i.ytimg.com/vi/LmVgfzKUd6E/maxresdefault.jpg" alt="">
                <img class="w-full h-full aspect-square object-cover object-center rounded-lg"
                    src="https://static.eldeber.com.bo//Files/Sizes/2021/7/12/camiri.-foto-junior-portugal_2075136717_380x260.jpg"
                    alt="">
                <img class="h-full row-span-2 object-cover object-center rounded-lg"
                    src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2f/Camiri_-_Torre_YPFB.jpg/250px-Camiri_-_Torre_YPFB.jpg"
                    alt="">
                <img class="h-full col-span-2 row-span-2 object-cover object-center rounded-lg"
                    src="https://pbs.twimg.com/media/EcuhNXdXYAAyGUF.jpg" alt="">
            </div>
        </section>
        <section class="my-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 :grid-cols-4">
                <div class="flex justify-between lg:flex-col lg:justify-center items-center lg:order-1">
                    <div class="block md:flex lg:block space-x-2 p-6">
                        <p class="text-3xl font-bold">Atractivos</p>
                        <p class="text-3xl font-bold">turisticos</p>
                    </div>
                    {{-- enlace boton para ver mas de atractivos --}}
                    <a class="block px-6 py-2 rounded-xl bg-blue-500 hover:bg-blue-600 text-gray-100" href="{{route('tourism-places.index')}}">Ven más...</a>
                </div>
                @foreach ($atractivos as $atractivo)
                    <x-card :atractivo="$atractivo"/>
                    {{-- {{Storage::url($atractivo->image->url)}} --}}
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>