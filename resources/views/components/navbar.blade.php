<header class="w-full bg-white shadow relative z-50">
    <nav class="flex items-baseline justify-between px-6 md:px-12 lg:px-20 py-6">
        <a href="{{ route('home') }}" class="font-fredoka text-3xl text-black md:text-4xl">
            Neura B.
        </a>

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
    </nav>
</header>