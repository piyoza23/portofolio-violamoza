<section
    id="projects"
    class="py-32 bg-[#f8f1f1]"
>

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            04. Portfolio
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            Selected Projects
        </h2>

        <div class="space-y-16">
                <div class="grid md:grid-cols-2 gap-10 items-center bg-white rounded-[40px] p-8 shadow-sm transition-all duration-500 hover:-translate-y-3 hover:shadow-2xl">

@foreach($projects as $project)

    <div
    class="
    grid
    md:grid-cols-2
    gap-16
    items-center
    bg-white
    rounded-[40px]
    p-8
    "
    >

    @if($loop->odd)

    <div>

        <img
            src="{{ Storage::url($project->image) }}"
            class="rounded-[30px]"
        >

    </div>

    <div>

        <h3
            class="font-serif text-4xl text-[#5b4040]"
        >
            {{ $project->title }}
        </h3>

        <p
            class="mt-8 text-gray-500 leading-8"
        >
            {{ $project->description }}
        </p>

    </div>

    @else

    <div>

        <h3
            class="font-serif text-4xl text-[#5b4040]"
        >
            {{ $project->title }}
        </h3>

        <p
            class="mt-8 text-gray-500 leading-8"
        >
            {{ $project->description }}
        </p>

    </div>

    <div>

        <img
            src="{{ Storage::url($project->image) }}"
            class="rounded-[30px]"
        >

    </div>

    @endif

    </div>

@endforeach

        </div>

    </div>

</section>