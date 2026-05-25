<section class="w-full px-6 md:px-12 lg:px-20 py-10 lg:py-16 text-center">
    <h2 class="text-sky-400 text-3xl md:text-4xl font-bold mb-2"
        style="font-family: var(--font-fredoka)">
        Apa yang Kami Lakukan?
    </h2>
    <p class="text-gray-600 mb-10"
       style="font-family: var(--font-poppins)">
        tiga pilar utama pengembangan anak yang kami kemas dalam Zona Belajar
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

        {{-- Card 1 --}}
        <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
            <img src="{{ asset('img/about/social-skill.png') }}" class="h-40 mb-4" alt="Social Skill">
            <h3 class="font-bold text-xl mb-2" style="font-family: var(--font-fredoka)">SOCIAL SKILL</h3>
            <p class="text-xs leading-tight" style="font-family: var(--font-poppins)">
                Membantu anak memahami interaksi dunia di sekitar mereka melalui cerita visual
                dan panduan langkah demi langkah.
            </p>
        </div>

        {{-- Card 2 --}}
        <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
            <img src="{{ asset('img/about/life-skill.png') }}" class="h-40 mb-4" alt="Life Skill">
            <h3 class="font-bold text-xl mb-2" style="font-family: var(--font-fredoka)">LIFE SKILL</h3>
            <p class="text-xs leading-tight" style="font-family: var(--font-poppins)">
                Memberikan alat bagi anak untuk mengenali, menamai, dan meregulasi emosi mereka
                dengan cara yang tenang.
            </p>
        </div>

        {{-- Card 3 --}}
        <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
            <img src="{{ asset('img/about/emotional-skill.png') }}" class="h-40 mb-4" alt="Emotional Skill">
            <h3 class="font-bold text-xl mb-2" style="font-family: var(--font-fredoka)">EMOTIONAL SKILL</h3>
            <p class="text-xs leading-tight" style="font-family: var(--font-poppins)">
                Melatih kemandirian dalam aktivitas sehari-hari, mulai dari merawat diri hingga
                tanggung jawab sederhana di rumah.
            </p>
        </div>

    </div>
</section>
