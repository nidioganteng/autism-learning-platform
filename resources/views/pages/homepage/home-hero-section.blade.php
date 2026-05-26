<section class="w-full flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-12 lg:px-20 py-8 md:py-10 lg:py-14 gap-4 md:gap-0 md:min-h-[80vh]">

    {{-- Kiri: Teks --}}
    <div class="w-full md:w-1/2 md:pr-10 text-center md:text-left">
        <h1 class="text-sky-400 text-4xl sm:text-5xl md:text-6xl lg:text-[100px] font-bold mb-4 md:mb-6 leading-tight"
            style="font-family: 'Fredoka One', cursive; font-style: normal;">
            Neura Bloom
        </h1>
        <p class="text-gray-800 text-sm sm:text-base md:text-[22px] leading-relaxed mb-6 md:mb-8 max-w-sm mx-auto md:max-w-none md:mx-0"
           style="font-family: 'Poppins', sans-serif;">
            Media interaktif untuk mendukung guru TK membangun keterampilan sosial,
            kemandirian, dan regulasi emosi anak autisme usia dini.
        </p>
        <a href="#"
           class="inline-block bg-sky-400 text-white text-base sm:text-lg font-semibold px-12 sm:px-20 py-3 sm:py-4 rounded-full hover:bg-gray-800 transition"
           style="font-family: 'Poppins', sans-serif;">
            Mulai Belajar
            <span class="leading-none">›</span>
        </a>
    </div>

    {{-- Kanan: Gambar --}}
    <div class="w-full md:w-1/2 flex justify-center items-center">
        <img src="{{ asset('img/homepage/home.png') }}"
             alt="Neura Bloom"
             class="w-3/4 sm:w-2/3 md:w-4/5 lg:w-full object-contain">
    </div>

</section>
