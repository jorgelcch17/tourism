<div x-data>
    <div class="w-full py-4">
        <input wire:model="search" class="w-full p-3 border-gray-300 rounded-lg" type="text" placeholder="Ingrese el nombre de un lugar turistico a buscar...">
    </div>
    <div class="grid grid-cols-4">
        <div class="">
            <h2 class="font-semibold text-center mb-2">Subcategorias</h2>
            <ul class="divide-y divide-gray-200">
                @foreach($categorias as $categoria)
                    <li class="py-2 text-sm">
                        <a class="cursor-pointer hover:text-orange-500 capitalize {{ $category == $categoria->name ? 'text-orange-500 font-semibold': ''}}" wire:click="$set('category','{{$categoria->name}}')" >{{ $categoria->name }}</a>
                    </li>
                @endforeach
            </ul>
            <x-jet-button class="mt-4" wire:click="limpiar">
                Eliminar filtros
            </x-jet-button>
        </div>
        <div class="col-span-3 grid grid-cols-3">
            @foreach($atractivos as $atractivo)
                <x-card :atractivo="$atractivo"></x-card>
            @endforeach
        </div>
    </div>
    <div>
        {{ $atractivos->links() }}
    </div>
</div>
