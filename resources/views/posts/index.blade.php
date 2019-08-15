@extends('layouts.app')
@section('content')
    @include('includes.result_messages')
    <!-- Blog Post -->
    @foreach($paginator as $item )
    <div class="card mb-4">
        <div class="card-body">
            <h2 class="card-title">{{$item->title}}</h2>
            <p class="card-text">{{$item->description}}</p>
        </div>
        <div class="card-footer text-muted">
            {{$item->created_at}}
            <hr>

            <div class="row wrap">
                <div class="col-lg-12 ">
                    <ol class="mb-0">

                        @foreach($item->tags as $tags )
                        <li>
                            {{$tags->name}}
                        </li>
                        @endforeach
                    </ol>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Pagination -->
    @if($paginator->total() > $paginator->count())
        <br>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        {{ $paginator->links() }}
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
