@extends('layouts.admin')

@section('title', 'Edit Advisory Item')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Edit Advisory Item</h6>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <form action="{{ route('admin.advisory.update', $advisoryItem->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-612">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" 
                                       value="{{ old('title', $advisoryItem->title) }}" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description" class="form-control-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" required>{{ old('description', $advisoryItem->description) }}</textarea>
                    </div>
{{-- 
                    <div class="form-group">
                        <label for="content" class="form-control-label">Content</label>
                        <textarea name="content" id="content" class="form-control" rows="3" required>{{ old('content', $advisoryItem->content) }}</textarea>
                  
                    </div> --}}

                    <div class="form-group">
                        <label for="image" class="form-control-label">Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                        @if($advisoryItem->image_path)
                            <div class="mt-3">
                                <img src="{{ asset($advisoryItem->image_path) }}" width="200" class="img-thumbnail">
                                <p class="text-sm text-muted mt-1">Current image</p>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="checkbox" name="remove_image" id="remove_image">
                                    <label class="form-check-label" for="remove_image">
                                        Remove current image
                                    </label>
                                </div>
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <a href="{{ route('admin.advisory.index') }}" class="btn btn-light me-3">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update Item</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection