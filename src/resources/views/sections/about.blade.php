<section
    id="about"
    class="py-32 bg-white"
>

    <div class="container mx-auto">

        <div class="grid md:grid-cols-2 gap-24">

            {{-- kiri --}}
            <div>

                <p
                    class="text-[#8d6767] text-sm tracking-[4px] uppercase mb-8"
                >
                    01. About Me
                </p>

                <h2
                    class="font-serif text-5xl text-[#4c3737] leading-tight"
                >
                    Creating beautiful
                    digital experiences
                    with modern technology.
                </h2>

                <div
                    class="mt-10 border-l-2 border-[#d7c8c8] pl-8"
                >

                    <p
                        class="italic text-gray-500 text-lg leading-9"
                    >
                        "I enjoy transforming ideas into elegant,
                        functional and scalable web applications."
                    </p>

                </div>

            </div>

            {{-- kanan --}}
            <div class="space-y-8">

                <p class="leading-9 text-gray-500">

                    {{ $profile->about }}

                </p>

                <div class="grid grid-cols-2 gap-10">

                    <div>

                        <h3
                            class="font-serif text-3xl text-[#5b4040]"
                        >
                            2+
                        </h3>

                        <p class="mt-2 text-gray-500">
                            Years Experience
                        </p>

                    </div>

                    <div>

                        <h3
                            class="font-serif text-3xl text-[#5b4040]"
                        >
                            {{ $projects->count() }}+
                        </h3>

                        <p class="mt-2 text-gray-500">
                            Projects Completed
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>