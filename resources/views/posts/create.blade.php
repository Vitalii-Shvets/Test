@extends('layouts.app')
@section('content')
    @include('includes.result_messages')
    <h1 class="my-4">Створення поста</h1>
    <form method="POST" action="{{ route('posts.store')}}" enctype="multipart/form-data">
        @csrf
        @component('components.inputComponent',['idElement' => 'title','name' =>'Назва поста'])
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        @endcomponent
        @component('components.inputComponent',['idElement' => 'description','name' =>'Опис поста'])
            <textarea class="form-control" id="description" rows="5"
                      name="description">{{ old('description')}}</textarea>
        @endcomponent
        @component('components.inputComponent',['idElement' => 'tags','name' =>'Введіть тег'])
            <div class="input-group mb-3">
                <input type="text" class="form-control" aria-describedby="button-addon2" id="tags"
                       name="tags">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" disabled>+
                    </button>
                </div>
            </div>
        @endcomponent
        @component('components.inputComponent',['idElement' => 'listTags','name' =>'Список тегів'])
            <select multiple class="form-control overflow-hidden" id="listTags" name="listTags[]">
            </select>
        @endcomponent
        <button type="submit" class="btn btn-success">Зберегти</button>
    </form>
@endsection
