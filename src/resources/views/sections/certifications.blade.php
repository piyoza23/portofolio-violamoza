<section class="py-32 bg-white">

    <div class="container mx-auto">

        <p
            class="uppercase tracking-[4px] text-sm text-[#8d6767]"
        >
            07. Certifications
        </p>

        <h2
            class="font-serif text-5xl text-[#4c3737] mt-6 mb-20"
        >
            Achievements & Certifications
        </h2>

        <div class="grid md:grid-cols-2 gap-10">

            @foreach($certifications as $certificate)

                <div
                    class="bg-[#f8f1f1] rounded-[35px] p-10"
                >

                    <h3
                        class="font-serif text-3xl text-[#5b4040]"
                    >
                        {{ $certificate->name }}
                    </h3>

                    <div class="mt-5 text-[#8d6767]">

                        {{ $certificate->issuer }}

                    </div>

                    <div class="mt-2 text-sm text-gray-400">

                        {{ $certificate->issued_at }}

                    </div>

                    @if($certificate->certificate_url)

                        <a
                            href="{{ $certificate->certificate_url }}"
                            target="_blank"
                            class="inline-block mt-8 px-6 py-3 rounded-full bg-[#7d5a5a] text-white"
                        >
                            View Certificate
                        </a>

                    @endif

                </div>

            @endforeach

        </div>

    </div>

</section>