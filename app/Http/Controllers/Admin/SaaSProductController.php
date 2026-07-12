<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SaaSProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SaaSProductController extends Controller
{
    public function index()
    {
        $products = SaaSProduct::ordered()->paginate(10);
        return view('admin.saas-products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.saas-products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'icon' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'description' => 'required|string',
            'features' => 'required|string',
            'active_users' => 'nullable|string|max:255',
            'daily_transactions' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'demo_url' => 'nullable|url|max:255',
            'order' => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['is_under_development'] = $request->has('is_under_development');

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('saas_products', 'public');
        }

        SaaSProduct::create($validated);

        return redirect()->route('admin.saas-products.index')
                        ->with('success', 'SaaS Product berhasil ditambahkan');
    }

    public function edit($id)
    {
        $product = SaaSProduct::findOrFail($id);
        return view('admin.saas-products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = SaaSProduct::findOrFail($id);
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'tagline' => 'required|string|max:255',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,webp,svg|max:2048',
            'icon' => 'nullable|string|max:255',
            'status' => 'nullable|string|max:255',
            'description' => 'required|string',
            'features' => 'required|string',
            'active_users' => 'nullable|string|max:255',
            'daily_transactions' => 'nullable|string|max:255',
            'url' => 'nullable|url|max:255',
            'demo_url' => 'nullable|url|max:255',
            'order' => 'nullable|integer',
        ]);

        $validated['is_active'] = $request->has('is_active');
        $validated['is_under_development'] = $request->has('is_under_development');

        if ($request->hasFile('logo')) {
            if ($product->logo) {
                Storage::disk('public')->delete($product->logo);
            }
            $validated['logo'] = $request->file('logo')->store('saas_products', 'public');
        }

        $product->update($validated);

        return redirect()->route('admin.saas-products.index')
                        ->with('success', 'SaaS Product berhasil diupdate');
    }

    public function destroy($id)
    {
        $product = SaaSProduct::findOrFail($id);

        if ($product->logo) {
            Storage::disk('public')->delete($product->logo);
        }

        $product->delete();

        return redirect()->route('admin.saas-products.index')
                        ->with('success', 'SaaS Product berhasil dihapus');
    }
}
