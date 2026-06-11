<section class="py-32 bg-white">

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            03. Services
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            What I can do for you
        </h2>

        <div class="grid md:grid-cols-3 gap-10">

            @foreach($services as $service)

                <div
                    class="rounded-[35px] p-10 border border-[#eee]"
                >

                    <h3
                        class="font-serif text-3xl text-[#5b4040]"
                    >
                        {{ $service->title }}
                    </h3>

                    <p
                        class="mt-6 text-gray-500 leading-8"
                    >
                        {{ $service->description }}
                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>