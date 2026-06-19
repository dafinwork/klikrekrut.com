<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('admin.packages.index', compact('packages'));
    }

    public function create()
    {
        return view('admin.packages.form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'type' => 'required',
            'badge' => 'nullable|string',
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'price' => 'required|numeric',
            'preview_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'nullable|date',
            'speaker_name' => 'nullable|string',
            'speaker_profile' => 'nullable|string',
            'background_info' => 'nullable|string',
            'benefits' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(storage_path('app/public/packages'), $filename);
            $validated['image'] = 'packages/' . $filename;
        }

        Package::create($validated);
        return redirect()->route('admin.packages.index')->with('success', 'Package created successfully.');
    }

    public function edit(Package $package)
    {
        return view('admin.packages.form', compact('package'));
    }

    public function update(Request $request, Package $package)
    {
        $validated = $request->validate([
            'type' => 'required',
            'badge' => 'nullable|string',
            'title' => 'required|string',
            'subtitle' => 'nullable|string',
            'price' => 'required|numeric',
            'preview_link' => 'nullable|url',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'event_date' => 'nullable|date',
            'speaker_name' => 'nullable|string',
            'speaker_profile' => 'nullable|string',
            'background_info' => 'nullable|string',
            'benefits' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            if ($package->image) {
                $oldPath = storage_path('app/public/' . $package->image);
                if (file_exists($oldPath)) {
                    @unlink($oldPath);
                }
            }
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(storage_path('app/public/packages'), $filename);
            $validated['image'] = 'packages/' . $filename;
        }

        $package->update($validated);
        return redirect()->route('admin.packages.index')->with('success', 'Package updated successfully.');
    }

    public function destroy(Package $package)
    {
        if ($package->image) {
            $oldPath = storage_path('app/public/' . $package->image);
            if (file_exists($oldPath)) {
                @unlink($oldPath);
            }
        }
        $package->delete();
        return redirect()->route('admin.packages.index')->with('success', 'Package deleted successfully.');
    }
}

