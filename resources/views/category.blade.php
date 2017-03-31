@extends('welcome')
@section('content')
<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form method="POST" action="{{route("article.post")}}" class="from-horizontal">
    <div class="input-group"></div>
    <span>Title</span>
    <input type="text" name="name" placeholder="Wpisz tytuł">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <br/>
     <span>Content</span>
    <textarea name="Content" placeholder="Wpisz treść artykułu" rows="3"></textarea>
    <input type="hidden" name="token" value="{{csrf_token()}}">
      <br/>
    <button type="submit">Add Article</button>
    <button type="reset">Cancel</button>
    </form>

  
     @stop