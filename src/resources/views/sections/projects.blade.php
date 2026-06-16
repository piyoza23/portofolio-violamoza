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
            bg-white
            rounded-[40px]
            p-10
            mb-10
        "
    >

        <span class="text-[#B08A8E]">
            0{{ $loop->iteration }}
        </span>

        <h3
            class="font-serif text-4xl text-[#5b4040] mt-4"
        >
            {{ $project->title }}
        </h3>

        <p
            class="mt-8 text-gray-500 leading-8 max-w-2xl"
        >
            {{ $project->description }}
        </p>

    </div>

@endforeach

        </div>

    </div>

</section>