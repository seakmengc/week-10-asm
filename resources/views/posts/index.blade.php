@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Posts</div>

                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse ($posts as $ind => $post)
                            <tr>
                                <td>{{ $ind + 1 }}</td>
                                <td>{{ $post->name }}</td>
                                <td><a href="{{ route('categories.show', $post->category) }}">{{ $post->category->name }}</a></td>
                                <td>
                                    <form style="display: inline-block" action="{{ route('posts.show', $post) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-info">Show</button>
                                    </form>
                                    <form style="display: inline-block" action="{{ route('posts.edit', $post) }}" method="GET">
                                        <button type="submit" class="btn btn-outline-primary">Edit</button>
                                    </form>
                                    <form style="display: inline-block" action="{{ route('posts.destroy', $post) }}" method="post">
                                        @method('DELETE')
                                        @csrf

                                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td style="text-align: center" colspan="3">No post found. <a href="{{ route('posts.create') }}">Want to add one?</a></td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <div class="pagination justify-content-center">
                        {{ $posts->links() }}
                    </div>

                    <div class="pl-3 pb-3">
                        <a class="btn btn-primary" href="{{ route('posts.create') }}">Add</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
