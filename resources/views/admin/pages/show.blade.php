@extends('layouts.admin', [
    'heading' => 'Page View'
])

@section('content')
<div class="container-fluid py-4">
    <dl class="row">
        <dt class="col-sm-3">Title</dt>
        <dd class="col-sm-9">{{ $page->title }}</dd>

        <dt class="col-sm-3">Menu Name</dt>
        <dd class="col-sm-9">{{ $page->menu_name }}</dd>

        <dt class="col-sm-3">Heading</dt>
        <dd class="col-sm-9">{{ $page->heading }}</dd>

        <dt class="col-sm-3">Slug</dt>
        <dd class="col-sm-9">{{ $page->slug }}</dd>

        <dt class="col-sm-3">Content 1</dt>
        <dd class="col-sm-9">{{ $page->content1 }}</dd>

        <dt class="col-sm-3">Content 2</dt>
        <dd class="col-sm-9">{{ $page->content2 }}</dd>

        <dt class="col-sm-3">Crated</dt>
        <dd class="col-sm-9">{{ $page->created_at }}</dd>

    </dl>
</div>
@endsection
