@extends('layouts.admin')

@section('title', 'Create Advisory Item')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Create Advisory Item</h6> {{-- Changed to static text since this is create page --}}
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <form action="{{ route('admin.advisory.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ old('title') }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description') }}</textarea>
                    </div>

                    {{-- <div class="form-group">
                        <label for="link_text" class="form-control-label">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="3" >{{ old('content') }}</textarea>
                    </div> --}}

                    <div class="form-group">
                        <label for="image" class="form-control-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.advisory.index') }}" class="btn btn-light me-3">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection