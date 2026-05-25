<section class="w-full flex flex-col-reverse md:flex-row items-center px-6 md:px-12 lg:px-20 py-10 lg:py-16 gap-8 md:gap-0">

    {{-- Kiri: Teks --}}
    <div class="w-full md:w-1/2 relative">
        <img src="{{ asset('img/about/fireworks.png') }}" class="absolute left-0 -bottom-24 w-32 z-30" alt="">
        <img src="{{ asset('img/about/balloon.png') }}" class="w-32 mb-6 mt-12" alt="">
        <h1 class="text-sky-400 text-5xl md:text-6xl lg:text-[80px] font-bold mb-4 leading-tight"
            style="font-family: var(--font-fredoka)">
            Tentang
        </h1>
        <p class="text-gray-800 text-base md:text-lg leading-relaxed max-w-md"
           style="font-family: var(--font-poppins)">
            Di Neura Bloom, kami membantu anak autisme menggali potensi mereka melalui metode belajar
            visual dan ramah sensorik yang unik.
        </p>
    </div>

    {{-- Kanan: Gambar --}}
    <div class="w-full md:w-1/2 flex justify-center items-center">
        <img src="{{ asset('img/about/pencil.png') }}" alt="Anak-anak" class="w-full object-contain">
    </div>

</section>
