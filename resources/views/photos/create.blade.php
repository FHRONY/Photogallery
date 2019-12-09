@extends('layouts.app2')
@section('content')
<br>
<h3>Upload Photo</h3>
<br>
@include('inc.messages')
  <a class="button secondary" href="/albums/{{$album_id}}">Go Back</a>
  <form  action="/photos/store" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="title" placeholder="Photo Title">

    </div>
    <textarea name="description" placeholder="Photo Description" rows="8" cols="80"></textarea>



    <input type="hidden"  name="album_id" value="<?php echo $album_id;?>">

             <input type="file" name="photo" class="form-control" >


    <button class="btn btn-success" type="submit" name="submit">Save</button>
      @csrf
  </form>

@endsection
