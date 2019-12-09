<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Album;

class AlbumsController extends Controller
{


  public function __construct()
  {
      $this->middleware('auth');
  }

    public function index(){
      $albums = Album::with('Photos')->get();
      return view('albums.index')->with('albums', $albums);
    }

    public function create(){
      return view('albums.create');
    }

    public function Store(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'description' => 'required',
        'cover_image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

      ]);

      // Get filename with extension
      $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

      // Get just the filename
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      // Get extension
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      // Create new filename
      $filenameToStore = $filename.'_'.time().'.'.$extension;

      // Uplaod image
      $path= $request->file('cover_image')->storeAs('public/album_covers', $filenameToStore);

      // Create album
      $album = new Album;
      $album->name = $request->input('name');
      $album->description = $request->input('description');
      $album->cover_image = $filenameToStore;

      $album->save();

      return redirect('/albums')->with('success', 'Album Created');
    }

    public function index1()
{
    $user_id = auth()->user()->id;

    $user = User::find($user_id);

    return view('login');
}

   public function show($id){
     $album = Album::with('Photos')->find($id);
     return view('albums.show')->with('album', $album);
}


public function destroyalbum($id){
     $album = Album::find($id);

if(Storage::delete('public/album_covers/'.$album->cover_image)){

    Storage::deleteDirectory('public/photos/'.$id);
     $album->delete();

  return redirect('/albums')->with('success', 'Album Deleted');
}
}

public function index2()
{
$user_id = auth()->user()->id;

$user = User::find($user_id);

return view('login');
}


}
