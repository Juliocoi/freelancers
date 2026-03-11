<div class="grid grid-cols-2 gap-4">
    {{--o projects vem do App/Livewire/Projects/Index.php. Por ser uma propriedade computada, devemos usar o *this*.
        Tb não precisa dos parênteses() em projects(Projects é um métod0 de app/livewire/projects/index.php. (este é um padrão do Livewire)
         já $project é um model--}}
    @foreach ($this->projects as $project)
        <a href="{{ route('projects.show', $project) }}">
            <x-projects.simple-card :project="$project"/>
        </a>
    @endforeach
</div>
