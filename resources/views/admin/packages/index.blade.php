@extends('admin.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Manage Packages</h3>
    <a href="{{ route('admin.packages.create') }}" class="btn btn-primary"><i class="bi bi-plus-lg"></i> Add New Package</a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">
        <table class="table table-hover mb-0">
            <thead class="table-light">
                <tr>
                    <th class="px-4 py-3">Image</th>
                    <th class="py-3">Title</th>
                    <th class="py-3">Type</th>
                    <th class="py-3">Price</th>
                    <th class="py-3 text-end px-4">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($packages as $package)
                <tr>
                    <td class="px-4 align-middle">
                        @if($package->image)
                            <img src="{{ asset('storage/' . $package->image) }}" alt="{{ $package->title }}" style="width: 50px; height: 50px; object-fit: cover; border-radius: 8px;">
                        @else
                            <div style="width: 50px; height: 50px; background-color: #e9ecef; border-radius: 8px; display: flex; align-items: center; justify-content: center;">
                                <i class="bi bi-image text-muted"></i>
                            </div>
                        @endif
                    </td>
                    <td class="align-middle fw-semibold">{{ $package->title }}</td>
                    <td class="align-middle"><span class="badge bg-secondary">{{ $package->type }}</span></td>
                    <td class="align-middle">Rp {{ number_format($package->price, 0, ',', '.') }}</td>
                    <td class="align-middle text-end px-4">
                        <a href="{{ route('admin.packages.edit', $package->id) }}" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil"></i></a>
                        <form action="{{ route('admin.packages.destroy', $package->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this package?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-muted">No packages found. Click "Add New Package" to create one.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
