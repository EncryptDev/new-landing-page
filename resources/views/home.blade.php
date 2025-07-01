<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypt Digital Solution | Software House Terdepan di Indonesia</title>
    <meta name="description"
        content="Encrypt Digital Solution adalah software house terpercaya yang menyediakan solusi digital inovatif untuk bisnis Anda. Dapatkan aplikasi web, mobile, dan sistem enterprise terbaik.">
    <meta name="keywords"
        content="software house, web development, mobile app, sistem enterprise, digital solution, encrypt digital">
    <meta name="author" content="Encrypt Digital Solution">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Encrypt Digital Solution | Software House Terdepan">
    <meta property="og:description" content="Solusi digital terpercaya untuk transformasi bisnis Anda">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://encryptdigital.com">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Encrypt Digital Solution">
    <meta name="twitter:description" content="Software house terpercaya untuk solusi digital bisnis">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://encryptdigital.com">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('/images/icon.png') }}">

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "Encrypt Digital Solution",
        "description": "Software house terpercaya yang menyediakan solusi digital inovatif",
        "url": "https://encryptdigital.com",
        "logo": "https://encryptdigital.com/logo.png",
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+62 851 7110 6025",
            "contactType": "customer service"
        }
    }
    </script>



    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a627a75623.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="{{ asset('css/splide.min.css') }}">
    <style>
        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }

            50% {
                background-position: 100% 50%;
            }

            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }
        }

        @keyframes pulse-slow {

            0%,
            100% {
                opacity: 0.4;
            }

            50% {
                opacity: 0.8;
            }
        }

        .gradient-bg {
            background: linear-gradient(-45deg, #667eea, #764ba2, #f093fb, #f5576c, #4facfe, #00f2fe);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }

        .pulse-slow {
            animation: pulse-slow 4s ease-in-out infinite;
        }

        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .text-shadow {
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>

<body>
    {{-- <x-home.navbar /> --}}

    <!-- Hero Section -->
    <section class="pb-20 bg-bgsecondary">
        <div class="flex justify-center max-w-6xl gap-4 mx-auto pt-28 lg:pt-40 ">
            <div class="w-full px-6 max-w-none lg:px-0">
                <h1 class="font-bold text-3xl/snug lg:text-5xl/normal ">Buat Software Untuk Optimasi Bisnis Anda, <span
                        class="px-4 py-2 text-white bg-yellow-400">Dalam Sekejap</span></h1>
                <p class="mt-5 text-base font-normal text-gray-500">Kami bantu Anda membangun software custom yang
                    sesuai kebutuhan bisnis, tanpa proses rumit dan dalam waktu yang jauh lebih singkat.</p>

                <!-- Button Contact -->
                <p class="mt-10 mb-4 text-xs font-semibold text-black">Hubungi Kami Untuk Konsultasi Secara Gratis</p>
                <div class="flex ">
                    <input
                        class="tracking-tight  bg-white max-w-sm border-[0.2rem] w-full rounded-l-md  border-blue-500"
                        type="text" placeholder="Enter Your Email...">
                    <button
                        class="px-4 py-2 text-white bg-blue-500 rounded-r-md hover:bg-blue-600 hover:cursor-pointer hover:scale-110">Free
                        Consult</button>
                </div>
            </div>

            <div class="hidden lg:block">
                <img src="{{ asset('images/final hero.png') }}" class="h-auto w-4xl">
            </div>
        </div>

        <div class="mt-8">
            <p class="mx-auto text-center text-gray-400">Beberapa Client Puas Menggunakan Jasa Kami</p>

            <div class="flex flex-wrap items-center justify-center max-w-6xl gap-8 mx-auto mt-10">
                <img class="w-1/5 h-fit lg:w-44 grayscale hover:grayscale-0" src="{{ asset('images/yazaki.png') }}"
                    alt="Logo Yazaki">
                <img class="w-1/5 lg:w-20 h-fit grayscale hover:grayscale-0" src="{{ asset('images/smkn1.png') }}"
                    alt="Logo SMKN 1">
                <img class="w-1/5 lg:w-20 h-fit grayscale hover:grayscale-0" src="{{ asset('images/smpn4.png') }}"
                    alt="Logo SMPN 4">
                <p class="text-base font-black text-black lg:text-lg hover:text-green-400">TAREMAKMUR</p>
                <img class="w-1/5 h-fit lg:w-44 grayscale hover:grayscale-0" src="{{ asset('images/naima.png') }}"
                    alt="Logo Naima">
                <img class="w-1/5 lg:w-20 h-fit grayscale hover:grayscale-0"
                    src="{{ asset('images/janji-kembali.png') }}" alt="Logo Janji Kembali">
            </div>
        </div>

    </section>

    <!-- Services Section -->
    <section class="px-6 py-10 lg:py-20 bg-bgblack lg:px-0">
        <div class="text-white text-3xl/normal lg:text-5xl/snug max-w-[40rem] font-black text-center mx-auto"><span
                class="underline">Mulai
                Coba</span> Dengan Salah Satu <span class="py-1 text-black bg-white">Layanan Kami</span></div>
        <p class="max-w-xl mx-auto mt-5 font-thin text-center text-white">Mulailah dari layanan yang paling cocok dengan
            kebutuhan Anda saat ini, dan biarkan teknologi kami bekerja mempermudah langkah Anda berikutnya.
        </p>

        <div class="flex justify-center mt-12">
            <button class="px-4 py-2 text-white bg-blue-600 rounded-sm hover:bg-blue-700">Hubungi Kami</button>
        </div>

        <!-- Card Area -->
        <div class="grid justify-center max-w-6xl grid-cols-2 gap-4 mx-auto mt-10 lg:mt-20 lg:flex lg:gap-6">

            <div class="w-full text-center bg-white rounded-md shadow-2xl lg:max-w-sm shadow-sky-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md" src="{{ asset('images/card-consult.png') }}"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md h-48">
                    <h1 class="text-base font-bold text-black lg:font-black lg:text-2xl">IT Consultation</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Bantu bisnis Anda menemukan solusi IT
                        yang tepat dan efisien.</p>
                </div>
            </div>
            <div class="w-full bg-white rounded-md text-center shadow-2xl lg:max-w-sm shadow-amber-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="{{ asset('images/card-software.jpeg') }}" alt="">
                <div class="p-2  bg-white lg:p-6 rounded-b-md h-48">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">Software Development</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Bangun aplikasi custom sesuai kebutuhan
                        bisnis Anda. </p>
                </div>
            </div>
            <div class="w-full bg-white rounded-md text-center shadow-2xl lg:max-w-sm shadow-violet-400">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="{{ asset('images/card-website.jpeg') }}" alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md h-48">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">Website Development</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Buat website profesional untuk
                        meningkatkan citra dan kepercayaan.</p>
                </div>
            </div>
            <div class="w-full h-full text-center bg-white rounded-md shadow-2xl lg:max-w-sm shadow-emerald-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md" src="{{ asset('images/card-iot.jpeg') }}"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md h-48">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">IoT</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Otomatisasi bisnis Anda dengan
                        perangkat
                        pintar dan data real-time. </p>
                </div>
            </div>
        </div>

    </section>

    <!-- Service Details -->
    <section class="flex flex-col justify-center px-6 py-20 bg-white lg:px-0" x-data="{ services: 'consultation' }">
        <!-- Button category -->
        <div class="grid justify-center grid-cols-2 gap-4 lg:flex lg:gap-8 lg:flex-nowrap">
            <button @click="services = 'consultation'"
                :class="services === 'consultation' ? 'bg-blue-600 text-white shadow-2xl shadow-sky-600' :
                    'text-blue-600 bg-sky-100'"
                class="px-4 py-3 text-lg font-semibold transition ease-in-out rounded-lg hover:cursor-pointer hover:scale-125">
                <i class="fa-solid fa-chalkboard-user me-2"></i>
                IT Consultation</button>
            <button @click="services = 'software'"
                :class="services === 'software' ? 'bg-amber-600 text-white shadow-2xl shadow-amber-300' :
                    'text-amber-600 bg-amber-100'"
                class="px-4 py-3 text-lg font-semibold transition ease-in-out rounded-lg text-amber-600 bg-amber-100 hover:cursor-pointer hover:scale-125">
                <i class="fa-solid fa-laptop-code me-2"></i>
                Software Development</button>
            <button @click="services = 'websites'"
                :class="services === 'websites' ? 'bg-violet-600 text-white shadow-2xl shadow-purple-400' :
                    'text-violet-600 bg-violet-100'"
                class="px-4 py-3 text-lg font-semibold transition ease-in-out rounded-lg text-violet-600 bg-violet-100 hover:cursor-pointer hover:scale-125">
                <i class="fa-brands fa-firefox me-2"></i>
                Website Development</button>
            <button @click="services = 'iot'"
                :class="services === 'iot' ? 'bg-emerald-600 text-white shadow-2xl shadow-green-300' :
                    'text-emerald-600 bg-emerald-100'"
                class="px-4 py-3 text-lg font-semibold transition ease-in-out rounded-lg text-emerald-600 bg-emerald-100 hover:cursor-pointer hover:scale-125">
                <i class="fa-solid fa-robot me-2"></i>
                Internet of Things</button>
        </div>

        <!-- Detail Content -->
        <!--IT Consultation -->
        <div x-show="services === 'consultation'">
            <h2 class="mt-10 text-4xl font-black text-center text-black">Diskusikan Kebutuhan IT Kamu Dengan Kami</h2>

            <p class="mt-8 text-base text-center text-black">Diskusikan permasalahan IT pada bisnis anda, mulai dari
                kebutuhan system, proses digitalisasi, perawatan system, dan masih banyak lagi</p>

            <!-- Top Featrures -->
            <div class="flex flex-wrap justify-center gap-3 mt-8 lg:flex-nowrap">
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-clock me-2"></i>Waktu Flexible</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-money-bill me-2"></i>Mulai dengan gratis
                    </p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Online & Offline</p>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 shadow-xl">
                <img class="w-full h-auto rounded-md" src="{{ asset('images/it consult.jpg') }}" alt="IT Consult">
            </div>
        </div>
        <!-- End IT Consultation -->

        <!-- Software Development -->
        <div x-show="services === 'software'">
            <h2 class="mt-10 text-4xl font-black text-center text-black">Aplikasikan Optimasi Bisnis Anda Dengan
                <br />Software Custom Dari Kami
            </h2>

            <p class="mt-8 text-base text-center text-black">Ingin mengembangkan proses bisnis anda?. Ingin membuang
                waktu manual yang lama?. Tenang kami bisa membuat <br />software custom sesuai dengan kebutuhan unik di
                bisnis anda</p>

            <!-- Top Featrures -->
            <div class="flex flex-wrap justify-center gap-3 mt-8 lg:flex-nowrap">
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-clock me-2"></i>Teknologi Terbaru</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-money-bill me-2"></i>Custom Software
                    </p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Dokumentasi</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-person-chalkboard me-2"></i>Training
                        Penggunaan
                        Software</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-wrench me-2"></i></i>Maintenance</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-link me-2"></i>Integration</p>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 shadow-xl">
                <img class="w-full h-auto rounded-md" src="{{ asset('images/software.jpg') }}" alt="IT Consult">
            </div>
        </div>
        <!-- End Software Development -->

        <!-- Website Development -->
        <div x-show="services === 'websites'">
            <h2 class="mt-10 text-4xl font-black text-center text-black">Perluas Pasar Anda Dengan Website</h2>

            <p class="mt-8 text-base text-center text-black">Gapai lebih banyak client potensial. Perkenalkan layanan
                anda agar orang lain lebih mudah mengetahui bisnis anda</p>

            <!-- Top Featrures -->
            <div class="flex flex-wrap justify-center gap-3 mt-8 lg:flex-nowrap">
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-clock me-2"></i>Teknologi Terbaru</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-money-bill me-2"></i>Lebih Murah
                    </p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-magnifying-glass me-2"></i>SEO</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-pen-nib me-2"></i>Desain Menarik</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-feather me-2"></i>Ringan dan Cepat</p>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 shadow-xl">
                <img class="w-full h-auto rounded-md" src="{{ asset('images/websites.jpg') }}" alt="IT Consult">
            </div>
        </div>
        <!-- End Website -->

        <!-- Internet Of Things -->
        <div x-show="services === 'iot'">
            <h2 class="mt-10 text-4xl font-black text-center text-black">Integrasikan Network Dengan Perangkat Anda
            </h2>

            <p class="mt-8 text-base text-center text-black">Tingkatkan produktivitas dengan membuat otomasisasi dengan
                menggunakan perangkat pintar</p>

            <!-- Top Featrures -->
            <div class="flex flex-wrap justify-center gap-3 mt-8 lg:flex-nowrap">
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-clock me-2"></i>Teknologi Terbaru</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-money-bill me-2"></i>Maintenance
                    </p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Dokumentasi</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-money-bill me-2"></i>Harga Bersaing</p>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 shadow-xl">
                <img class="w-full h-auto rounded-md" src="{{ asset('images/iot.jpg') }}" alt="IT Consult">
            </div>
        </div>
        <!-- End of Internet Of Things -->

    </section>


    <!-- End Of Reccent Project -->

    <!-- Projects Section -->
    <section id="projects" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Project Portfolio
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Berbagai project sukses yang telah kami kerjakan untuk klien dari berbagai industri
                </p>
            </div>
            <!-- Project Card -->
            <div class="mx-auto splide">
                <div class="splide__track">
                    <div class="splide__list">
                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <img src="{{ asset('/images/porto-taremakmur.png') }}" class="h-48 object-cover" />
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Management Sales</h3>
                                    <p class="text-gray-300 mb-4">Sistem Mobile dan Web digunakan untuk manajemen
                                        transaksi</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-red-600 text-xs rounded-full text-white">Laravel</span>
                                        <span
                                            class="px-3 py-1 bg-green-600 text-xs rounded-full text-white">Kotlin</span>
                                        <span
                                            class="px-3 py-1 bg-purple-600 text-xs rounded-full text-white">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <div
                                    class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                    <span class="text-2xl font-bold text-white">AI</span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">AI Self Learning</h3>
                                    <p class="text-gray-300 mb-4">Sejenis chatbot lokal offline untuk membantu proses
                                        tanya jawab</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-blue-600 text-xs rounded-full text-white">Next.Js</span>
                                        <span class="px-3 py-1 bg-green-600 text-xs rounded-full text-white">Fast
                                            Api</span>
                                        <span class="px-3 py-1 bg-purple-600 text-xs rounded-full text-white">Postgre
                                            SQL</span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <img src="{{ asset('/images/porto-naima.png') }}" class="h-48 object-cover" />
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Landing Page</h3>
                                    <p class="text-gray-300 mb-4">Landing Page untuk sebuah company dengan Blog, Jobs,
                                        dan lainnya</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-red-600 text-xs rounded-full text-white">Laravel</span>
                                        <span
                                            class="px-3 py-1 bg-green-600 text-xs rounded-full text-white">FrankenPhp</span>
                                        <span
                                            class="px-3 py-1 bg-purple-600 text-xs rounded-full text-white">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <div
                                    class="h-48 bg-gradient-to-br from-blue-500 to-purple-600 flex items-center justify-center">
                                    <span class="text-2xl font-bold text-white">IoT</span>
                                </div>
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Auto Scan</h3>
                                    <p class="text-gray-300 mb-4">Aplikasi scan otomatis barcode yang sedang berjalan
                                        untuk stock system</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-blue-600 text-xs rounded-full text-white">Next.js</span>
                                        <span
                                            class="px-3 py-1 bg-green-600 text-xs rounded-full text-white">MySql</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <img src="{{ asset('/images/porto-taremakmur.png') }}" class="h-48 object-cover" />
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Management Sales</h3>
                                    <p class="text-gray-300 mb-4">Sistem Mobile dan Web digunakan untuk manajemen
                                        transaksi</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-red-600 text-xs rounded-full text-white">Laravel</span>
                                        <span
                                            class="px-3 py-1 bg-green-600 text-xs rounded-full text-white">Kotlin</span>
                                        <span
                                            class="px-3 py-1 bg-purple-600 text-xs rounded-full text-white">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="splide__slide px-4">
                            <div
                                class="glass-effect rounded-lg overflow-hidden hover:transform hover:scale-105 transition-all duration-300">
                                <img src="{{ asset('/images/porto-epo.png') }}" class="h-48 object-cover" />
                                <div class="p-6">
                                    <h3 class="text-xl font-semibold mb-2 text-white">Electronics PO</h3>
                                    <p class="text-gray-300 mb-4">Sistem untuk e-sign dan kirim purchase order via
                                        email ke supplier secara otomatis</p>
                                    <div class="flex flex-wrap gap-2">
                                        <span
                                            class="px-3 py-1 bg-red-600 text-xs rounded-full text-white">Laravel</span>
                                        <span
                                            class="px-3 py-1 bg-pink-600 text-xs rounded-full text-white">Livewire</span>
                                        <span
                                            class="px-3 py-1 bg-purple-600 text-xs rounded-full text-white">MySQL</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Happy Clients Section -->
    <section id="clients" class="py-20 bg-gray-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Klien Bahagia
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Testimoni dari klien yang telah merasakan manfaat solusi digital kami
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="p-6 glass-effect rounded-lg">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-lg font-bold">ID</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Indra</h4>
                            <p class="text-sm text-gray-400">Taremakmur</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"Encrypt Digital Solution memberikan solusi yang sempurna untuk
                        digitalisasi bisnis kami. Highly recommended!"</p>
                    <div class="flex mt-4">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>

                <div class="p-6 glass-effect rounded-lg">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-green-500 to-blue-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-lg font-bold">KH</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Khoiron</h4>
                            <p class="text-sm text-gray-400">Janji Kembali</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"Tim yang sangat profesional dan hasil yang memuaskan."</p>
                    <div class="flex mt-4">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>

                <div class="p-6 glass-effect rounded-lg">
                    <div class="flex items-center mb-4">
                        <div
                            class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-600 rounded-full flex items-center justify-center mr-4">
                            <span class="text-lg font-bold">DG</span>
                        </div>
                        <div>
                            <h4 class="font-semibold text-white">Faisal</h4>
                            <p class="text-sm text-gray-400">Naim</p>
                        </div>
                    </div>
                    <p class="text-gray-300 italic">"Kualitas code dan dokumentasi yang sangat baik. Maintenance jadi
                        lebih mudah dan sistem berjalan sangat stabil."</p>
                    <div class="flex mt-4">
                        <span class="text-yellow-400">★★★★★</span>
                    </div>
                </div>
            </div>

            <!-- Client Statistics -->
            <div class="grid md:grid-cols-4 gap-8 mt-16">
                <div class="text-center">
                    <div
                        class="text-4xl font-bold bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent mb-2">
                        50+</div>
                    <p class="text-gray-300">Project Selesai</p>
                </div>
                <div class="text-center">
                    <div
                        class="text-4xl font-bold bg-gradient-to-r from-green-400 to-blue-500 bg-clip-text text-transparent mb-2">
                        98%</div>
                    <p class="text-gray-300">Kepuasan Klien</p>
                </div>
                <div class="text-center">
                    <div
                        class="text-4xl font-bold bg-gradient-to-r from-purple-400 to-pink-500 bg-clip-text text-transparent mb-2">
                        4+</div>
                    <p class="text-gray-300">Tahun Pengalaman</p>
                </div>
                <div class="text-center">
                    <div
                        class="text-4xl font-bold bg-gradient-to-r from-yellow-400 to-orange-500 bg-clip-text text-transparent mb-2">
                        24/7</div>
                    <p class="text-gray-300">Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="py-20 bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            <div class="text-center mb-16">
                <h2
                    class="text-4xl font-bold mb-4 bg-gradient-to-r from-blue-400 to-purple-500 bg-clip-text text-transparent">
                    Perjalanan Kami
                </h2>
                <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                    Milestone penting dalam perjalanan Encrypt Digital Solution
                </p>
            </div>

            <ol class="items-center sm:flex">
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6  rounded-full ring-0  bg-blue-900 sm:ring-8 ring-gray-900 shrink-0">
                            <svg class="w-2.5 h-2.5  text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full  h-0.5 bg-gray-700"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold  text-white">Pertama Beroperasi</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none  text-gray-500">3 Maret 2021</time>
                        <p class="text-base font-normal  text-gray-400">Pertama kali dengan nama Encrypt Multimedia khusus untuk
                                    menangani percetakan dan konten Multimedia</p>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6 rounded-full ring-0  bg-blue-900 sm:ring-8 ring-gray-900 shrink-0">
                            <svg class="w-2.5 h-2.5  text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full  h-0.5 bg-gray-700"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold  text-white">Changing Focus</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none  text-gray-500">21 Januari 2022</time>
                        <p class="text-base font-normal  text-gray-400">Berganti fokus dan nama menjadi EncryptDev. Berfokus untuk
                                    melayani Solusi IT untuk Bisnis</p>
                    </div>
                </li>
                <li class="relative mb-6 sm:mb-0">
                    <div class="flex items-center">
                        <div
                            class="z-10 flex items-center justify-center w-6 h-6  rounded-full ring-0  bg-blue-900 sm:ring-8 ring-gray-900 shrink-0">
                            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                            </svg>
                        </div>
                        <div class="hidden sm:flex w-full  h-0.5 bg-gray-700"></div>
                    </div>
                    <div class="mt-3 sm:pe-8">
                        <h3 class="text-lg font-semibold  text-white">Legality</h3>
                        <time
                            class="block mb-2 text-sm font-normal leading-none  text-gray-500">12 December 2024</time>
                        <p class="text-base font-normal  text-gray-400">EncryptDev sekarang berada di bawah PT Encrypt Digital
                                    Solution. Untuk siap menjalin kerja sama lebih luas dan professional</p>
                    </div>
                </li>
            </ol>

        </div>
    </section>

    <!-- Our Team Section -->
    <section class="py-12 bg-white">
        <div class="max-w-6xl mx-auto">
            <p class="text-base font-semibold text-center text-indigo-500">Contact Us</p>
            <h1 class="mt-4 font-bold text-center text-gray-800 text-4xl/tight">Tim Kami Berpengalaman Dibidangnya</h1>
            <h6 class="mt-2 text-base font-light text-center text-gray-700">Team kami siap membantu permasalahan
                digital pada bisnis anda. Silahkan hubungi kami untuk diskusi bersama team secara langsung.</h6>
            <div class="flex justify-center mt-4">
                <button class="px-4 py-2 text-black bg-gray-100 rounded-full hover:bg-bgblack hover:text-white"><i
                        class="fa-solid fa-phone-volume me-2"></i>Book a Call</button>
            </div>
            <!-- Team Section -->
            <div class="flex flex-wrap justify-center gap-2 mt-12 lg:gap-4 ">
                <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/bayu.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Bayu Febriyono</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">Fullstack Developer</p>
                    </div>
                </div>
                <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/ragil.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Ragil Ridho</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">Frontend Developer</p>
                    </div>
                </div>
                <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/dugi.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Dugi Mulio</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">System Analys</p>
                    </div>
                </div>
                <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/iklil.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Iklil Najmi</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">Junior Developer</p>
                    </div>
                </div>
                <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/anas.png') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Pirgianas</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">UI/UX Designer</p>
                    </div>
                </div>
                <!-- Team Card -->
                {{-- <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/adishtya.jpeg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Dwi Adishtya</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">General Affair</p>
                    </div>
                </div> --}}
                {{-- <!-- Team Card -->
                <div class="relative w-44 lg:w-56 h-72">
                    <img class="object-cover w-full h-full rounded-lg grayscale hover:grayscale-0"
                        src="{{ asset('images/azas.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Azas Nur</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">Head Marketing</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- End Our Team Section -->


    <footer class="py-10 text-gray-300 bg-gray-900">
        <div class="container px-6 mx-auto md:px-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">

                <!-- Kolom 1: Logo & Deskripsi -->
                <div>
                    <h2 class="text-2xl font-bold text-white">PT Encrypt Digital Solution</h2>
                    <p class="mt-2 text-sm text-gray-400">
                        Solusi terbaik untuk kebutuhan digital Anda. Kami menghadirkan inovasi dalam setiap layanan.
                    </p>
                </div>

                <!-- Kolom 2: Navigasi -->
                <div>
                    <h3 class="text-lg font-semibold text-white">Navigasi</h3>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="transition hover:text-white">Beranda</a></li>
                        {{-- <li><a href="#" class="transition hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="transition hover:text-white">Layanan</a></li>
                        <li><a href="#" class="transition hover:text-white">Kontak</a></li> --}}
                    </ul>
                </div>

                <!-- Kolom 3: Media Sosial -->
                <div>
                    <h3 class="text-lg font-semibold text-white">Ikuti Kami</h3>
                    <div class="flex mt-3 space-x-4">
                        {{-- <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-facebook"></i>
                        </a> --}}
                        {{-- <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-twitter"></i>
                        </a> --}}
                        <a href="https://www.instagram.com/encryptdevdigital/"
                            class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-instagram"></i>
                        </a>
                        {{-- <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-linkedin"></i>
                        </a> --}}
                    </div>
                </div>

                <!-- Kolom 4: Berlangganan Newsletter -->
                <div>
                    <h3 class="text-lg font-semibold text-white">Newsletter</h3>
                    <p class="mt-2 text-sm text-gray-400">Dapatkan update terbaru langsung di email Anda.</p>
                    <form class="flex mt-4">
                        <input type="email" placeholder="Masukkan email"
                            class="w-full px-4 py-2 text-gray-300 bg-gray-800 border border-gray-700 rounded-l-md focus:outline-none">
                        <button
                            class="px-4 py-2 text-white transition bg-blue-600 rounded-r-md hover:bg-blue-700">Kirim</button>
                    </form>
                </div>

            </div>

            <!-- Copyright -->
            <div class="pt-5 mt-10 text-sm text-center text-gray-400 border-t border-gray-800">
                © 2025 EncryptDev. All Rights Reserved.
            </div>
        </div>
    </footer>



    <script src="../../node_modules/fowbite/dist/flowbite.min.js"></script>
</body>

<script src="{{ asset('js/splide.min.js') }}"></script>
<script>
    var splide = new Splide('.splide', {
        perPage: 3,
        breakpoints: {
            640: {
                perPage: 1
            }
        }
    });

    splide.mount();

    var splide2 = new Splide('#splideTesti', {
        perPage: 2,
        breakpoints: {
            640: {
                perPage: 1
            }
        }
    });

    splide2.mount();
</script>

</html>
