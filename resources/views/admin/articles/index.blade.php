@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

    @component('admin.components.breadcrumb')
        @slot('title') Список Новостей @endslot
        @slot('parent') Главная @endslot
        @slot('active') Новости @endslot
    @endcomponent

    <hr>
    <p class="text-right">
        <a href="{{ route('admin.article.create') }}" class="btn btn-primary">
            <i class="fa fa-plus-square-o"></i>
            Создать новость
        </a>
    </p>
    <table class="table table-striped">
        <thead>
            <th>Наименование</th>
            <th>Публикация</th>
            <th class="text-right">Действие</th>
        </thead>
        <tbody>
            @forelse ($articles as $article)
                <tr>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->published }}</td>
                    <td class="text-right">
                        <form onsubmit="if(confirm('Удалить?')){ return true }else{ return false }" action="{{ route('admin.article.destroy', $article) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            {{ csrf_field() }}
                            <a class="btn btn-light" href="{{ route('admin.article.edit', $article) }}"><i class="fa fa-edit"></i></a>
                            <button type="submit" class="btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center"><h2>Данные отсутствуют</h2></td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">
                    <div class="pull-right">
                        {{ $articles->links() }}
                    </div>
                </td>
            </tr>
        </tfoot>
    </table>
</div>

@endsection