<?php

namespace App\Livewire\Admin\Control;

use App\Models\subscripciones as ModelsSubscripciones;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Subscripciones extends Component
{
    //&================================================================Pagination
    use WithPagination;

    //&================================================================Filtros
    public $search, $perPage = 10, $perEstatus;

    //&================================================================Placeholder
    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }

    //&================================================================Render

    public function render()
    {
        $collection = ModelsSubscripciones::query();

        if ($this->perEstatus) {
            switch ($this->perEstatus) {
                case "1":
                    $collection->where("estatus", "1");
                    break;
                case "2":
                    $collection->where("estatus", "0");
                    break;
            }
        }

        $collection = $collection->where(function ($query) {
            $query->where("nombre", "LIKE", "%" . $this->search . "%");
        });


        $collection = $collection->orderBy("created_at", "desc")->paginate($this->perPage, pageName: "collection-page");
        return view('livewire.admin.control.subscripciones', [
            'collection' => $collection
        ]);
    }
}
