@extends('admin.layout')

@section('content')
<div class="mb-4">
    <a href="{{ route('admin.packages.index') }}" class="text-decoration-none text-muted"><i class="bi bi-arrow-left"></i> Back to Packages</a>
    <h3 class="mt-2">{{ isset($package) ? 'Edit Package' : 'Create New Package' }}</h3>
</div>

<div class="card border-0 shadow-sm" style="max-width: 800px;">
    <div class="card-body p-4">
        <form action="{{ isset($package) ? route('admin.packages.update', $package->id) : route('admin.packages.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @if(isset($package))
                @method('PUT')
            @endif

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Type</label>
                    <select name="type" class="form-select" required>
                        <option value="Live Class" {{ (old('type', $package->type ?? '') == 'Live Class') ? 'selected' : '' }}>Live Class</option>
                        <option value="E-Learning" {{ (old('type', $package->type ?? '') == 'E-Learning') ? 'selected' : '' }}>E-Learning</option>
                        <option value="Mentoring" {{ (old('type', $package->type ?? '') == 'Mentoring') ? 'selected' : '' }}>Mentoring</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Badge Label (Optional)</label>
                    <input type="text" name="badge" class="form-control" placeholder="e.g. CONSULT, CAREER" value="{{ old('badge', $package->badge ?? '') }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Title</label>
                <input type="text" name="title" class="form-control" required value="{{ old('title', $package->title ?? '') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Subtitle / Speaker (Optional)</label>
                <input type="text" name="subtitle" class="form-control" placeholder="e.g. Andi - Senior HR Google" value="{{ old('subtitle', $package->subtitle ?? '') }}">
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price (Rp)</label>
                    <input type="number" name="price" class="form-control" required value="{{ old('price', $package->price ?? 0) }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">YouTube Preview Link (Optional)</label>
                    <input type="url" name="preview_link" class="form-control" placeholder="https://www.youtube.com/watch?v=..." value="{{ old('preview_link', $package->preview_link ?? '') }}">
                </div>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Image</label>
                @if(isset($package) && $package->image)
                    <div class="mb-2">
                        <img src="{{ asset('storage/' . $package->image) }}" alt="Current Image" style="height: 100px; border-radius: 8px;">
                    </div>
                @endif
                <input type="file" name="image" class="form-control" accept="image/*">
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4 fw-bold">{{ isset($package) ? 'Update Package' : 'Save Package' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection
