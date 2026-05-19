<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang - Neura Bloom</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-white font-sans text-gray-800">

    <!-- Navbar -->
    @extends('layouts.app')
    @section('content')


    <!-- Hero Section -->
    <section class="relative px-10 py-16 flex flex-col md:flex-row items-center">
        <div class="md:w-1/2 z-10">
            <img src="{{ asset('img/about/fireworks.png') }}" class="absolute left-10 -bottom-24 w-32 z-30" alt="Icon">
            <img src="{{ asset('img/about/balloon.png') }}" class="w-32 mb-6 mt-12" alt="Icon">
            <h1 class="text-6xl font-black text-sky-400 mb-4">Tentang</h1>
            <p class="text-lg leading-relaxed max-w-md">
                Di Neura Bloom, kami membantu anak autisme menggali potensi mereka melalui metode belajar visual dan ramah sensorik yang unik.
            </p>
        </div>
        <div class="md:w-1/2 relative">
            <img src="{{ asset('img/about/pencil.png') }}" class="w-full" alt="Anak-anak">
        </div>
    </section>

    <!-- Apa yang Kami Lakukan Section -->
    <section class="bg-white px-10 py-12 text-center">
        <h2 class="text-4xl font-bold text-sky-400 mb-2">Apa yang Kami Lakukan?</h2>
        <p class="text-gray-600 mb-10 font-medium">tiga pilar utama pengembangan anak yang kami kemas dalam Zona Belajar</p>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Card 1 -->
            <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
                <img src="{{ asset('img/about/social-skill.png') }}" class="h-40 mb-4" alt="Social Skill">
                <h3 class="font-black text-xl mb-2">SOCIAL SKILL</h3>
                <p class="text-xs leading-tight">Membantu anak memahami interaksi dunia di sekitar mereka melalui cerita visual dan panduan langkah demi langkah.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
                <img src="{{ asset('img/about/life-skill.png') }}" class="h-40 mb-4" alt="Life Skill">
                <h3 class="font-black text-xl mb-2">LIFE SKILL</h3>
                <p class="text-xs leading-tight">Memberikan alat bagi anak untuk mengenali, menamai, dan meregulasi emosi mereka dengan cara yang tenang.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-[#CBBBE8] p-8 rounded-2xl flex flex-col items-center">
                <img src="{{ asset('img/about/emotional-skill.png') }}" class="h-40 mb-4" alt="Emotional Skill">
                <h3 class="font-black text-xl mb-2">EMOTIONAL SKILL</h3>
                <p class="text-xs leading-tight">Melatih kemandirian dalam aktivitas sehari-hari, mulai dari merawat diri hingga tanggung jawab sederhana di rumah.</p>
            </div>
        </div>
    </section>

    <!-- Mengapa Memilih Kami Section -->
    <section class="px-10 py-12 text-center">
        <h2 class="text-4xl font-bold text-[#FECFF3] mb-8 italic">Mengapa memilih kami?</h2>
        <div class="bg-[#FECFF3] rounded-3xl p-10 flex justify-around items-center flex-wrap gap-6">
            <div class="flex flex-col items-center">
                <div class="bg-white p-6 rounded-full shadow-md mb-4">
                    <img src="{{ asset('img/about/icon-sensory.png') }}" class="w-12" alt="Sensory">
                </div>
                <p class="text-[10px] font-bold uppercase tracking-wider">Desain Ramah Sensorik</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-white p-6 rounded-full shadow-md mb-4">
                    <img src="{{ asset('img/about/icon-visual.png') }}" class="w-12" alt="Visual">
                </div>
                <p class="text-[10px] font-bold uppercase tracking-wider">Berbasis Visual</p>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-white p-6 rounded-full shadow-md mb-4">
                    <img src="{{ asset('img/about/icon-support.png') }}" class="w-12" alt="Support">
                </div>
                <p class="text-[10px] font-bold uppercase tracking-wider">Dukungan Orang Tua</p>
            </div>
        </div>
    </section>

    <!-- Kisah di Balik Section -->
    <section class="px-10 py-16">
        <h2 class="text-4xl font-bold text-sky-400 mb-10 text-center">Kisah di balik Neura Bloom</h2>
        <div class="flex flex-col md:flex-row gap-8 items-start mb-10">
            <img src="{{ asset('img/about/team.jpg') }}" class="md:w-1/2 rounded-2xl shadow-lg" alt="Tim">
            <p class="md:w-1/2 text-sm leading-relaxed text-gray-700">
                Dimulai dari ruang keluarga, kami melihat betapa sulitnya menemukan materi belajar yang tidak hanya edukatif tetapi juga menyenangkan bagi anak autisme. Kami menyadari bahwa setiap anak memiliki cara unik dalam memproses informasi, namun dunia pendidikan seringkali kurang menyediakan ruang bagi perbedaan sensorik 
                tersebut. Oleh karena itu, kami membangun platform ini untuk memastikan tidak ada lagi orang tua yang merasa berjuang sendirian dalam mencari media belajar yang tepat. Neura Bloom lahir sebagai jembatan yang menghubungkan potensi luar biasa setiap anak dengan metode yang menenangkan dan mudah dipahami.
            </p>
        </div>
        <p class="text-sm leading-relaxed text-gray-700">
            Misi kami sederhana namun mendalam memastikan bahwa tidak ada lagi orang tua yang merasa berjuang sendirian di tengah kebuntuan, dan tidak ada lagi anak yang merasa dunia ini terlalu bising untuk mereka pahami. Kami percaya bahwa visual yang bersih, warna yang ramah sensorik, dan alur kognitif yang sederhana bukan sekadar desain, 
            melainkan kebutuhan mendasar bagi anak-anak kami. Di sini, setiap kemajuan sekecil apa pun itu isinya sebuah kemenangan besar yang layak kita rayakan bersama. Melalui Neura Bloom, kami berkomitmen untuk menciptakan ekosistem belajar yang merangkul keberagaman spektrum autisme dengan penuh empati dan inovasi digital.
        </p>
    </section>

    <!-- Footer -->
   @endsection