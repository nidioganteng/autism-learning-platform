<section id="modul" class="w-full px-6 md:px-12 lg:px-20 py-10 lg:py-16">
    <h2 class="text-center text-black text-3xl md:text-4xl font-extrabold mb-8 md:mb-10"
        style="font-family: var(--font-fredoka)">
        Modul Pembelajaran
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

        {{-- Card 1 --}}
        <a href="#" class="relative rounded-2xl overflow-hidden block group h-80 md:h-96 lg:h-full">
            <img src="{{ asset('img/zona-belajar/mandiri.png') }}"
                 alt="Belajar Mandiri"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-5">
                <span class="bg-sky-400 text-white text-base lg:text-lg font-semibold px-8 lg:px-15 py-3 lg:py-4 rounded-full"
                      style="font-family: var(--font-poppins)">
                    Belajar Mandiri
                </span>
            </div>
        </a>

        {{-- Card 2 --}}
        <a href="#" class="relative rounded-2xl overflow-hidden block group h-80 md:h-96 lg:h-full">
            <img src="{{ asset('img/zona-belajar/sosialisasi.png') }}"
                 alt="Belajar Bersosialisasi"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-5">
                <span class="bg-sky-400 text-white text-base lg:text-lg font-semibold px-8 lg:px-15 py-3 lg:py-4 rounded-full"
                      style="font-family: var(--font-poppins)">
                    Belajar Bersosialisasi
                </span>
            </div>
        </a>

        {{-- Card 3 --}}
        <a href="#" class="relative rounded-2xl overflow-hidden block group h-80 md:h-96 md:col-span-2 lg:col-span-1 lg:h-full">
            <img src="{{ asset('img/zona-belajar/emosi.png') }}"
                 alt="Belajar Mengatur Emosi"
                 class="w-full h-full object-cover group-hover:scale-105 transition duration-300">
            <div class="absolute bottom-0 left-0 right-0 flex justify-center pb-5">
                <span class="bg-sky-400 text-white text-base lg:text-lg font-semibold px-8 lg:px-15 py-3 lg:py-4 rounded-full"
                      style="font-family: var(--font-poppins)">
                    Belajar Mengatur Emosi
                </span>
            </div>
        </a>

    </div>
</section>
