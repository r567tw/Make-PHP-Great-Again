@extends('layouts.layout')

@section('content')
<h1 class="font-bold">編輯文章</h1>
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('article.update',$article->id)}}"
    method="post">
    @csrf
    @method('PUT')
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="title"">
            標題
        </label>
        <input class=" shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight
            focus:outline-none focus:shadow-outline" type=" text" name="title" id="title" value={{ $article->title }}>
    </div>
    <div class="mb-4">
        <label class="block text-gray-700 text-sm font-bold mb-2" for="content">
            內容
        </label>
        <textarea
            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
            name="content" id="content" cols="30" rows="10">{{ $article->content }}</textarea>
    </div>
    <button
        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
        type="submit">更新</button>
</form>


@endsection
