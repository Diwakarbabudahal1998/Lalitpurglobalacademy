<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::orderBy('created_at','DESC')->paginate(8);
        return view('backend.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.news.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $news=new News();
      $news->news_title=$request->news_title;
      $news->news_category=$request->news_category;
      $news->news_description=$request->news_description;
      $news_photo = $request->file('news_image');
      $extension = $news_photo->getClientOriginalExtension();
      Storage::disk('public')->put($news_photo->getFilename().'.'.$extension,  File::get($news_photo));
    $news->news_image=$news_photo->getFilename().'.'.$extension;
      $news->save();
      return redirect('/admin/news')->with('success','News added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news=News::find($id);
        return view('backend.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news=News::find($id);
        return view('backend.news.edit',compact('news'));
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $news=News::find($id);
        $news->news_title=$request->news_title;
        $news->news_category=$request->news_category;
        $news->news_description=$request->news_description;
       if($request->file('news_image'))
       {
        $news_photo = $request->file('news_image');
        $extension = $news_photo->getClientOriginalExtension();
        Storage::disk('public')->put($news_photo->getFilename().'.'.$extension,  File::get($news_photo));
        $news->news_image=$news_photo->getFilename().'.'.$extension;
       } 
       else{
           $news->news_image=$news->news_image;
       }
       $news->save();
      return redirect('admin/news')->with('success','News edited successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $news=News::find($id);
        File::delete($news->news_image);
        $news->delete();
        return redirect('admin/news')->with('success','News deleted successfully!');
    
    }
}
