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
                    <input type="text" name="badge" class="form-control" placeholder="e.g. HOT DEAL, BESTSELLER" value="{{ old('badge', $package->badge ?? '') }}">
                    <small class="text-muted">Hanya tampil untuk E-Learning. Kosongkan untuk Mentoring.</small>
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
                    <small class="text-muted">Isi 0 untuk menampilkan "Free".</small>
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

            <hr class="my-4">
            <h5 class="fw-bold mb-3"><i class="bi bi-gear"></i> Detail Tambahan</h5>

            <div class="mb-3">
                <label class="form-label fw-semibold">Tanggal & Jam Event</label>
                <input type="datetime-local" name="event_date" class="form-control" value="{{ old('event_date', isset($package) && $package->event_date ? $package->event_date->format('Y-m-d\TH:i') : '') }}">
                <small class="text-muted">Khusus Live Class — digunakan untuk countdown otomatis.</small>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Nama Speaker / Mentor</label>
                    <input type="text" name="speaker_name" class="form-control" placeholder="e.g. Kak Andi" value="{{ old('speaker_name', $package->speaker_name ?? '') }}">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-semibold">Profil Speaker / Mentor</label>
                    <input type="text" name="speaker_profile" class="form-control" placeholder="e.g. Senior HR Google" value="{{ old('speaker_profile', $package->speaker_profile ?? '') }}">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Background / Deskripsi Event</label>
                <textarea name="background_info" class="form-control" rows="3" placeholder="Deskripsi lengkap tentang kelas/event ini...">{{ old('background_info', $package->background_info ?? '') }}</textarea>
            </div>

            <div class="mb-4">
                <label class="form-label fw-semibold">Benefit / Manfaat</label>
                <textarea name="benefits" class="form-control" rows="3" placeholder="Manfaat mengikuti kelas ini... (satu per baris)">{{ old('benefits', $package->benefits ?? '') }}</textarea>
            </div>

            <div class="text-end">
                <button type="submit" class="btn btn-primary px-4 fw-bold">{{ isset($package) ? 'Update Package' : 'Save Package' }}</button>
            </div>
        </form>
    </div>
</div>
@endsection

