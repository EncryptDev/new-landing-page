<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Encrypt Digital Solution</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/a627a75623.js" crossorigin="anonymous"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        .swiper {
            width: 100%;
            height: 100%;
        }

        .swiper-slide2 {
            display: flex;
            justify-content: center;
            align-items: center;
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
                <p class="mt-5 text-base font-normal text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Labore, repellat! Veniam quisquam, consectetur dicta sequi autem quasi laboriosam vero
                    dolores.</p>

                <!-- Button Contact -->
                <p class="mt-10 text-xs font-semibold text-black">Hubungi Kami Untuk Konsultasi Secara Gratis</p>
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
                <img src="{{ asset('images/hero-img.png') }}" class="h-auto w-4xl">
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
        <p class="max-w-xl mx-auto mt-5 font-thin text-center text-white">Lorem ipsum dolor sit amet consectetur
            adipisicing elit. Consequatur pariatur ullam eius laboriosam inventore qui dolores iusto magni iste totam.
        </p>

        <div class="flex justify-center mt-12">
            <button class="px-4 py-2 text-white bg-blue-600 rounded-sm hover:bg-blue-700">Hubungi Kami</button>
        </div>

        <!-- Card Area -->
        <div class="grid justify-center max-w-6xl grid-cols-2 gap-4 mx-auto mt-10 lg:mt-20 lg:flex lg:gap-6">

            <div class="w-full text-center bg-white rounded-md shadow-2xl lg:max-w-sm shadow-sky-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="https://eosteknologi.com/wp-content/uploads/2020/08/Rekomendasi-Konsultan-IT-di-Jakarta-1200x850.jpg"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md min-h-40">
                    <h1 class="text-base font-bold text-black lg:font-black lg:text-2xl">IT Consultation</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. </p>
                </div>
            </div>
            <div class="w-full text-center shadow-2xl lg:max-w-sm shadow-amber-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRepoJ-iIVAQDQbBbp__qmmYPPmm84a2wO2pg&s"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md min-h-40">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">Software Development</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. </p>
                </div>
            </div>
            <div class="w-full text-center shadow-2xl lg:max-w-sm shadow-violet-400">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ38mhdTgQ41qfSSlhBSE1sBCbUDaq7BOcsZg&s"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md min-h-40">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">Website Development</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. </p>
                </div>
            </div>
            <div class="w-full h-full text-center bg-white rounded-md shadow-2xl lg:max-w-sm shadow-emerald-300">
                <img class="object-cover w-full h-40 max-w-md rounded-t-md"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSlKb4A0XkFvyBcr4PgL6D6T4JMEM_NzQhIJiBaxa-vGexwWSv79dYYzEIh53TzL29fS3g&usqp=CAU"
                    alt="">
                <div class="p-2 bg-white lg:p-6 rounded-b-md min-h-40">
                    <h1 class="text-base font-bold text-black lg:text-2xl lg:font-black">IoT</h1>
                    <p class="mt-2 text-sm font-normal text-black lg:text-base">Lorem, ipsum dolor sit amet consectetur
                        adipisicing
                        elit. </p>
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
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Training Penggunaan
                        Software</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Maintenance</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Integration</p>
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
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>SEO</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Desain Menarik</p>
                </div>
                <div class="px-2 py-3 text-black bg-gray-200 rounded-sm">
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Ringan dan Cepat</p>
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
                    <p class="font-semibold text-black"><i class="fa-solid fa-video me-2"></i>Harga Bersaing</p>
                </div>
            </div>
            <div class="max-w-6xl mx-auto mt-12 shadow-xl">
                <img class="w-full h-auto rounded-md" src="{{ asset('images/iot.jpg') }}" alt="IT Consult">
            </div>
        </div>
        <!-- End of Internet Of Things -->

    </section>

    <!-- Recent Project -->
    <section class="py-10 lg:py-20 bg-gradient-to-l from-blue-500 to-emerald-400">
        <div class="max-w-6xl mx-auto">
            <h1 class="text-3xl font-black text-center text-white lg:text-5xl">Saksikanlah Beberapa Project Yang Kami
                Kerjakan</h1>

            <!-- Project Card -->

            <div wire:ignore class="max-w-6xl mt-12 swiper mySwiper">
                <div class="mx-auto swiper-wrapper">
                    <div class="swiper-slide swiper-slide2">
                        <div class="relative">
                            <img class=" object-cover w-[20rem] h-[22rem] rounded-xl"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWxBx2cYdRyhhfJlp1eHSTrTAM5xAkV0rlHQ&s"
                                alt="">
                            <div
                                class="absolute inset-0 z-10 flex flex-col justify-end px-6 pb-6 w-[20rem] bg-black/50 rounded-xl">
                                <p class="text-2xl font-bold text-white">Project Title</p>
                                <p class="text-white ">Sort Description of the project in here</p>
                                <a href="" class="mt-3 font-semibold text-white underline">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="relative">
                            <img class=" object-cover w-[20rem] h-[22rem] rounded-xl"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWxBx2cYdRyhhfJlp1eHSTrTAM5xAkV0rlHQ&s"
                                alt="">
                            <div
                                class="absolute inset-0 z-10 flex flex-col justify-end px-6 pb-6 w-[20rem] bg-black/50 rounded-xl">
                                <p class="text-2xl font-bold text-white">Project Title</p>
                                <p class="text-white ">Sort Description of the project in here</p>
                                <a href="" class="mt-3 font-semibold text-white underline">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="relative">
                            <img class=" object-cover w-[20rem] h-[22rem] rounded-xl"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWxBx2cYdRyhhfJlp1eHSTrTAM5xAkV0rlHQ&s"
                                alt="">
                            <div
                                class="absolute inset-0 z-10 flex flex-col justify-end px-6 pb-6 w-[20rem] bg-black/50 rounded-xl">
                                <p class="text-2xl font-bold text-white">Project Title</p>
                                <p class="text-white ">Sort Description of the project in here</p>
                                <a href="" class="mt-3 font-semibold text-white underline">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide swiper-slide2">
                        <div class="relative">
                            <img class=" object-cover w-[20rem] h-[22rem] rounded-xl"
                                src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTWxBx2cYdRyhhfJlp1eHSTrTAM5xAkV0rlHQ&s"
                                alt="">
                            <div
                                class="absolute inset-0 z-10 flex flex-col justify-end px-6 pb-6 w-[20rem] bg-black/50 rounded-xl">
                                <p class="text-2xl font-bold text-white">Project Title</p>
                                <p class="text-white ">Sort Description of the project in here</p>
                                <a href="" class="mt-3 font-semibold text-white underline">Selengkapnya</a>
                            </div>
                        </div>
                    </div>


                </div>
                {{-- <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div> --}}
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>
    <!-- End Of Reccent Project -->

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
            <div class="flex flex-wrap justify-center gap-2 mt-12 lg:gap-4 lg:flex-nowrap">
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
                        <p class="text-xs font-light text-gray-600 lg:text-sm">UI/UX Designer</p>
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
                        src="{{ asset('images/azas.jpg') }}" alt="Team Profile">
                    <div
                        class="absolute bottom-2.5 w-full px-4 py-2 mx-3 bg-white/90 max-w-40 lg:max-w-48 me-12 rounded-xl flex flex-col items-center">
                        <p class="text-base font-semibold text-black lg:text-lg">Azas Nur</p>
                        <p class="text-xs font-light text-gray-600 lg:text-sm">Head Marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Section -->

    <!-- Testimonials Section -->
    <section class="py-20 bg-bgsecondary">
        <p class="text-base font-semibold text-center text-indigo-500">Testimonials</p>
        <h1 class="mt-4 font-bold text-center text-gray-800 text-4xl/tight">Kami Peduli Dengan Kepuasan Pelanggan Kami
        </h1>
        <div class="max-w-6xl mx-auto mt-12">

            <div wire:ignore class="max-w-6xl px-20 mt-12 swiper mySwiper2">
                <div class="mx-auto swiper-wrapper">
                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-center mx-auto bg-white rounded-lg shadow-2xl lg:gap-6 w-sm lg:max-w-sm lg:min-w-lg lg:flex-row pe-2">
                            <img class="object-cover lg:rounded-l-lg w-sm h-44 lg:rounded-r-2xl"
                                src="{{ asset('images/dugi.jpg') }}" alt="Comment">
                            <div class="py-2 text-center lg:text-left">
                                <p class="text-lg font-semibold text-black underline lg:text-base">Dugi Mulio</p>
                                <p class="text-sm font-light text-gray-600 ">PT Semeru Abadi Jaya</p>
                                <p class="mt-2 text-sm text-black lg:mt-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas eos natus
                                    quo esse nobis quibusdam eligendi quos omnis quas.
                                </p>
                                <!-- Star Rating -->
                                <div class="flex items-center justify-center mt-4 lg:justify-normal">
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-center mx-auto bg-white rounded-lg shadow-2xl lg:gap-6 w-sm lg:max-w-sm lg:min-w-lg lg:flex-row pe-2">
                            <img class="object-cover lg:rounded-l-lg w-sm h-44 lg:rounded-r-2xl"
                                src="{{ asset('images/dugi.jpg') }}" alt="Comment">
                            <div class="py-2 text-center lg:text-left">
                                <p class="text-lg font-semibold text-black underline lg:text-base">Dugi Mulio</p>
                                <p class="text-sm font-light text-gray-600 ">PT Semeru Abadi Jaya</p>
                                <p class="mt-2 text-sm text-black lg:mt-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas eos natus
                                    quo esse nobis quibusdam eligendi quos omnis quas.
                                </p>
                                <!-- Star Rating -->
                                <div class="flex items-center justify-center mt-4 lg:justify-normal">
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="swiper-slide">
                        <div
                            class="flex flex-col items-center mx-auto bg-white rounded-lg shadow-2xl lg:gap-6 w-sm lg:max-w-sm lg:min-w-lg lg:flex-row pe-2">
                            <img class="object-cover lg:rounded-l-lg w-sm h-44 lg:rounded-r-2xl"
                                src="{{ asset('images/dugi.jpg') }}" alt="Comment">
                            <div class="py-2 text-center lg:text-left">
                                <p class="text-lg font-semibold text-black underline lg:text-base">Dugi Mulio</p>
                                <p class="text-sm font-light text-gray-600 ">PT Semeru Abadi Jaya</p>
                                <p class="mt-2 text-sm text-black lg:mt-0">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus voluptas eos natus
                                    quo esse nobis quibusdam eligendi quos omnis quas.
                                </p>
                                <!-- Star Rating -->
                                <div class="flex items-center justify-center mt-4 lg:justify-normal">
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                    <svg class="w-4 h-4 text-gray-300 ms-1" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path
                                            d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>

        </div>



    </section>
    <!-- End of Testimonials Section -->

    <footer class="py-10 text-gray-300 bg-gray-900">
        <div class="container px-6 mx-auto md:px-12">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-4">

                <!-- Kolom 1: Logo & Deskripsi -->
                <div>
                    <h2 class="text-2xl font-bold text-white">BrandName</h2>
                    <p class="mt-2 text-sm text-gray-400">
                        Solusi terbaik untuk kebutuhan digital Anda. Kami menghadirkan inovasi dalam setiap layanan.
                    </p>
                </div>

                <!-- Kolom 2: Navigasi -->
                <div>
                    <h3 class="text-lg font-semibold text-white">Navigasi</h3>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="transition hover:text-white">Beranda</a></li>
                        <li><a href="#" class="transition hover:text-white">Tentang Kami</a></li>
                        <li><a href="#" class="transition hover:text-white">Layanan</a></li>
                        <li><a href="#" class="transition hover:text-white">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kolom 3: Media Sosial -->
                <div>
                    <h3 class="text-lg font-semibold text-white">Ikuti Kami</h3>
                    <div class="flex mt-3 space-x-4">
                        <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-facebook"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-instagram"></i>
                        </a>
                        <a href="#" class="text-gray-400 transition hover:text-white">
                            <i class="text-xl fab fa-linkedin"></i>
                        </a>
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
                © 2025 BrandName. All Rights Reserved.
            </div>
        </div>
    </footer>



    <script src="../../node_modules/fowbite/dist/flowbite.min.js"></script>
</body>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        spaceBetween: 30,
        slidesPerView: 1,
        centeredSlides: true,
        centeredSlidesBounds: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
            }
        }
    });
    var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        centeredSlides: true,
        centeredSlidesBounds: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            1024: {
                slidesPerView: 2,
            }
        }
    });
</script>

</html>
