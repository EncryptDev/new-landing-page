<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $project->title }} | Encrypt Digital Solution</title>
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
                    <a href="{{ route('home') }}" class="text-white font-semibold">Home</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-300 hover:text-white transition-colors">Blog</a>
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
            <a href="{{ route('home') }}#projects" class="inline-flex items-center text-gray-300 hover:text-white mb-8">
                <i class="fas fa-arrow-left mr-2"></i> Back to Projects
            </a>

            <div class="max-w-4xl">
                <h1 class="text-5xl font-black mb-6">{{ $project->title }}</h1>
                <p class="text-xl text-gray-300 mb-6">{{ $project->short_description }}</p>

                <div class="flex flex-wrap gap-4 mb-6">
                    @if($project->client)
                        <div class="glass rounded-lg px-4 py-2">
                            <i class="fas fa-building mr-2 text-blue-400"></i>
                            <span>{{ $project->client }}</span>
                        </div>
                    @endif
                    @if($project->project_date)
                        <div class="glass rounded-lg px-4 py-2">
                            <i class="fas fa-calendar mr-2 text-green-400"></i>
                            <span>{{ $project->project_date->format('F Y') }}</span>
                        </div>
                    @endif
                </div>

                @if($project->technologies)
                    <div class="flex flex-wrap gap-2">
                        @foreach($project->technologies as $tech)
                            <span class="px-4 py-2 glass rounded-full text-sm">{{ $tech }}</span>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </header>

    <!-- Project Image -->
    @if($project->image)
        <div class="container mx-auto px-6 -mt-10">
            <div class="glass rounded-2xl overflow-hidden max-w-5xl mx-auto">
                <img src="{{ Storage::url($project->image) }}"
                     alt="{{ $project->title }}"
                     class="w-full h-auto">
            </div>
        </div>
    @endif

    <!-- Project Content -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="max-w-4xl mx-auto">
                <div class="prose prose-invert prose-lg max-w-none">
                    {!! nl2br(e($project->description)) !!}
                </div>

                @if($project->project_url)
                    <div class="mt-10">
                        <a href="{{ $project->project_url }}"
                           target="_blank"
                           class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                            <i class="fas fa-external-link-alt mr-2"></i>
                            Lihat Project
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>

    <!-- Related Projects -->
    @if($relatedProjects->count() > 0)
        <section class="py-20 bg-gray-800">
            <div class="container mx-auto px-6">
                <h2 class="text-4xl font-black mb-12 text-center">Project Lainnya</h2>

                <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
                    @foreach($relatedProjects as $related)
                        <a href="{{ route('projects.show', $related->slug) }}" class="block">
                            <div class="glass rounded-2xl overflow-hidden hover:scale-105 transition-transform cursor-pointer">
                                @if($related->image)
                                    <div class="h-48 overflow-hidden">
                                        <img src="{{ Storage::url($related->image) }}"
                                             alt="{{ $related->title }}"
                                             class="w-full h-full object-cover">
                                    </div>
                                @else
                                    <div class="h-48 bg-gradient-to-br from-{{ $related->gradient_from }} to-{{ $related->gradient_to }} flex items-center justify-center">
                                        <i class="fas {{ $related->icon }} text-5xl opacity-50"></i>
                                    </div>
                                @endif
                                <div class="p-6">
                                    <h3 class="text-xl font-bold mb-2">{{ $related->title }}</h3>
                                    <p class="text-gray-400 text-sm">{{ Str::limit($related->short_description, 100) }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    <!-- CTA -->
    <section class="py-20 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-4xl font-black mb-6">Tertarik dengan Project Ini?</h2>
            <p class="text-xl mb-8">Hubungi kami untuk membuat project serupa untuk bisnis Anda</p>
            <a href="mailto:client@encryptdev.com"
               class="inline-flex items-center px-8 py-4 bg-white text-purple-600 rounded-full font-bold text-lg hover:scale-105 transition-transform">
                <i class="fas fa-envelope mr-2"></i>
                Hubungi Kami
            </a>
        </div>
    </section>

</body>
</html>
