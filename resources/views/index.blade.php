@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            Laravel 8 - Add Blog Post Form Example
        </div>
        <div class="card-body">
            @include('components.search-form', ['search' => $search])

            <div class="mt-4">
                <h4>Added Posts:</h4>
                @include('components.post-list', ['posts' => $posts])
            </div>

            @include('components.add-post-form')
        </div>
    </div>
@endsection
