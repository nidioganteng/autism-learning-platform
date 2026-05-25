<section class="w-full relative bg-white">

    {{-- Inner wrapper overflow-hidden untuk dekorasi atas agar tidak keluar section --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        {{-- Awan di belakang balon --}}
        <img src="{{ asset('img/about/awan.png') }}"
             alt=""
             class="absolute -top-33.75 -left-27.5 w-90 z-0">

        {{-- Balon dekorasi kiri atas --}}
        <img src="{{ asset('img/about/balon.png') }}"
             alt=""
             class="absolute top-4 left-6 md:left-10 w-30 z-10">

        {{-- Fireworks dekorasi kiri bawah --}}
        <img src="{{ asset('img/about/fireworks.png') }}"
             alt=""
             class="absolute bottom-4 left-4 md:left-8 w-20 md:w-24 lg:w-32 z-10">
    </div>

    <div class="flex flex-col md:flex-row items-center">

        {{-- Kiri: Teks (vertically centered) --}}
        <div class="w-full md:w-2/5 py-16 md:py-0 text-left z-10 px-6 md:pl-12 lg:pl-20">
            <h1 class="text-sky-400 text-4xl sm:text-5xl md:text-6xl lg:text-[100px] font-bold leading-tight mb-4"
                style="font-family: var(--font-fredoka)">
                Tentang
            </h1>
            <p class="text-gray-800 text-sm sm:text-base md:text-[22px] leading-relaxed max-w-250 ml-5"
               style="font-family: var(--font-poppins)">
                Di Neura Bloom, kami membantu anak autisme menggali potensi mereka
                melalui metode belajar visual dan ramah sensorik yang unik.
            </p>
        </div>

        {{-- Kanan: Gambar --}}
        <div class="w-full md:w-3/5 flex justify-end items-end">
            <img src="{{ asset('img/about/about.png') }}"
                 alt="Anak-anak di atas pensil"
                 class="w-225 object-contain">
        </div>

    </div>

</section>
