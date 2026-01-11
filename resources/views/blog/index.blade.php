<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Encrypt Digital Solution</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/a627a75623.js" crossorigin="anonymous"></script>
    <style>
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
        .glass {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        .hover-lift {
            transition: transform 0.3s ease;
        }
        .hover-lift:hover {
            transform: translateY(-10px);
        }
    </style>
</head>
<body class="bg-gray-900 text-white">

    <!-- Navigation Bar -->
    <nav class="bg-gray-900/95 backdrop-blur-sm border-b border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex items-center justify-between h-16">
                <a href="{{ route('home') }}" class="text-xl font-bold text-white">
                    Encrypt Digital
                </a>
                <div class="flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-300 hover:text-white transition-colors">Home</a>
                    <a href="{{ route('blog.index') }}" class="text-white font-semibold">Blog</a>
                    <a href="mailto:client@encryptdev.com" class="px-6 py-2 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full font-semibold hover:scale-105 transition-transform">
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="gradient-bg py-20">
        <div class="container mx-auto px-6">
            <a href="{{ route('home') }}" class="inline-flex items-center text-gray-300 hover:text-white mb-8">
                <i class="fas fa-arrow-left mr-2"></i> Kembali ke Home
            </a>

            <h1 class="text-5xl lg:text-6xl font-black mb-6">Blog & Insights</h1>
            <p class="text-xl text-gray-300 max-w-3xl">
                Artikel, tips, dan insight terbaru seputar teknologi dan digital transformation
            </p>
        </div>
    </header>

    <!-- Featured Post -->
    @if($featuredPost)
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-black mb-8">Featured Post</h2>
                <a href="{{ route('blog.show', $featuredPost->slug) }}" class="block">
                    <div class="glass rounded-2xl overflow-hidden hover-lift cursor-pointer lg:flex">
                        @if($featuredPost->featured_image)
                            <div class="lg:w-1/2">
                                <img src="{{ Storage::url($featuredPost->featured_image) }}"
                                     alt="{{ $featuredPost->title }}"
                                     class="w-full h-full object-cover min-h-[400px]">
                            </div>
                        @endif
                        <div class="p-8 lg:w-1/2 flex flex-col justify-center">
                            <div class="flex items-center text-sm text-gray-400 mb-4">
                                <i class="fas fa-calendar mr-2"></i>
                                {{ $featuredPost->published_at->format('d M Y') }}
                                <span class="mx-2">•</span>
                                <i class="fas fa-eye mr-2"></i>
                                {{ $featuredPost->views }} views
                            </div>
                            <h3 class="text-3xl font-bold mb-4">{{ $featuredPost->title }}</h3>
                            <p class="text-gray-300 mb-6">{{ $featuredPost->excerpt }}</p>
                            <div class="flex items-center">
                                <span class="text-blue-400 font-semibold">Read More →</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    @endif

    <!-- Blog Grid -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-black mb-8">Latest Posts</h2>

            @if($posts->count() > 0)
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                    @foreach($posts as $post)
                        <a href="{{ route('blog.show', $post->slug) }}" class="block">
                            <article class="glass rounded-2xl overflow-hidden hover-lift cursor-pointer h-full">
                                @if($post->featured_image)
                                    <div class="h-48 overflow-hidden">
                                        <img src="{{ Storage::url($post->featured_image) }}"
                                             alt="{{ $post->title }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                                        <i class="fas fa-file-alt text-6xl opacity-50"></i>
                                    </div>
                                @endif

                                <div class="p-6">
                                    <div class="flex items-center text-xs text-gray-400 mb-3">
                                        <i class="fas fa-calendar mr-2"></i>
                                        {{ $post->published_at->format('d M Y') }}
                                        <span class="mx-2">•</span>
                                        <i class="fas fa-eye mr-2"></i>
                                        {{ $post->views }}
                                    </div>

                                    <h3 class="text-xl font-bold mb-3 line-clamp-2">{{ $post->title }}</h3>
                                    <p class="text-gray-400 text-sm mb-4 line-clamp-3">{{ $post->excerpt }}</p>

                                    <div class="flex items-center justify-between">
                                        <span class="text-sm text-gray-500">
                                            <i class="fas fa-user mr-1"></i>
                                            {{ $post->author->name }}
                                        </span>
                                        <span class="text-blue-400 text-sm font-semibold">Read →</span>
                                    </div>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="flex justify-center">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="text-center text-gray-500 py-12">
                    <i class="fas fa-inbox text-5xl mb-4 opacity-50"></i>
                    <p class="text-xl">Belum ada blog post yang dipublikasikan</p>
                </div>
            @endif
        </div>
    </section>

    <!-- Newsletter CTA -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-6">Stay Updated!</h2>
            <p class="text-xl mb-8">Dapatkan tips dan insight terbaru langsung ke inbox Anda</p>
            <a href="mailto:client@encryptdev.com?subject=Subscribe to Newsletter"
               class="inline-flex items-center px-8 py-4 bg-white text-purple-600 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                <i class="fas fa-envelope mr-2"></i>
                Subscribe Newsletter
            </a>
        </div>
    </section>

</body>
</html>
