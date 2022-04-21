@extends('layouts.admin', [
    'heading' => 'Edit page'
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
    <form method="POST" action="{{ route('admin.pages.update', ['id' => $page->id]) }}">
        @csrf
        <div class="input-group input-group-static my-3">
            <label>Title</label>
            <input type="text" class="form-control" name="title" value="{{ $page->title }}">
        </div>
        <div class="input-group input-group-static my-3">
            <label>Menu Name</label>
            <input type="text" class="form-control" name="menu_name" value="{{ $page->menu_name }}">
        </div>
        <div class="input-group input-group-static my-3">
            <label>Heading</label>
            <input type="text" class="form-control" name="heading" value="{{ $page->heading }}">
        </div>
        <div class="input-group input-group-static my-3">
            <label>Content 1</label>
            <input type="text" class="form-control" name="content1" value="{{ $page->content1 }}">
        </div>
        <div class="input-group input-group-static my-3">
            <label>Content 2</label>
            <input type="text" class="form-control" name="content2" value="{{ $page->content2 }}">
        </div>
        <input class="btn btn-info" type="submit" value="Update">
    </form>
</div>
@endsection
