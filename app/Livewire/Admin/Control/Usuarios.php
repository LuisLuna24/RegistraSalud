<?php

namespace App\Livewire\Admin\Control;

use App\Models\tipo_usuarios;
use App\Models\User;
use Livewire\Attributes\Lazy;
use Livewire\Component;
use Livewire\WithPagination;

#[Lazy()]
class Usuarios extends Component
{

    //&================================================================Paginate
    use WithPagination;
    //&================================================================Filtrso
    public $search, $perPage = 10, $perEstatus, $perCaducidad, $perProfecion;
    //&================================================================Moiunt
    public $tipoUsuarios = [];
    public function mount()
    {
        $this->tipoUsuarios = tipo_usuarios::whereNotIn('id', [1, 5])->get();
    }

    //&================================================================Placeholder
    public function placeholder()
    {
        return view('livewire.placeholders.skeleton');
    }

    //&================================================================Render
    public function render()
    {
        $collection = User::query();

        if ($this->perEstatus) {
            switch ($this->perEstatus) {
                case "1":
                    $collection->where('estatus', '1');
                    break;
                case '2':
                    $collection->where('estatus', '0');
                    break;
            }
        }

        if ($this->perCaducidad) {
            $collection = $collection->whereHas('profecional', function ($query) {
                $query->where('fecha_pago', $this->perCaducidad);
            });
        }


        if ($this->perProfecion) {
            $collection->where('id_tipo_usuario', $this->perProfecion);
        }

        $collection = $collection->where(function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        });

        $collection = $collection->where('id_tipo_usuario', '!=', [1, 5])->orderByDesc("created_at")->paginate($this->perPage, pageName: "collection-page");
        return view('livewire.admin.control.usuarios', [
            'collection' => $collection
        ]);
    }
}
