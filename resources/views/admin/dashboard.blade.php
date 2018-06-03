@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Категорий {{ $count_categories }}</span></h2>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Материалы {{ $count_articles }}</span></h2>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Посетителей 0</span></h2>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Сегодня 0</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="list-group">
                    <a href="{{ route('admin.category.create') }}" class="list-group-item list-group-item-action active">Создать категорию</a>
                    @foreach($categories as $category)
                        <a href="{{ route('admin.category.edit', $category) }}" class="list-group-item list-group-item-action">
                            <h4 class="list-group-item-heading">{{ $category->title }}</h4>
                            <p class="list-group-item-text">
                                {{ $category->articles()->count() }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Создать материал</a>
                    @foreach($articles as $article)
                        <a href="{{ route('admin.article.edit', $article) }}" class="list-group-item list-group-item-action">
                            <h4 class="list-group-item-heading">{{ $article->title }}</h4>
                            <p class="list-group-item-text">
                                {{ $article->categories()->pluck('title')->implode(', ') }}
                            </p>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection