<section class="w-full bg-white px-6 md:px-12 lg:px-20 pt-16 pb-12 lg:pb-16 text-center">

    <h2 class="text-sky-400 text-4xl md:text-5xl lg:text-6xl font-bold italic mb-3"
        style="font-family: var(--font-fredoka)">
        Apa yang Kami Lakukan?
    </h2>

    <p class="text-gray-700 text-sm md:text-base mb-10"
       style="font-family: var(--font-poppins)">
        tiga pilar utama pengembangan anak yang kami kemas dalam Zona Belajar
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">

        {{-- Card 1 --}}
        <div class="bg-[#CBBBE8] p-6 rounded-3xl flex flex-col items-center">
            <img src="{{ asset('img/about/social-skill.png') }}"
                 class="h-52 mb-5 object-contain" alt="Social Skill">
            <h3 class="font-bold text-lg mb-3 tracking-wide"
                style="font-family: var(--font-fredoka)">
                SOCIAL SKILL
            </h3>
            <p class="text-xs md:text-sm leading-relaxed text-gray-700"
               style="font-family: var(--font-poppins)">
                Membantu anak memahami interaksi dunia di sekitar mereka melalui cerita visual
                dan panduan langkah demi langkah.
            </p>
        </div>

        {{-- Card 2 --}}
        <div class="bg-[#CBBBE8] p-6 rounded-3xl flex flex-col items-center">
            <img src="{{ asset('img/about/life-skill.png') }}"
                 class="h-52 mb-5 object-contain" alt="Life Skill">
            <h3 class="font-bold text-lg mb-3 tracking-wide"
                style="font-family: var(--font-fredoka)">
                LIFE SKILL
            </h3>
            <p class="text-xs md:text-sm leading-relaxed text-gray-700"
               style="font-family: var(--font-poppins)">
                Memberikan alat bagi anak untuk mengenali, menamai, dan meregulasi emosi mereka
                dengan cara yang tenang.
            </p>
        </div>

        {{-- Card 3 --}}
        <div class="bg-[#CBBBE8] p-6 rounded-3xl flex flex-col items-center">
            <img src="{{ asset('img/about/emotional-skill.png') }}"
                 class="h-52 mb-5 object-contain" alt="Emotional Skill">
            <h3 class="font-bold text-lg mb-3 tracking-wide"
                style="font-family: var(--font-fredoka)">
                EMOTIONAL SKILL
            </h3>
            <p class="text-xs md:text-sm leading-relaxed text-gray-700"
               style="font-family: var(--font-poppins)">
                Melatih kemandirian dalam aktivitas sehari-hari, mulai dari merawat diri hingga
                tanggung jawab sederhana di rumah.
            </p>
        </div>

    </div>

</section>
