<section
    id="skills"
    class="py-32 bg-[#f8f1f1]"
>

    <div class="container mx-auto">

        <p
            class="text-[#8d6767] uppercase tracking-[4px] text-sm mb-8"
        >
            02. Tech Stack
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mb-20"
        >
            Technologies I work with
        </h2>

        <div class="grid md:grid-cols-4 gap-8">

            @foreach($skills as $skill)

                <div class="bg-white rounded-[30px] p-10 transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl">

                    <h3
                        class="font-medium text-xl text-[#5b4040]"
                    >
                        {{ $skill->name }}
                    </h3>

                </div>

            @endforeach

        </div>

    </div>

</section>