@extends('layouts.admin')

@section('title', 'Create Team Member')
@section('page-title', 'Add New Team Member')

@section('content')
<div class="max-w-2xl">
    <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Member Information</h3>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Name *</label>
                <input type="text" name="name" value="{{ old('name') }}" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Position *</label>
                <input type="text" name="position" value="{{ old('position') }}" required
                       placeholder="e.g., Fullstack Developer, UI/UX Designer"
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-700 mb-2">Photo *</label>
                <input type="file" name="photo" accept="image/*" required
                       class="w-full px-4 py-2 border border-gray-300 rounded-lg">
                <p class="mt-1 text-sm text-gray-500">Recommended: Square photo (500x500px)</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Visual Settings</h3>

            <div class="grid md:grid-cols-2 gap-4 mb-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gradient From *</label>
                    <input type="text" name="gradient_from" value="{{ old('gradient_from', 'blue-600') }}" required
                           placeholder="blue-600"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <p class="text-xs text-gray-500 mt-1">For card background gradient</p>
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Gradient To *</label>
                    <input type="text" name="gradient_to" value="{{ old('gradient_to', 'purple-600') }}" required
                           placeholder="purple-600"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    <p class="text-xs text-gray-500 mt-1">For card background gradient</p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6 mb-6">
            <h3 class="text-lg font-semibold mb-4">Settings</h3>

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
            <a href="{{ route('admin.team-members.index') }}" class="px-6 py-2 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50">
                Cancel
            </a>
            <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                Create Team Member
            </button>
        </div>
    </form>
</div>
@endsection
