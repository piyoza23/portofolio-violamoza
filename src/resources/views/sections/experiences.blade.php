<section class="py-32 bg-white">

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            05. Experience
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            Work Experience
        </h2>

        <div class="space-y-12">

            @foreach($experiences as $experience)

<div class="relative">

    <div
        class="
        absolute
        left-0
        top-2
        w-4
        h-4
        rounded-full
        bg-[#8d6767]
        "
    >
    </div>

    <div
        class="
        ml-10
        border-l
        border-[#e6d8d8]
        pl-10
        pb-16
        "
    >

        <h3
            class="font-serif text-3xl text-[#5b4040]"
        >
            {{ $experience->position }}
        </h3>

        <div class="mt-2 text-[#8d6767]">
            {{ $experience->company }}
        </div>

        <div class="mt-2 text-sm text-gray-400">

            {{ $experience->start_date }}

            -

            {{ $experience->end_date ?? 'Present' }}

        </div>

        <p
            class="mt-6 leading-8 text-gray-500"
        >
            {{ $experience->description }}
        </p>

    </div>

</div>

            @endforeach

        </div>

    </div>

</section>