@props(['tourismPlace'])
<article class="flex flex-col m-2 shadow-md rounded-md overflow-hidden group hover:shadow-xl">
    <div class="h-48 overflow-hidden">
        <img class="w-full h-full group-hover:scale-125 transition duration-100" src="{{Storage::url($tourismPlace->image->url)}}" alt="">
    </div>
    <div class="flex-1 px-2">
        <h1 class="text-lg font-bold">{{$tourismPlace->name}}</h1>
        <p class="text-base line-clamp-3">{{$tourismPlace->description}}</p>
    </div>
    <div>
        <a class="float-right text-blue-700 font-semibold p-2" href="{{route('tourism-places.show', $tourismPlace->id)}}">Ver mas...</a>
    </div>
</article>