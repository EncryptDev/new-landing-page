<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encrypt Digital Solution | Software House Terdepan di Indonesia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a627a75623.js" crossorigin="anonymous"></script>
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.5); }
            50% { box-shadow: 0 0 40px rgba(139, 92, 246, 0.8); }
        }
        @keyframes gradient-shift {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        .gradient-bg {
            background: linear-gradient(-45deg, #0f172a, #1e293b, #312e81, #1e3a8a);
            background-size: 400% 400%;
            animation: gradient-shift 15s ease infinite;
        }
        .floating { animation: float 6s ease-in-out infinite; }
        .pulse-glow { animation: pulse-glow 3s ease-in-out infinite; }
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .text-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .hover-lift {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        .grid-pattern {
            background-image:
                linear-gradient(rgba(99, 102, 241, 0.1) 1px, transparent 1px),
                linear-gradient(90deg, rgba(99, 102, 241, 0.1) 1px, transparent 1px);
            background-size: 50px 50px;
        }
        .carousel-container {
            overflow: hidden;
            position: relative;
        }
        .carousel-track {
            display: flex;
            transition: transform 0.5s ease;
        }
        .carousel-slide {
            min-width: 100%;
            padding: 0 1rem;
        }
        @media (min-width: 768px) {
            .carousel-slide {
                min-width: 50%;
            }
        }
        @media (min-width: 1024px) {
            .carousel-slide {
                min-width: 33.333%;
            }
        }
    </style>
</head>
<body class="bg-gray-900 text-white overflow-x-hidden">

    <!-- Hero Section with Animated Background -->
    <section class="relative min-h-screen gradient-bg grid-pattern overflow-hidden">
        <!-- Floating Elements -->
        <div class="absolute top-20 left-10 w-72 h-72 bg-blue-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 floating"></div>
        <div class="absolute top-40 right-10 w-96 h-96 bg-purple-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 floating" style="animation-delay: 2s;"></div>
        <div class="absolute bottom-20 left-1/3 w-80 h-80 bg-pink-500 rounded-full mix-blend-multiply filter blur-3xl opacity-20 floating" style="animation-delay: 4s;"></div>

        <div class="relative z-10 container mx-auto px-6 pt-32 pb-20">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8">
                    <div class="inline-block glass px-4 py-2 rounded-full text-sm font-semibold text-blue-300">
                        <i class="fas fa-rocket mr-2"></i>Software Dengan Development Tercepat
                    </div>

                    <h1 class="text-5xl lg:text-7xl font-black leading-tight">
                        Transformasi Digital
                        <span class="block text-gradient">Dalam Sekejap</span>
                    </h1>

                    <p class="text-xl text-gray-300 leading-relaxed">
                        Kami hadirkan solusi software custom yang mengoptimasi bisnis Anda dengan teknologi terkini. Cepat, efisien, dan tanpa ribet.
                    </p>

                    <div class="flex flex-wrap gap-4">
                        <a href="mailto:client@encryptdev.com" class="group relative px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full font-bold text-lg overflow-hidden">
                            <span class="relative z-10 flex items-center">
                                Mulai Konsultasi Gratis
                                <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                            </span>
                        </a>
                        <a href="#projects" class="px-8 py-4 glass rounded-full font-bold text-lg hover:bg-white/10 transition-all">
                            Lihat Portfolio
                        </a>
                    </div>

                    <!-- Stats -->
                    <div class="grid grid-cols-3 gap-6 pt-8">
                        <div>
                            <div class="text-4xl font-black text-gradient">50+</div>
                            <div class="text-sm text-gray-400">Projects</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-gradient">98%</div>
                            <div class="text-sm text-gray-400">Happy Clients</div>
                        </div>
                        <div>
                            <div class="text-4xl font-black text-gradient">4+</div>
                            <div class="text-sm text-gray-400">Years</div>
                        </div>
                    </div>
                </div>

                <div class="relative hidden lg:block">
                    <div class="pulse-glow rounded-2xl p-1">
                        <div class="glass rounded-2xl p-8">
                            <div class="space-y-4">
                                <div class="flex items-center space-x-4 bg-gradient-to-r from-blue-500/20 to-purple-500/20 p-4 rounded-xl">
                                    <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-code text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="h-3 bg-gray-600 rounded-full w-3/4"></div>
                                        <div class="h-2 bg-gray-700 rounded-full w-1/2 mt-2"></div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4 bg-gradient-to-r from-purple-500/20 to-pink-500/20 p-4 rounded-xl">
                                    <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-mobile-alt text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="h-3 bg-gray-600 rounded-full w-2/3"></div>
                                        <div class="h-2 bg-gray-700 rounded-full w-1/3 mt-2"></div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4 bg-gradient-to-r from-pink-500/20 to-orange-500/20 p-4 rounded-xl">
                                    <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center">
                                        <i class="fas fa-robot text-2xl"></i>
                                    </div>
                                    <div class="flex-1">
                                        <div class="h-3 bg-gray-600 rounded-full w-5/6"></div>
                                        <div class="h-2 bg-gray-700 rounded-full w-2/3 mt-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trusted By -->
            <div class="mt-20">
                <p class="text-center text-gray-400 mb-8">Dipercaya oleh perusahaan terkemuka</p>
                <div class="flex flex-wrap justify-center items-center gap-8 lg:gap-12">
                    <!-- Logo placeholder boxes with gradient backgrounds -->
                    <div class="w-32 h-16 lg:w-40 lg:h-20  rounded-lg flex items-center justify-center hover:scale-110 transition-transform opacity-70 hover:opacity-100">
                        <img class="bg-white p-2 rounded-lg" src="{{ asset("images/yazaki.png") }}" alt="Logo yazzaki">
                    </div>
                    <div class="w-32 h-16 lg:w-40 lg:h-20 glass rounded-lg flex items-center justify-center hover:scale-110 transition-transform opacity-70 hover:opacity-100">
                        <div class="text-lg lg:text-xl font-black text-gray-300">TAREMAKMUR</div>
                    </div>
                    <div class="w-32 h-16 lg:w-40 lg:h-20  rounded-lg flex items-center justify-center hover:scale-110 transition-transform opacity-70 hover:opacity-100">
                        <img class="bg-white p-2 rounded-lg" src="{{ asset("images/naima.png") }}" alt="Naima">
                    </div>
                    <div class="w-12 h-12 lg:w-20 lg:h-20 glass rounded-lg flex items-center justify-center hover:scale-110 transition-transform opacity-70 hover:opacity-100">
                         <img class="bg-white p-2 rounded-lg" src="{{ asset("images/smkn2sekayu.png") }}" alt="SMA">
                    </div>
                      <div class="w-12 h-12 lg:w-20 lg:h-20 glass rounded-lg flex items-center justify-center hover:scale-110 transition-transform opacity-70 hover:opacity-100">
                         <img class="bg-white p-2 rounded-lg" src="{{ asset("images/janji-kembali.png") }}" alt="SMA">
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i class="fas fa-chevron-down text-3xl text-gray-400"></i>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-24 bg-gray-900 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black mb-6">
                    Layanan <span class="text-gradient">Unggulan</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Solusi teknologi komprehensif untuk semua kebutuhan digital bisnis Anda
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Service Card 1 -->
                <div class="group glass rounded-2xl p-8 hover-lift cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-chalkboard-user text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">IT Consultation</h3>
                    <p class="text-gray-400 mb-6">Strategi digital dan solusi IT yang tepat untuk bisnis Anda</p>
                    <div class="space-y-2 text-sm text-gray-500">
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Konsultasi Gratis</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Waktu Fleksibel</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Online & Offline</div>
                    </div>
                </div>

                <!-- Service Card 2 -->
                <div class="group glass rounded-2xl p-8 hover-lift cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-laptop-code text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Software Development</h3>
                    <p class="text-gray-400 mb-6">Aplikasi custom yang sesuai dengan kebutuhan unik bisnis Anda</p>
                    <div class="space-y-2 text-sm text-gray-500">
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Custom Software</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Training Lengkap</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Maintenance</div>
                    </div>
                </div>

                <!-- Service Card 3 -->
                <div class="group glass rounded-2xl p-8 hover-lift cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-orange-500 to-red-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-globe text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Website Development</h3>
                    <p class="text-gray-400 mb-6">Website profesional yang meningkatkan kredibilitas bisnis</p>
                    <div class="space-y-2 text-sm text-gray-500">
                        <div><i class="fas fa-check text-green-400 mr-2"></i>SEO Optimized</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Responsive Design</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Fast Loading</div>
                    </div>
                </div>

                <!-- Service Card 4 -->
                <div class="group glass rounded-2xl p-8 hover-lift cursor-pointer">
                    <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-500 rounded-xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="fas fa-robot text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">Internet of Things</h3>
                    <p class="text-gray-400 mb-6">Otomasi bisnis dengan perangkat pintar dan IoT</p>
                    <div class="space-y-2 text-sm text-gray-500">
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Real-time Data</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Smart Automation</div>
                        <div><i class="fas fa-check text-green-400 mr-2"></i>Monitoring 24/7</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Carousel Section -->
    <section id="projects" class="py-24 bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black mb-6">
                    Project <span class="text-gradient">Portfolio</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Berbagai project sukses yang telah kami selesaikan untuk klien dari berbagai industri
                </p>
            </div>

            <div class="carousel-container max-w-7xl mx-auto">
                <div class="carousel-track" id="projectCarousel">
                    <!-- Project 1 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                                <i class="fas fa-shopping-cart text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Management Sales</h3>
                                <p class="text-gray-400 text-sm mb-4">Sistem mobile dan web untuk manajemen transaksi bisnis</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-red-500/20 text-red-300 text-xs rounded-full">Laravel</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-300 text-xs rounded-full">Kotlin</span>
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 2 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                                <i class="fas fa-brain text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">AI Self Learning</h3>
                                <p class="text-gray-400 text-sm mb-4">Chatbot lokal offline untuk tanya jawab otomatis</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full">Next.js</span>
                                    <span class="px-3 py-1 bg-green-500/20 text-green-300 text-xs rounded-full">FastAPI</span>
                                    <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full">PostgreSQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 3 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-orange-600 to-red-600 flex items-center justify-center">
                                <i class="fas fa-briefcase text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Landing Page Pro</h3>
                                <p class="text-gray-400 text-sm mb-4">Landing page company dengan blog dan jobs portal</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-red-500/20 text-red-300 text-xs rounded-full">Laravel</span>
                                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full">FrankenPHP</span>
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 4 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center">
                                <i class="fas fa-barcode text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Auto Scan IoT</h3>
                                <p class="text-gray-400 text-sm mb-4">Aplikasi scan otomatis barcode untuk stock system</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full">Next.js</span>
                                    <span class="px-3 py-1 bg-yellow-500/20 text-yellow-300 text-xs rounded-full">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 5 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-indigo-600 to-blue-600 flex items-center justify-center">
                                <i class="fas fa-file-signature text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Electronics PO</h3>
                                <p class="text-gray-400 text-sm mb-4">Sistem e-sign dan kirim purchase order otomatis ke supplier</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-red-500/20 text-red-300 text-xs rounded-full">Laravel</span>
                                    <span class="px-3 py-1 bg-pink-500/20 text-pink-300 text-xs rounded-full">Livewire</span>
                                    <span class="px-3 py-1 bg-blue-500/20 text-blue-300 text-xs rounded-full">MySQL</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project 6 -->
                    <div class="carousel-slide">
                        <div class="group glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                            <div class="h-48 bg-gradient-to-br from-yellow-600 to-orange-600 flex items-center justify-center">
                                <i class="fas fa-mobile-screen text-6xl opacity-50"></i>
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-bold mb-2">Mobile Self Service</h3>
                                <p class="text-gray-400 text-sm mb-4">Sistem untuk menerima pesanan pelanggan melalui smartphone</p>
                                <div class="flex flex-wrap gap-2">
                                    <span class="px-3 py-1 bg-cyan-500/20 text-cyan-300 text-xs rounded-full">React Native</span>
                                    <span class="px-3 py-1 bg-pink-500/20 text-pink-300 text-xs rounded-full">NestJs</span>
                                    <span class="px-3 py-1 bg-purple-500/20 text-purple-300 text-xs rounded-full">PostgreSQL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="flex justify-center items-center gap-4 mt-8">
                    <button onclick="moveCarousel('project', -1)" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-all">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div id="projectDots" class="flex gap-2"></div>
                    <button onclick="moveCarousel('project', 1)" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-all">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Carousel Section -->
    <section id="clients" class="py-24 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black mb-6">
                    Klien <span class="text-gradient">Bahagia</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Testimoni dari klien yang telah merasakan manfaat solusi digital kami
                </p>
            </div>

            <div class="carousel-container max-w-7xl mx-auto">
                <div class="carousel-track" id="testimonialCarousel">
                    <!-- Testimonial 1 -->
                    <div class="carousel-slide">
                        <div class="glass rounded-2xl p-8 hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                                    ID
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold">Indra</h4>
                                    <p class="text-sm text-gray-400">Taremakmur</p>
                                </div>
                            </div>
                            <p class="text-gray-300 italic mb-4">"Encrypt Digital Solution memberikan solusi yang sempurna untuk digitalisasi bisnis kami. Highly recommended!"</p>
                            <div class="flex text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 2 -->
                    <div class="carousel-slide">
                        <div class="glass rounded-2xl p-8 hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-blue-600 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                                    KH
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold">Khoiron</h4>
                                    <p class="text-sm text-gray-400">Janji Kembali</p>
                                </div>
                            </div>
                            <p class="text-gray-300 italic mb-4">"Tim yang sangat profesional dan hasil yang memuaskan. Proses development sangat transparan dan komunikatif."</p>
                            <div class="flex text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Testimonial 3 -->
                    <div class="carousel-slide">
                        <div class="glass rounded-2xl p-8 hover-lift h-full">
                            <div class="flex items-center mb-6">
                                <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mr-4 text-2xl font-bold">
                                    FS
                                </div>
                                <div>
                                    <h4 class="text-xl font-bold">Faisal</h4>
                                    <p class="text-sm text-gray-400">Naim</p>
                                </div>
                            </div>
                            <p class="text-gray-300 italic mb-4">"Kualitas code dan dokumentasi yang sangat baik. Maintenance jadi lebih mudah dan sistem berjalan sangat stabil."</p>
                            <div class="flex text-yellow-400 text-xl">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <div class="flex justify-center items-center gap-4 mt-8">
                    <button onclick="moveCarousel('testimonial', -1)" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-all">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <div id="testimonialDots" class="flex gap-2"></div>
                    <button onclick="moveCarousel('testimonial', 1)" class="w-12 h-12 glass rounded-full flex items-center justify-center hover:bg-white/10 transition-all">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>

            <!-- Client Statistics -->
            <div class="grid md:grid-cols-4 gap-8 mt-16 max-w-5xl mx-auto">
                <div class="glass rounded-xl p-6 text-center hover-lift">
                    <div class="text-5xl font-black text-gradient mb-2">50+</div>
                    <p class="text-gray-300">Project Selesai</p>
                </div>
                <div class="glass rounded-xl p-6 text-center hover-lift">
                    <div class="text-5xl font-black text-gradient mb-2">98%</div>
                    <p class="text-gray-300">Kepuasan Klien</p>
                </div>
                <div class="glass rounded-xl p-6 text-center hover-lift">
                    <div class="text-5xl font-black text-gradient mb-2">4+</div>
                    <p class="text-gray-300">Tahun Pengalaman</p>
                </div>
                <div class="glass rounded-xl p-6 text-center hover-lift">
                    <div class="text-5xl font-black text-gradient mb-2">24/7</div>
                    <p class="text-gray-300">Support</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section id="timeline" class="py-24 bg-gray-800 relative">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-5xl font-black mb-6">
                    Perjalanan <span class="text-gradient">Kami</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto">
                    Milestone penting dalam perjalanan Encrypt Digital Solution
                </p>
            </div>

            <div class="max-w-5xl mx-auto relative">
                <!-- Timeline Line for Desktop -->
                <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 hidden lg:block"></div>

                <!-- Timeline Line for Mobile -->
                <div class="absolute left-6 top-0 w-1 h-full bg-gradient-to-b from-blue-500 via-purple-500 to-pink-500 lg:hidden"></div>

                <!-- Timeline Items -->
                <div class="space-y-8 lg:space-y-12">
                    <!-- Timeline 1 -->
                    <div class="flex flex-row lg:flex-row items-start lg:items-center gap-4 lg:gap-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full flex items-center justify-center z-10 flex-shrink-0 lg:hidden">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <div class="flex-1 lg:text-right">
                            <div class="glass rounded-2xl p-4 lg:p-6 hover-lift">
                                <h3 class="text-xl lg:text-2xl font-bold mb-2">Pertama Beroperasi</h3>
                                <p class="text-blue-400 font-semibold mb-2 lg:mb-4 text-sm lg:text-base">3 Maret 2021</p>
                                <p class="text-gray-400 text-sm lg:text-base">Pertama kali dengan nama Encrypt Multimedia khusus untuk menangani percetakan dan konten Multimedia</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-cyan-500 rounded-full items-center justify-center z-10 flex-shrink-0 hidden lg:flex">
                            <i class="fas fa-rocket text-xl"></i>
                        </div>
                        <div class="flex-1 hidden lg:block"></div>
                    </div>

                    <!-- Timeline 2 -->
                    <div class="flex flex-row lg:flex-row items-start lg:items-center gap-4 lg:gap-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center z-10 flex-shrink-0 lg:hidden">
                            <i class="fas fa-sync text-xl"></i>
                        </div>
                        <div class="flex-1 lg:hidden">
                            <div class="glass rounded-2xl p-4 hover-lift">
                                <h3 class="text-xl font-bold mb-2">Changing Focus</h3>
                                <p class="text-purple-400 font-semibold mb-2 text-sm">21 Januari 2022</p>
                                <p class="text-gray-400 text-sm">Berganti fokus dan nama menjadi EncryptDev. Berfokus untuk melayani Solusi IT untuk Bisnis</p>
                            </div>
                        </div>
                        <div class="flex-1 hidden lg:block"></div>
                        <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full items-center justify-center z-10 flex-shrink-0 hidden lg:flex">
                            <i class="fas fa-sync text-xl"></i>
                        </div>
                        <div class="flex-1 hidden lg:block">
                            <div class="glass rounded-2xl p-6 hover-lift">
                                <h3 class="text-2xl font-bold mb-2">Changing Focus</h3>
                                <p class="text-purple-400 font-semibold mb-4">21 Januari 2022</p>
                                <p class="text-gray-400">Berganti fokus dan nama menjadi EncryptDev. Berfokus untuk melayani Solusi IT untuk Bisnis</p>
                            </div>
                        </div>
                    </div>

                    <!-- Timeline 3 -->
                    <div class="flex flex-row lg:flex-row items-start lg:items-center gap-4 lg:gap-8">
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-orange-500 rounded-full flex items-center justify-center z-10 flex-shrink-0 lg:hidden">
                            <i class="fas fa-certificate text-xl"></i>
                        </div>
                        <div class="flex-1 lg:text-right">
                            <div class="glass rounded-2xl p-4 lg:p-6 hover-lift">
                                <h3 class="text-xl lg:text-2xl font-bold mb-2">Legality</h3>
                                <p class="text-pink-400 font-semibold mb-2 lg:mb-4 text-sm lg:text-base">7 Desember 2024</p>
                                <p class="text-gray-400 text-sm lg:text-base">EncryptDev sekarang berada di bawah PT Encrypt Digital Solution. Untuk siap menjalin kerja sama lebih luas dan profesional</p>
                            </div>
                        </div>
                        <div class="w-12 h-12 bg-gradient-to-br from-pink-500 to-orange-500 rounded-full items-center justify-center z-10 flex-shrink-0 hidden lg:flex">
                            <i class="fas fa-certificate text-xl"></i>
                        </div>
                        <div class="flex-1 hidden lg:block"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="py-24 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <div class="inline-block glass px-4 py-2 rounded-full text-sm font-semibold text-indigo-400 mb-4">
                    <i class="fas fa-users mr-2"></i>Contact Us
                </div>
                <h2 class="text-5xl font-black mb-6">
                    Tim <span class="text-gradient">Berpengalaman</span>
                </h2>
                <p class="text-xl text-gray-400 max-w-3xl mx-auto mb-8">
                    Team kami siap membantu permasalahan digital pada bisnis Anda. Hubungi kami untuk diskusi langsung
                </p>
                <a href="https://wa.me/6285171106025" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-green-500 to-emerald-600 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i>
                    Book a Call
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
                <!-- Team Member 1 -->
                <div class="group relative overflow-hidden rounded-2xl hover-lift cursor-pointer">
                    <div class="h-80 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                        <img src="{{ asset("images/bayu2.jpg") }}" class="object-cover h-80">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 glass p-4 transform translate-y-full group-hover:translate-y-0 transition-transform">
                        <h4 class="font-bold text-lg">Bayu Febriyono</h4>
                        <p class="text-sm text-gray-400">Fullstack Developer</p>
                    </div>
                </div>

                <!-- Team Member 2 -->
                <div class="group relative overflow-hidden rounded-2xl hover-lift cursor-pointer">
                    <div class="h-80 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                      <img src="{{ asset("images/ragil.jpg") }}" class="object-cover h-80">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 glass p-4 transform translate-y-full group-hover:translate-y-0 transition-transform">
                        <h4 class="font-bold text-lg">Ragil Ridho</h4>
                        <p class="text-sm text-gray-400">Frontend Developer</p>
                    </div>
                </div>

                <!-- Team Member 3 -->
                <div class="group relative overflow-hidden rounded-2xl hover-lift cursor-pointer">
                    <div class="h-80 bg-gradient-to-br from-pink-600 to-orange-600 flex items-center justify-center">
                       <img src="{{ asset("images/dewangga.jpg") }}" class="object-cover h-80">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 glass p-4 transform translate-y-full group-hover:translate-y-0 transition-transform">
                        <h4 class="font-bold text-lg">Dewangga Wahyu</h4>
                        <p class="text-sm text-gray-400">Backend Developer</p>
                    </div>
                </div>

                <!-- Team Member 4 -->
                <div class="group relative overflow-hidden rounded-2xl hover-lift cursor-pointer">
                    <div class="h-80 bg-gradient-to-br from-orange-600 to-yellow-600 flex items-center justify-center">
                        <img src="{{ asset("images/dugi.jpg") }}" class="object-cover h-80">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 glass p-4 transform translate-y-full group-hover:translate-y-0 transition-transform">
                        <h4 class="font-bold text-lg">Dugi Mulio</h4>
                        <p class="text-sm text-gray-400">System Analyst</p>
                    </div>
                </div>

                <!-- Team Member 5 -->
                <div class="group relative overflow-hidden rounded-2xl hover-lift cursor-pointer">
                    <div class="h-80 bg-gradient-to-br from-green-600 to-emerald-600 flex items-center justify-center">
                       <img src="{{ asset("images/anas.png") }}" class="object-cover h-80">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 glass p-4 transform translate-y-full group-hover:translate-y-0 transition-transform">
                        <h4 class="font-bold text-lg">Pirgianas Surya</h4>
                        <p class="text-sm text-gray-400">UI/UX Designer</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-24 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full filter blur-3xl floating"></div>
            <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full filter blur-3xl floating" style="animation-delay: 2s;"></div>
        </div>

        <div class="container mx-auto px-6 text-center relative z-10">
            <h2 class="text-5xl lg:text-6xl font-black mb-6">Siap Transformasi Digital?</h2>
            <p class="text-2xl mb-12 opacity-90 max-w-3xl mx-auto">Hubungi kami sekarang untuk konsultasi gratis dan mulai perjalanan digital bisnis Anda</p>
            <div class="flex flex-wrap justify-center gap-4">
                <a href="mailto:client@encryptdev.com" class="group px-10 py-5 bg-white text-purple-600 rounded-full font-bold text-lg hover:scale-105 transition-transform flex items-center">
                    <i class="fas fa-envelope mr-2"></i>
                    <span>Email Kami</span>
                    <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform"></i>
                </a>
                <a href="https://wa.me/6285171106025" class="px-10 py-5 bg-transparent border-2 border-white rounded-full font-bold text-lg hover:bg-white hover:text-purple-600 transition-all flex items-center">
                    <i class="fab fa-whatsapp text-2xl mr-2"></i>
                    WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-12 bg-gray-950">
        <div class="container mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 mb-8">
                <div class="col-span-2">
                    <h3 class="text-3xl font-black mb-4 text-gradient">PT Encrypt Digital Solution</h3>
                    <p class="text-gray-400 mb-4">Solusi terbaik untuk kebutuhan digital Anda. Kami menghadirkan inovasi dalam setiap layanan.</p>
                </div>

                <div>
                    <h4 class="font-bold mb-4 text-xl">Kontak</h4>
                    <div class="space-y-3 text-gray-400 text-sm">
                        <div class="flex items-center"><i class="fas fa-phone mr-3 text-blue-400"></i>0851-7110-6025</div>
                        <div class="flex items-center"><i class="fas fa-envelope mr-3 text-blue-400"></i>client@encryptdev.com</div>
                        <div class="flex items-start"><i class="fas fa-map-marker-alt mr-3 text-blue-400 mt-1"></i>Dsn Karang Nongko, Mojoranu, Sooko, Mojokerto</div>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold mb-4 text-xl">Ikuti Kami</h4>
                    <div class="flex gap-3">
                        <a href="https://www.instagram.com/encryptdevdigital/" class="w-12 h-12 bg-gradient-to-br from-purple-600 to-pink-600 rounded-full flex items-center justify-center hover:scale-110 transition-transform">
                            <i class="fab fa-instagram text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="border-t border-gray-800 pt-8 text-center text-gray-500 text-sm">
                <p>© 2025 EncryptDev. All Rights Reserved. Made with <i class="fas fa-heart text-red-500"></i> in Indonesia</p>
            </div>
        </div>
    </footer>

    <script>
        // Carousel functionality
        const carousels = {
            project: {
                currentIndex: 0,
                track: null,
                dots: null,
                totalSlides: 0,
                slidesPerView: 3
            },
            testimonial: {
                currentIndex: 0,
                track: null,
                dots: null,
                totalSlides: 0,
                slidesPerView: 3
            }
        };

        function initCarousel(type) {
            const carousel = carousels[type];
            carousel.track = document.getElementById(`${type}Carousel`);
            carousel.dots = document.getElementById(`${type}Dots`);
            carousel.totalSlides = carousel.track.children.length;

            // Update slides per view based on screen size
            function updateSlidesPerView() {
                if (window.innerWidth < 768) {
                    carousel.slidesPerView = 1;
                } else if (window.innerWidth < 1024) {
                    carousel.slidesPerView = 2;
                } else {
                    carousel.slidesPerView = 3;
                }
            }

            updateSlidesPerView();
            window.addEventListener('resize', updateSlidesPerView);

            // Create dots
            carousel.dots.innerHTML = '';
            const totalDots = Math.ceil(carousel.totalSlides / carousel.slidesPerView);
            for (let i = 0; i < totalDots; i++) {
                const dot = document.createElement('button');
                dot.className = `w-3 h-3 rounded-full transition-all ${i === 0 ? 'bg-blue-500 w-8' : 'bg-gray-600'}`;
                dot.onclick = () => goToSlide(type, i);
                carousel.dots.appendChild(dot);
            }
        }

        function moveCarousel(type, direction) {
            const carousel = carousels[type];
            const maxIndex = Math.ceil(carousel.totalSlides / carousel.slidesPerView) - 1;

            carousel.currentIndex += direction;

            if (carousel.currentIndex < 0) {
                carousel.currentIndex = maxIndex;
            } else if (carousel.currentIndex > maxIndex) {
                carousel.currentIndex = 0;
            }

            updateCarousel(type);
        }

        function goToSlide(type, index) {
            carousels[type].currentIndex = index;
            updateCarousel(type);
        }

        function updateCarousel(type) {
            const carousel = carousels[type];
            const slideWidth = 100 / carousel.slidesPerView;
            const offset = -carousel.currentIndex * 100;

            carousel.track.style.transform = `translateX(${offset}%)`;

            // Update dots
            Array.from(carousel.dots.children).forEach((dot, index) => {
                if (index === carousel.currentIndex) {
                    dot.className = 'w-8 h-3 rounded-full bg-blue-500 transition-all';
                } else {
                    dot.className = 'w-3 h-3 rounded-full bg-gray-600 transition-all';
                }
            });
        }

        // Initialize carousels
        initCarousel('project');
        initCarousel('testimonial');

        // Auto-play carousels
        setInterval(() => {
            moveCarousel('project', 1);
        }, 5000);

        setInterval(() => {
            moveCarousel('testimonial', 1);
        }, 6000);
    </script>

</body>
</html>
