<section class="w-full relative bg-white">

    {{-- Balon & awan: hanya desktop --}}
    <div class="hidden md:block absolute inset-0 overflow-hidden pointer-events-none">
        <img src="{{ asset('img/about/awan.png') }}"
             alt=""
             class="absolute -top-33.75 -left-27.5 w-90 z-0">
        <img src="{{ asset('img/about/balon.png') }}"
             alt=""
             class="absolute top-4 left-10 w-30 z-10">
    </div>

    <div class="flex flex-col-reverse md:flex-row items-center">

        {{-- Kiri: Teks --}}
        <div class="w-full md:w-2/5 py-8 md:py-0 text-center md:text-left z-10 px-6 md:pl-12 lg:pl-20">
            <h1 class="text-sky-400 text-4xl sm:text-5xl md:text-6xl lg:text-[100px] font-bold leading-tight mb-3 md:mb-4"
                style="font-family: var(--font-fredoka)">
                Tentang
            </h1>
            <p class="text-gray-800 text-sm sm:text-base md:text-[22px] leading-relaxed mx-auto md:mx-0 md:ml-5 max-w-xs sm:max-w-sm md:max-w-250"
               style="font-family: var(--font-poppins)">
                Di Neura Bloom, kami membantu anak autisme menggali potensi mereka
                melalui metode belajar visual dan ramah sensorik yang unik.
            </p>
        </div>

        {{-- Kanan: Gambar --}}
        <div class="w-full md:w-3/5 flex justify-center md:justify-end items-end">
            <img src="{{ asset('img/about/about.png') }}"
                 alt="Anak-anak di atas pensil"
                 class="w-110 sm:w-3/4 md:w-225 object-contain">
        </div>

    </div>

</section>
