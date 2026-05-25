<section class="w-full bg-white pt-4 sm:pt-8">

    {{-- Judul di area putih, overlapping ke pink --}}
    <div class="text-center px-6 relative z-10">
        <h2 class="text-black font-bold leading-none text-5xl sm:text-7xl md:text-8xl lg:text-9xl"
            style="font-family: var(--font-spartan)">
            Neura Bloom's Blog
        </h2>
    </div>

    {{-- Kotak pink mulai dari tengah judul ke bawah --}}
    <div class="w-full bg-[#F8C9E8] -mt-6 sm:-mt-9 md:-mt-12 lg:-mt-16 pt-12 sm:pt-16 md:pt-20 lg:pt-24 pb-12 md:pb-16 px-6 md:px-12 lg:px-20">

        <div class="max-w-5xl mx-auto grid items-center gap-8 md:gap-10 md:grid-cols-[200px_1fr] lg:grid-cols-[220px_1fr]">

            {{-- Gambar --}}
            <div class="flex justify-center">
                <img src="{{ asset('img/homepage/logo-4.png') }}"
                     alt="Ilustrasi blog"
                     class="w-36 sm:w-full max-w-36 sm:max-w-45 md:max-w-55 object-contain">
            </div>

            {{-- Teks --}}
            <div class="text-center md:text-left">

                <h3 class="text-black text-xl sm:text-2xl md:text-3xl font-bold leading-tight"
                    style="font-family: var(--font-fredoka)">
                    Melatih Regulasi Emosi Sejak Dini
                </h3>

                <p class="mt-3 md:mt-4 max-w-2xl text-sm md:text-base leading-7 text-black mx-auto md:mx-0"
                   style="font-family: var(--font-poppins)">
                    Panduan praktis untuk guru TK membantu anak mengenali dan mengelola emosi
                    melalui kartu visual, rutinitas harian, dan teknik jeda tenang.
                    Fokus pada langkah sederhana yang bisa langsung diterapkan di kelas.
                </p>

                <a href="#"
                   class="mt-5 md:mt-6 inline-flex items-center gap-3 md:gap-4 rounded-full bg-sky-400 px-6 md:px-8 py-3 text-sm font-bold text-white transition hover:bg-sky-500"
                   style="font-family: var(--font-poppins)">
                    Lihat Lebih Lanjut
                    <span class="text-xl leading-none">›</span>
                </a>

            </div>

        </div>

    </div>

</section>
