@extends('layouts.app2')

@section('content')
<br>
<h3>Create Album</h3>
<br>
@include('inc.messages')
  <form  action="/albums/store" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" placeholder="Album Name">

    </div>
    <textarea name="description" placeholder="Album Description" rows="8" cols="80"></textarea>


             <input type="file" name="cover_image" class="form-control" >



    <button class="btn btn-success" type="submit" name="submit">Save</button>
      @csrf
  </form>

@endsection
