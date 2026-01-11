@extends('layouts.admin')

@section('title', 'Edit Blog Post')
@section('page-title', 'Edit Blog Post')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.snow.css" rel="stylesheet">
@endpush

@section('content')
<div class="max-w-4xl">
    <form action="{{ route('admin.blog-posts.update', $blogPost) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Post Information</h3>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Title *</label>
                <input type="text" name="title" value="{{ old('title', $blogPost->title) }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Excerpt *</label>
                <textarea name="excerpt" rows="3" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('excerpt', $blogPost->excerpt) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Content *</label>
                <div id="editor" style="height: 400px;"></div>
                <input type="hidden" name="content" id="content">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Featured Image</label>
                @if($blogPost->featured_image)
                    <div class="mb-2">
                        <img src="{{ Storage::url($blogPost->featured_image) }}" alt="Current" class="h-32 w-auto rounded">
                    </div>
                @endif
                <input type="file" name="featured_image" accept="image/*"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <p class="mt-1 text-sm text-gray-500">Upload new image to replace current</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">SEO Settings</h3>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Title</label>
                <input type="text" name="meta_title" value="{{ old('meta_title', $blogPost->meta_title) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Description</label>
                <textarea name="meta_description" rows="2"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('meta_description', $blogPost->meta_description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Meta Keywords</label>
                <input type="text" name="meta_keywords" value="{{ old('meta_keywords', $blogPost->meta_keywords) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Publishing</h3>

            <div class="flex items-center mb-4">
                <input type="checkbox" name="is_published" id="is_published" value="1" {{ old('is_published', $blogPost->is_published) ? 'checked' : '' }}
                       class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                <label for="is_published" class="ml-2 block text-sm text-gray-900">
                    Published
                </label>
            </div>

            <div class="text-sm text-gray-600">
                <p><strong>Views:</strong> {{ $blogPost->views }}</p>
                @if($blogPost->published_at)
                    <p><strong>Published:</strong> {{ $blogPost->published_at->format('d F Y, H:i') }}</p>
                @endif
            </div>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.blog-posts.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Update Post
            </button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/quill@2.0.0/dist/quill.js"></script>
<script>
    const quill = new Quill('#editor', {
        theme: 'snow',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                ['bold', 'italic', 'underline', 'strike'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'indent': '-1'}, { 'indent': '+1' }],
                [{ 'color': [] }, { 'background': [] }],
                [{ 'align': [] }],
                ['link', 'image', 'code-block'],
                ['clean']
            ]
        }
    });

    // Load existing content
    const content = {!! json_encode(old('content', $blogPost->content)) !!};
    quill.root.innerHTML = content;

    // Update hidden input on form submit
    const form = document.querySelector('form');
    form.addEventListener('submit', function(e) {
        // Get content from Quill editor
        const content = quill.root.innerHTML;

        // Set to hidden input
        document.getElementById('content').value = content;

        // Check if content is empty
        const tempDiv = document.createElement('div');
        tempDiv.innerHTML = content;
        const textContent = tempDiv.textContent || tempDiv.innerText || '';

        if (!textContent.trim()) {
            e.preventDefault();
            alert('Please add some content to your blog post');
            return false;
        }
    });

    // Also update on text change
    quill.on('text-change', function() {
        document.getElementById('content').value = quill.root.innerHTML;
    });
</script>
@endpush
