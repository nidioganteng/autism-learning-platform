<footer>
    {{-- Main Footer --}}
    <div class="w-full bg-white border-t border-gray-200 px-6 md:px-12 lg:px-16 py-10 md:py-14">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 md:gap-10 items-start">

            {{-- Col 1: Logo --}}
            <div class="flex items-center">
                <h2 class="text-black text-3xl md:text-4xl leading-tight" style="font-family: var(--font-fredoka)">
                    Neura Bloom
                </h2>
            </div>

            {{-- Col 2: Siapa Kami --}}
            <div>
                <h3 class="text-black text-lg font-bold mb-3" style="font-family: var(--font-freeman)">
                    Siapa kami
                </h3>
                <p class="text-gray-600 text-sm leading-relaxed" style="font-family: var(--font-poppins)">
                    Kami memberdayakan anak-anak neurodiversitas melalui alat pembelajaran visual
                    yang membangun keterampilan emosional, sosial, dan kehidupan—sambil mendukung
                    orang dewasa yang membimbing mereka.
                </p>
            </div>

            {{-- Col 3: Situs --}}
            <div>
                <h3 class="text-black text-lg font-bold mb-3" style="font-family: var(--font-freeman)">
                    Situs
                </h3>
                <ul class="space-y-2" style="font-family: var(--font-poppins)">
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-sky-400 transition">
                            Belajar Mandiri
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-sky-400 transition">
                            Belajar Bersosialisasi
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-sm text-gray-600 hover:text-sky-400 transition">
                            Belajar Mengatur Emosi
                        </a>
                    </li>
                </ul>
            </div>

            {{-- Col 4: Social Media & Contact --}}
            <div class="space-y-6">
                {{-- Social Media --}}
                <div>
                    <h3 class="text-black text-lg font-bold mb-3" style="font-family: var(--font-freeman)">
                        Social Media
                    </h3>
                    <div class="flex items-center gap-4">
                        <a href="#" class="hover:opacity-75 transition">
                            <img src="{{ asset('img/footer/instagram.png') }}" alt="Instagram" class="w-7 h-7 object-contain">
                        </a>
                        <a href="#" class="hover:opacity-75 transition">
                            <img src="{{ asset('img/footer/facebook.png') }}" alt="Facebook" class="w-7 h-7 object-contain">
                        </a>
                        <a href="#" class="hover:opacity-75 transition">
                            <img src="{{ asset('img/footer/youtube.png') }}" alt="YouTube" class="w-7 h-7 object-contain">
                        </a>
                    </div>
                </div>

                {{-- Contact --}}
                <div>
                    <h3 class="text-black text-lg font-bold mb-1" style="font-family: var(--font-freeman)">
                        Contact
                    </h3>
                    <p class="text-sm text-gray-600" style="font-family: var(--font-poppins)">
                        +62 881-6223-146
                    </p>
                </div>
            </div>

        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="w-full bg-sky-400 py-4 text-center">
        <p class="text-white text-sm font-semibold" style="font-family: var(--font-freeman)">
            @ Naura Bloom. All Rights Reserved
        </p>
    </div>

</footer>
