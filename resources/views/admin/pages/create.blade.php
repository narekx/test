@extends('layouts.admin', [
    'heading' => 'Create page'
])

@section('content')
<div class="container-fluid py-4">
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                <span class="alert-icon align-middle">
                </span>
                <span class="alert-text">{{ $error }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endforeach
    @endif
    <form method="POST" action="{{ route('admin.pages.store') }}">
        @csrf
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Menu Name</label>
            <input type="text" class="form-control" name="menu_name">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Heading</label>
            <input type="text" class="form-control" name="heading">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Content 1</label>
            <input type="text" class="form-control" name="content1">
        </div>
        <div class="input-group input-group-outline my-3">
            <label class="form-label">Content 2</label>
            <input type="text" class="form-control" name="content2">
        </div>
        <input class="btn btn-info" type="submit" value="Create">
    </form>
</div>
@endsection
