<footer class="py-20 bg-[#f8f1f1]">

    <div class="container mx-auto">

        <div class="flex flex-col md:flex-row justify-between items-center">

            <div>

                <h2
                    class="font-serif text-3xl text-[#5b4040]"
                >
                    {{ $profile->name }}
                </h2>

                <div class="text-gray-400 mt-3">

                    {{ $profile->title }}

                </div>

            </div>

            <div class="flex gap-8 mt-10 md:mt-0">

                @foreach($socialLinks as $social)

                    <a
                        href="{{ $social->url }}"
                        target="_blank"
                        class="text-[#8d6767]"
                    >
                        {{ $social->platform }}
                    </a>

                @endforeach

            </div>

        </div>

    </div>

    <a
href="#top"
class="
fixed
bottom-10
right-10
w-14
h-14
rounded-full
bg-[#7d5a5a]
text-white
flex
items-center
justify-center
shadow-xl
"
>
↑
</a>
</footer>