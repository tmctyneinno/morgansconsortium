@extends('layouts.admin')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                    <h6>Advisory Items</h6>
                    <a href="{{ route('admin.advisory.create') }}" class="btn btn-primary btn-sm">
                        <i class="fas fa-plus me-1"></i> Add New
                    </a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show mx-4" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="table-responsive p-4">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Description</th>
                                    {{-- <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content</th> --}}
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <div>
                                                <img src="{{ asset($item->image_path) }}" class="avatar avatar-sm me-3" alt="{{ $item->title }}">
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ $item->title }}</p>
                                    </td>
                                    <td>
                                        <p class="text-xs text-secondary mb-0">{{ Str::limit($item->description, 50) }}</p>
                                    </td>
                                    {{-- <td>
                                        <p class="text-xs font-weight-bold mb-0">{{ Str::limit($item->content, 50) }}</p>
                                    </td> --}}
                                    <td class="align-middle"> 
                                        <div class="d-flex">
                                            <a href="{{ route('admin.advisory.edit', encrypt($item->id)) }}" class="btn btn-link text-info px-3 mb-0">
                                                <i class="fas fa-pencil-alt text-dark me-2"></i>Edit
                                            </a>
                                            <form action="{{ route('admin.advisory.destroy', encrypt($item->id)) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger px-3 mb-0" onclick="return confirm('Are you sure?')">
                                                    <i class="far fa-trash-alt me-2"></i>Delete
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection