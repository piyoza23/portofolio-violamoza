<section class=" relative overflow-hidden min-h-screen bg-[#f8f1f1] ">

    @include('sections.navbar')

<div class="absolute top-0 right-0 w-96 h-96 bg-pink-200 opacity-40 rounded-full blur-[120px]"></div>

<div class="absolute bottom-0 left-0 w-80 h-80 bg-rose-100 opacity-40 rounded-full blur-[100px]"></div>

    <div class="container mx-auto mt-20">

        <div class="grid md:grid-cols-2 gap-24 items-center">

            <div>

                <div class="flex items-center gap-2 mb-8">

                    <div class="w-2 h-2 rounded-full bg-[#8d6767]"></div>

                    <span
                        class="uppercase tracking-[4px] text-[10px] text-[#8d6767]"
                    >
                        Available for internship
                    </span>

                </div>

                <h1
                    class="font-serif text-[#5b4040] text-6xl leading-tight"
                >
                    Hi, I'm {{ $profile->name }}
                </h1>

                <div
                    class="mt-8 text-3xl leading-relaxed text-[#3d2e2e]"
                >

                    <p>
                        Computer Science Student &
                    </p>

                    <p>
                        Aspiring Developer building
                    </p>

                    <p>
                        digital experiences with precision
                    </p>

                    <p>
                        and grace.
                    </p>

                </div>

                <div class="mt-12 flex gap-5">

                    <a
                        href="#projects"
                        class="bg-[#7d5a5a] text-white px-8 py-4 rounded-full text-xs tracking-[3px]"
                    >
                        VIEW MY WORK
                    </a>

                    <a
                        href="#contact"
                        class="border border-[#d8c9c9] px-8 py-4 rounded-full text-xs tracking-[3px]"
                    >
                        LET'S TALK
                    </a>

                </div>

            </div>

            <div class="flex justify-center">

                <div
                    class="bg-white p-3 rounded-[30px] shadow-2xl w-[450px]"
                >

                    <img
                        src="{{ Storage::url($profile->photo) }}"
                        class="rounded-[25px] h-[340px] object-cover w-full"
                    >

                </div>

            </div>

        </div>

    </div>

</section>