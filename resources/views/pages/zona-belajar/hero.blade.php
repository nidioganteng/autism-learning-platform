<section class="w-full flex flex-col-reverse md:flex-row items-center justify-between px-6 md:px-12 lg:px-20 py-6 md:py-10 lg:py-14 gap-8 md:gap-0 min-h-[80vh]">

    {{-- Kiri: Teks --}}
    <div class="w-full md:w-1/2 md:pr-10 text-center md:text-left flex flex-col justify-center">
        <h1 class="text-sky-400 text-5xl md:text-6xl lg:text-[100px] font-bold mb-4 md:mb-6 leading-tight" 
            style="font-family: 'Fredoka One', cursive; font-style: normal;">
            Zona Belajar
        </h1>
        <p class="text-gray-800 text-base md:text-[22px] leading-relaxed mb-6 md:mb-8 mx-auto md:mx-0" 
           style="font-family: 'Poppins', sans-serif;">
            Solusi media edukatif untuk memberdayakan para pendidik dalam menumbuhkan interaksi 
            sosial, memupuk kemandirian (autonomi), dan menstabilkan regulasi emosi anak spektrum 
            autisme sejak dini.
        </p>
        <div>
            <a href="#" 
               class="inline-block bg-black text-white text-lg font-semibold px-20 py-4 rounded-full hover:bg-gray-800 transition"
               style="font-family: 'Poppins', sans-serif;">
                Mulai
            </a>
        </div>
    </div>

    {{-- Kanan: Gambar --}}
    <div class="w-full md:w-1/2 flex justify-center items-center">
        <img src="{{ asset('img/zona-belajar/hero.png') }}" 
             alt="Zona Belajar" 
             class="w-2/3 md:w-4/5 lg:w-1250 object-contain">
    </div>

</section>