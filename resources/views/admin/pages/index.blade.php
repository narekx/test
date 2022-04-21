@extends('layouts.admin', [
    'heading' => 'Pages table'
])

@section('content')
<div class="container-fluid py-4">
    <a href="{{ route('admin.pages.create') }}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Create Page</a>
    <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
                <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">id</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Menu Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Heading</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Slug</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content 1</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Content 2</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
               <tr>
                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->id }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->title }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->menu_name }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->heading }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->slug }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->content1 }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->content2 }}</p>
                   </td>

                   <td>
                       <p class="text-xs font-weight-bold mb-0">{{ $page->created_at }}</p>
                   </td>
                   <td>
                       <div class="dropdown">
                           <button class="btn bg-gradient-info dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                               Primary
                           </button>
                           <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <li><a class="dropdown-item" href="{{ route('admin.pages.edit', ['id' => $page->id]) }}">Edit</a></li>
                               <li>
                                   <form method="POST" action="{{ route('admin.pages.delete', ['id' => $page->id]) }}">
                                       @csrf
                                       <input type="submit" class="dropdown-item" value="Delete">
                                   </form>
                               </li>
                               <li><a class="dropdown-item" href="{{ route('admin.pages.show', ['id' => $page->id]) }}">Show</a></li>
                           </ul>
                       </div>
                   </td>
               </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
