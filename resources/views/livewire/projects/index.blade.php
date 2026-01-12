<div>
{{--o projects vem do App/Livewire/Projects/Index.php. Por ser uma propriedade computada, devos usar o *this*.
    Tb não precisa dos parênteses() (este é um padrão do Livewire) --}}
    @foreach ($this->projects as $project)
        <li>
            <a href="{{ route('projects.show', $project) }}">
                {{ $project->id }} - {{ $project->title }}
            </a>
        </li>
    @endforeach
</div>
