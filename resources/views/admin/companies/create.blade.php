@extends('layouts.admin')

@section('title', 'Create Company')
@section('page-title', 'Add New Company')

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Company Information</h3>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Company Name *</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Logo *</label>
                <input type="file" name="logo" accept="image/*" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <p class="mt-1 text-sm text-gray-500">Recommended: PNG/SVG with transparent background</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Order</label>
                    <input type="number" name="order" value="{{ old('order', 0) }}"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <p class="mt-1 text-sm text-gray-500">Lower number appears first</p>
                </div>

                <div class="flex items-center pt-7">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}
                           class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300 rounded">
                    <label for="is_active" class="ml-2 block text-sm text-gray-900">Active</label>
                </div>
            </div>
        </div>

        <div class="flex justify-between">
            <a href="{{ route('admin.companies.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Create Company
            </button>
        </div>
    </form>
</div>
@endsection
