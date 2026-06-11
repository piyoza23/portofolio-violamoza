<section
    id="contact"
    class="py-32 bg-white"
>

    <div class="container mx-auto text-center">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            09. Contact
        </p>

        <h2
            class="font-serif text-6xl text-[#4c3737] mt-6"
        >
            Let's Work Together
        </h2>

        <p
            class="mt-8 text-gray-500 max-w-2xl mx-auto leading-8"
        >
            Interested in collaborating or building something amazing together?
            Feel free to reach out.
        </p>

        <div class="mt-16">

            <a
                href="mailto:{{ $profile->email }}"
                class="px-10 py-5 bg-[#7d5a5a] rounded-full text-white"
            >
                {{ $profile->email }}
            </a>

        </div>

    </div>

</section>