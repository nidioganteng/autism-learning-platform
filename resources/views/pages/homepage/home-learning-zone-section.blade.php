<section id="zona-belajar" class="w-full bg-[#C5AAEE] pt-12 pb-12 md:pt-20 md:pb-16">

    <h2 class="text-center text-black font-bold text-[44px] sm:text-[56px] md:text-[72px] lg:text-[88px] xl:text-[96px] mb-8 md:mb-14"
        style="font-family: var(--font-spartan)">
        Zona Belajar
    </h2>

    <div class="max-w-72 md:max-w-240 mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-8">

        <article class="bg-white text-center flex flex-col items-center pt-10 md:pt-12 pb-8 md:pb-10 px-6 rounded-t-[100px] min-h-72 md:min-h-90 w-full">

            <div class="flex justify-center mb-6 md:mb-8 mt-2 md:mt-4">
                <img src="{{ asset('img/homepage/logo-1.png') }}"
                     alt="Belajar Mandiri"
                     class="w-24 h-24 md:w-32 md:h-32 object-contain">
            </div>

            <h3 class="text-xl md:text-[22px] font-bold text-black leading-snug"
                style="font-family: var(--font-fredoka)">
                Belajar<br>Mandiri
            </h3>

        </article>

        <article class="bg-white text-center flex flex-col items-center pt-10 md:pt-12 pb-8 md:pb-10 px-6 rounded-t-[100px] min-h-72 md:min-h-90 w-full">

            <div class="flex justify-center mb-6 md:mb-8 mt-2 md:mt-4">
                <img src="{{ asset('img/homepage/logo-2.png') }}"
                     alt="Belajar Bersosialisasi"
                     class="w-24 h-24 md:w-32 md:h-32 object-contain">
            </div>

            <h3 class="text-xl md:text-[22px] font-bold text-black leading-snug"
                style="font-family: var(--font-fredoka)">
                Belajar<br>Bersosialisasi
            </h3>

        </article>

        <article class="bg-white text-center flex flex-col items-center pt-10 md:pt-12 pb-8 md:pb-10 px-6 rounded-t-[100px] min-h-72 md:min-h-90 w-full">

            <div class="flex justify-center mb-6 md:mb-8 mt-2 md:mt-4">
                <img src="{{ asset('img/homepage/logo-3.png') }}"
                     alt="Belajar Mengatur Emosi"
                     class="w-24 h-24 md:w-32 md:h-32 object-contain">
            </div>

            <h3 class="text-xl md:text-[22px] font-bold text-black leading-snug"
                style="font-family: var(--font-fredoka)">
                Belajar<br>Mengatur Emosi
            </h3>

        </article>

    </div>

</section>

{{-- Tombol di luar section, overlap ke purple dengan negative margin --}}
<div class="flex justify-center -mt-7 relative z-10 pb-6 sm:pb-8">

    <a href="{{ route('zona-belajar') }}"
       class="flex items-center gap-3 bg-sky-400 text-white text-base sm:text-lg font-semibold px-8 sm:px-10 py-3 sm:py-4 rounded-full hover:bg-sky-500 transition-colors"
       style="font-family: var(--font-poppins)">

       Mulai Belajar
       <span class="text-xl font-bold">›</span>

    </a>

</div>
