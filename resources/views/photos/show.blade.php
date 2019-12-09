@extends('layouts.app2')

@section('content')
<br>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.btn_download {
  background-color: DodgerBlue;
  border: none;
  color: white;
  padding: 12px 30px;
  cursor: pointer;
  font-size: 20px;
}
.btn_download:hover {
  text-decoration: none;
  background-color: RoyalBlue;
}
</style>

  <h3>{{$photo->title}}</h3>
  <p>{{$photo->description}}</p>
  <a class="button secondary" href="/albums/{{$photo->album_id}}">Back To Gallery</a>
  <br>
  <a href="/photos/{{$photo->id}}/download" class="btn_download"><i class="fa fa-download"> </i>Download</a>
  <hr>

  <img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="{{$photo->title}}">
  <hr>

  <form action="/photos/{{$photo->id}}" method="post" >
    <button class="btn btn-danger" type="submit" name="submit">Delete</button>
  @csrf
</form>

  <small>Size: {{$photo->size}} KB</small>
@endsection
