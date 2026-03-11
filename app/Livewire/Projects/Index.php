<?php

namespace App\Livewire\Projects;

use Livewire\Component;
use App\Models\Project;
use Livewire\Attributes\Computed;

class Index extends Component
{
    public function render()
    {
        return view('livewire.projects.index');
    }
    //Propriedade Computada: O uso de propriedades computadas é uma boa prática pois o Livewire faz o cache do resultado
    //durante uma única requisição, evitando múltiplas consultas ao banco de dados.
    #[Computed()]
    public function projects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
