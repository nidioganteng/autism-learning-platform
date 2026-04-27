<nav class="w-full bg-white shadow-md border-b border-gray-200">
    <div class="flex items-center justify-between px-6 md:px-16 py-5">

        {{-- Logo --}}
        <a href="/" class="text-black text-3xl font-semibold tracking-tight" style="font-family: var(--font-fredoka)">
            Neura B.
        </a>

        {{-- Hamburger Button (mobile only) --}}
        <button id="menu-btn" class="md:hidden flex flex-col gap-1.5 p-2" aria-label="Toggle menu">
            <span class="block w-6 h-0.5 bg-gray-800 transition-all"></span>
            <span class="block w-6 h-0.5 bg-gray-800 transition-all"></span>
            <span class="block w-6 h-0.5 bg-gray-800 transition-all"></span>
        </button>

        {{-- Nav Links (desktop) --}}
        <ul class="hidden md:flex items-center gap-10" style="font-family: var(--font-freeman)">
            <li>
                <a href="/"
                   class="text-sky-400 text-lg font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/tentang"
                   class="text-sky-400 text-lg font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Tentang
                </a>
            </li>
            <li>
                <a href="/contact"
                   class="text-sky-400 text-lg font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Contact
                </a>
            </li>
            <li>
                <a href="/zona-belajar"
                   class="text-sky-400 text-lg font-bold uppercase tracking-widest underline underline-offset-4 hover:text-sky-500 transition">
                    Zona Belajar
                </a>
            </li>
        </ul>
    </div>

    {{-- Mobile Menu --}}
    <div id="mobile-menu" class="hidden md:hidden px-6 pb-5 border-t border-gray-100">
        <ul class="flex flex-col gap-4 pt-4" style="font-family: var(--font-freeman)">
            <li>
                <a href="/" class="block text-sky-400 text-base font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Beranda
                </a>
            </li>
            <li>
                <a href="/tentang" class="block text-sky-400 text-base font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Tentang
                </a>
            </li>
            <li>
                <a href="/contact" class="block text-sky-400 text-base font-bold uppercase tracking-widest hover:text-sky-500 transition">
                    Contact
                </a>
            </li>
            <li>
                <a href="/zona-belajar" class="block text-sky-400 text-base font-bold uppercase tracking-widest underline underline-offset-4 hover:text-sky-500 transition">
                    Zona Belajar
                </a>
            </li>
        </ul>
    </div>
</nav>

<script>
    document.getElementById('menu-btn').addEventListener('click', function () {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
