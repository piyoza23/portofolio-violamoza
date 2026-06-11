<section class="py-32 bg-[#f8f1f1]">

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            08. Testimonials
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            What People Say
        </h2>

        <div class="grid md:grid-cols-2 gap-10">

            @foreach($testimonials as $testimonial)

                <div
                    class="bg-white rounded-[40px] p-10 shadow-sm"
                >

                    <p
                        class="text-gray-500 italic leading-8"
                    >
                        "{{ $testimonial->message }}"
                    </p>

                    <div class="mt-10">

                        <h3
                            class="font-serif text-2xl text-[#5b4040]"
                        >
                            {{ $testimonial->name }}
                        </h3>

                        <div class="text-gray-400">

                            {{ $testimonial->position }}

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

</section>