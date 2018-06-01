@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Категорий 0</span></h2>
                </div>
            </div>
            <div class="col">
                <div class="jumbotron text-center">
                    <h2><span class="badge badge-primary">Материалы 0</span></h2>
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
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">Категория первая</h4>
                        <p class="list-group-item-text">
                            Кол-во материалов
                        </p>
                    </a>
                </div>
            </div>
            <div class="col">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Создать материал</a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">Материал первый</h4>
                        <p class="list-group-item-text">
                            Категория
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection