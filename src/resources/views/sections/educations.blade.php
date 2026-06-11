<section class="py-32 bg-[#f8f1f1]">

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            06. Education
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            Academic Journey
        </h2>

        <div class="space-y-10">

            @foreach($educations as $education)

                <div
                    class="bg-white rounded-[35px] p-10"
                >

                    <h3
                        class="font-serif text-3xl text-[#5b4040]"
                    >
                        {{ $education->school }}
                    </h3>

                    <p class="mt-5 text-gray-500">

                        {{ $education->major }}

                    </p>

                    <p class="mt-3 text-sm text-gray-400">

                        {{ $education->start_year }}

                        -

                        {{ $education->end_year }}

                    </p>

                </div>

            @endforeach

        </div>

    </div>

</section>