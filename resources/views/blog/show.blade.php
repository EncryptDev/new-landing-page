<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->meta_title ?? $post->title }} | Encrypt Digital Solution</title>
    <meta name="description" content="{{ $post->meta_description ?? $post->excerpt }}">
    <meta name="keywords" content="{{ $post->meta_keywords }}">
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
        .prose h1, .prose h2, .prose h3, .prose h4, .prose h5, .prose h6 {
            color: #fff;
            font-weight: 700;
            margin-top: 2rem;
            margin-bottom: 1rem;
        }
        .prose p {
            color: #d1d5db;
            line-height: 1.8;
            margin-bottom: 1.5rem;
        }
        .prose ul, .prose ol {
            color: #d1d5db;
            margin-left: 1.5rem;
            margin-bottom: 1.5rem;
        }
        .prose a {
            color: #60a5fa;
            text-decoration: underline;
        }
        .prose a:hover {
            color: #93c5fd;
        }
        .prose img {
            border-radius: 0.5rem;
            margin: 2rem 0;
        }
        .prose blockquote {
            border-left: 4px solid #60a5fa;
            padding-left: 1rem;
            margin: 2rem 0;
            font-style: italic;
            color: #9ca3af;
        }
        .prose code {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 0.2rem 0.4rem;
            border-radius: 0.25rem;
            font-size: 0.875rem;
        }
        .prose pre {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 1rem;
            border-radius: 0.5rem;
            overflow-x: auto;
            margin: 1.5rem 0;
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
            <div class="flex items-center gap-4 mb-8">
                <a href="{{ route('blog.index') }}" class="inline-flex items-center text-gray-300 hover:text-white transition-colors">
                    <i class="fas fa-arrow-left mr-2"></i> Back to Blog
                </a>
                <span class="text-gray-600">|</span>
                <a href="{{ route('home') }}" class="inline-flex items-center text-gray-300 hover:text-white transition-colors">
                    <i class="fas fa-home mr-2"></i> Home
                </a>
            </div>

            <div class="max-w-4xl">
                <div class="flex items-center text-sm text-gray-300 mb-6">
                    <i class="fas fa-calendar mr-2"></i>
                    {{ $post->published_at->format('d F Y') }}
                    <span class="mx-3">•</span>
                    <i class="fas fa-eye mr-2"></i>
                    {{ $post->views }} views
                    <span class="mx-3">•</span>
                    <i class="fas fa-user mr-2"></i>
                    {{ $post->author->name }}
                </div>

                <h1 class="text-5xl font-black mb-6">{{ $post->title }}</h1>
                <p class="text-xl text-gray-300">{{ $post->excerpt }}</p>
            </div>
        </div>
    </header>

    <!-- Featured Image -->
    @if($post->featured_image)
        <div class="container mx-auto px-6 -mt-10">
            <div class="glass rounded-2xl overflow-hidden max-w-5xl mx-auto">
                <img src="{{ Storage::url($post->featured_image) }}"
                     alt="{{ $post->title }}"
                     class="w-full h-auto">
            </div>
        </div>
    @endif

    <!-- Content -->
    <article class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-lg max-w-none">
                    {!! $post->content !!}
                </div>

                <!-- Share Buttons -->
                <div class="mt-12 pt-8 border-t border-gray-700">
                    <h3 class="text-xl font-bold mb-4">Bagikan Artikel:</h3>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="px-6 py-3 bg-blue-600 rounded-lg hover:bg-blue-700 transition-colors">
                            <i class="fab fa-facebook-f mr-2"></i> Facebook
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ urlencode(request()->url()) }}&text={{ urlencode($post->title) }}"
                           target="_blank"
                           class="px-6 py-3 bg-sky-500 rounded-lg hover:bg-sky-600 transition-colors">
                            <i class="fab fa-twitter mr-2"></i> Twitter
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->url()) }}"
                           target="_blank"
                           class="px-6 py-3 bg-blue-700 rounded-lg hover:bg-blue-800 transition-colors">
                            <i class="fab fa-linkedin-in mr-2"></i> LinkedIn
                        </a>
                        <a href="https://wa.me/?text={{ urlencode($post->title . ' - ' . request()->url()) }}"
                           target="_blank"
                           class="px-6 py-3 bg-green-600 rounded-lg hover:bg-green-700 transition-colors">
                            <i class="fab fa-whatsapp mr-2"></i> WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <!-- Related Posts -->
    @if($relatedPosts->count() > 0)
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-black mb-12 text-center">Artikel Terkait</h2>

                <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    @foreach($relatedPosts as $related)
                        <a href="{{ route('blog.show', $related->slug) }}" class="block">
                            <article class="glass rounded-2xl overflow-hidden hover:scale-105 transition-transform cursor-pointer">
                                @if($related->featured_image)
                                    <div class="h-48 overflow-hidden">
                                        <img src="{{ Storage::url($related->featured_image) }}"
                                             alt="{{ $related->title }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center">
                                        <i class="fas fa-file-alt text-5xl opacity-50"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <div class="text-xs text-gray-400 mb-2">
                                        {{ $related->published_at->format('d M Y') }}
                                    </div>
                                    <h3 class="text-xl font-bold mb-2 line-clamp-2">{{ $related->title }}</h3>
                                    <p class="text-gray-400 text-sm line-clamp-2">{{ $related->excerpt }}</p>
                                </div>
                            </article>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-6">Butuh Solusi Digital?</h2>
            <p class="text-xl mb-8">Konsultasikan kebutuhan bisnis Anda dengan tim expert kami</p>
            <a href="mailto:client@encryptdev.com"
               class="inline-flex items-center px-8 py-4 bg-white text-purple-600 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                <i class="fas fa-envelope mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </section>

</body>
</html>
