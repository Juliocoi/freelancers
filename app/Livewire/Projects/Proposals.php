<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Proposals extends Component
{
    protected Project $project;
    public function render()
    {
        return view('livewire.projects.proposals');
    }
}
