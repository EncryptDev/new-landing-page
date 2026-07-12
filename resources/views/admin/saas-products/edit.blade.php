@extends('layouts.admin')

@section('title', 'Edit SaaS Product')
@section('page-title', 'Edit SaaS Product')

@section('content')
<div class="max-w-3xl">
    <form action="{{ route('admin.saas-products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Product Details</h3>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Product Name *</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" required
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Tagline *</label>
                    <input type="text" name="tagline" value="{{ old('tagline', $product->tagline) }}" required placeholder="e.g. Point of Sales & Inventory"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Logo Image</label>
                    @if($product->logo)
                        <div class="mb-2">
                            <img src="{{ Storage::url($product->logo) }}" alt="{{ $product->name }}" class="h-16 w-auto object-contain rounded-lg border p-1">
                        </div>
                    @endif
                    <input type="file" name="logo" accept="image/*"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                    <p class="mt-1 text-xs text-gray-500">Upload new image to replace current logo.</p>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">FontAwesome Icon Class</label>
                    <input type="text" name="icon" value="{{ old('icon', $product->icon) }}" placeholder="e.g. fas fa-cash-register"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <p class="mt-1 text-xs text-gray-500">Icon used if logo image is empty.</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Status Tag</label>
                    <input type="text" name="status" value="{{ old('status', $product->status) }}" placeholder="e.g. Active, Under Development, New Release"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div class="flex items-center pt-8">
                    <input type="checkbox" name="is_under_development" id="is_under_development" value="1" {{ old('is_under_development', $product->is_under_development) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_under_development" class="ml-2 block text-sm text-gray-900">Under Development</label>
                </div>
                <div class="flex items-center pt-8">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $product->is_active) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-900">Active (Visible)</label>
                </div>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Description *</label>
                <textarea name="description" rows="3" required
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('description', $product->description) }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Key Features *</label>
                <textarea name="features" rows="5" required placeholder="Write one feature per line...&#10;e.g. Multi-Outlet Sync: Dashboard terpusat untuk kelola cabang&#10;Offline Mode: Transaksi aman tanpa internet"
                          class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('features', $product->features) }}</textarea>
                <p class="mt-1 text-xs text-gray-500">Put each feature on a new line. You can use the format <strong>Title: Description</strong>.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Stat 1 (e.g. Active Users)</label>
                    <input type="text" name="active_users" value="{{ old('active_users', $product->active_users) }}" placeholder="e.g. 1,500+ Bisnis"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Stat 2 (e.g. Daily Transactions)</label>
                    <input type="text" name="daily_transactions" value="{{ old('daily_transactions', $product->daily_transactions) }}" placeholder="e.g. 50k+ Transaksi"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Platform / Product URL</label>
                    <input type="url" name="url" value="{{ old('url', $product->url) }}" placeholder="https://sentrakasir.id"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Demo / WA URL</label>
                    <input type="url" name="demo_url" value="{{ old('demo_url', $product->demo_url) }}" placeholder="https://wa.me/..."
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>
            </div>

            <div class="w-1/3 mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Order</label>
                <input type="number" name="order" value="{{ old('order', $product->order) }}"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.saas-products.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Update Product
            </button>
        </div>
    </form>
</div>
@endsection
