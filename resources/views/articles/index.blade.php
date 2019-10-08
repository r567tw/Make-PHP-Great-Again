@extends('layouts.app')

@section('content')
<div class="table-responsive col-md-12">
<h1>文章列表</h1>
<a href="{{ route('article.create') }}">新增文章</a>
<table class="table">
    <td class="">標題</td>
    <td class="">內容</td>
    <td class="">動作</td>
    @foreach($articles as $article)
    <tr class="">
        <td class="">{{ $article->title }}</td>
        <td class="">{{ $article->content }}</td>
        <td class="">
            <a href="{{ route('article.show',$article->id ) }}">查看</a>
            <a href="{{ route('article.edit',$article->id ) }}">編輯</a>
            <form method="POST" action="{{ route('article.destroy',$article->id ) }}">
                @csrf
                @method('delete')
                <button type="submit">刪除</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
</div>
{{ $articles->links() }}
@endsection

