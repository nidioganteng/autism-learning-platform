<header class="w-full bg-white shadow relative z-50">
    <nav class="flex items-center justify-between px-6 md:px-12 lg:px-20 py-6">

        <a href="{{ route('home') }}" class="font-fredoka text-3xl text-black md:text-4xl">
            Neura B.
        </a>

        {{-- Desktop menu --}}
        <ul class="hidden items-center gap-12 md:flex">
            <li>
                <a href="{{ route('home') }}"
                   class="font-freeman text-2xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 {{ request()->routeIs('home') ? 'underline underline-offset-8' : '' }}">
                    Beranda
                </a>
            </li>
            <li>
                <a href="{{ route('about') }}"
                   class="font-freeman text-2xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 {{ request()->routeIs('about') ? 'underline underline-offset-8' : '' }}">
                    Tentang
                </a>
            </li>
            <li>
                <a href="{{ route('zona-belajar') }}"
                   class="font-freeman text-2xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 {{ request()->routeIs('zona-belajar') ? 'underline underline-offset-8' : '' }}">
                    Zona Belajar
                </a>
            </li>
        </ul>

        {{-- Hamburger button (mobile only) --}}
        <button id="hamburger" class="md:hidden flex flex-col gap-1.5 p-2" onclick="toggleMobileMenu()">
            <span class="block w-7 h-0.5 bg-gray-800 transition-all"></span>
            <span class="block w-7 h-0.5 bg-gray-800 transition-all"></span>
            <span class="block w-7 h-0.5 bg-gray-800 transition-all"></span>
        </button>

    </nav>

    {{-- Mobile menu --}}
    <div id="mobile-menu" class="hidden md:hidden flex-col px-6 pb-6 gap-5 border-t border-gray-100">
        <a href="{{ route('home') }}"
           class="font-freeman text-xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 block pt-5 {{ request()->routeIs('home') ? 'underline underline-offset-8' : '' }}">
            Beranda
        </a>
        <a href="{{ route('about') }}"
           class="font-freeman text-xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 block {{ request()->routeIs('about') ? 'underline underline-offset-8' : '' }}">
            Tentang
        </a>
        <a href="{{ route('zona-belajar') }}"
           class="font-freeman text-xl font-bold uppercase tracking-wider text-[#27AEEF] hover:opacity-80 block {{ request()->routeIs('zona-belajar') ? 'underline underline-offset-8' : '' }}">
            Zona Belajar
        </a>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
            menu.classList.toggle('flex');
        }
    </script>

</header>
