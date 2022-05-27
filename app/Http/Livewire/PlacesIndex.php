<?php

namespace App\Http\Livewire;

use App\Models\TourismCategory;
use App\Models\TourismPlace;
use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Database\Eloquent\Builder;

class PlacesIndex extends Component
{
    use withPagination;

    public $category, $subcategoria;

    public $search ='';
    //resetar pagina al buscar una palabra en el buscador de la pagina principal
    public function updatingSearch(){
        $this->resetPage();
    }
     

    

    public function limpiar(){
        $this->reset(['category']);
    }

     

    public function render()
    {
        $categorias = TourismCategory::all();

     
        // $turismo2 = TourismPlace::where('name','LIKE','%'.$this->search.'%')->paginate();
        $turismo = TourismPlace::where('is_active', true)->where('name','LIKE','%'.$this->search.'%')->paginate();

      
        if($this->category){
            $turismo = TourismPlace::whereRelation('tourism_category','name', $this->category)->paginate();
        } 
        $atractivos = $turismo;
        return view('livewire.places-index', compact('atractivos', 'categorias'));
    }
}
