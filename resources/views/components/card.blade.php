@props(['atractivo'])
<article class="flex flex-col m-2 shadow-xl rounded-md overflow-hidden">
    <div>
        <img class="w-full h-48" src="{{Storage::url($atractivo->image->url)}}" alt="">
    </div>
    <div class="flex-1 px-2">
        <h1 class="text-lg font-bold">{{$atractivo->name}}</h1>
        <p class="text-base line-clamp-3">{{$atractivo->description}}</p>
    </div>
    <div>
        <a class="float-right text-blue-700 font-semibold p-2" href="{{route('tourism-places.show', $atractivo)}}">Ver mas...</a>
    </div>
</article>