@extends('welcome')
@section('content')
<h4>{{$category->name}}</h4>
<ul>
    @foreach ($category->articles as $article)
    <li>{{$article->title}}</li>
    @endforeach
</ul>
<form method="POST" action="{{route("article.post")}}" class="category-form">
    <div class="articles">
    <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="Wpisz tytuł">
   </div>
    <input type="hidden" name="token" value="{{csrf_token()}}">
   
    
    <br/>
    <div class="form-group">
     <label>Content</label>
    <br/>
    <textarea name="content" class="form-control" placeholder="Wpisz treść artykułu" rows="3"></textarea>
   
    </div>
     <br/>
    <input type="hidden" name="category_id" value="{{$category->id}}">
    <br/>
    <button class="button-form" type="submit">Add Article</button>
    <button class="button-form" type="reset">Cancel</button>
    </div>
    </form>

    

  
     @stop