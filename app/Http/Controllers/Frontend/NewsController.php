<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\News;
use App\Backend\Event;
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
        $events=Event::all();
        foreach($news as $n)
        {
            $n->news_description=str_replace("&nbsp;", "", $n->news_description);
            $n->news_description=\Illuminate\Support\Str::limit(strip_tags($n->news_description),120,'');
         }
      return view('frontend.pages.news',compact('news','events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        $news=News::where('news_title', 'LIKE', "%{$request->search}%")
        ->orWhere('news_category', 'LIKE', "%{$request->search}%")
        ->paginate(8);
        $events=Event::all();
        foreach($news as $n)
        {
            $n->news_description=str_replace("&nbsp;", "", $n->news_description);
            $n->news_description=\Illuminate\Support\Str::limit(strip_tags($n->news_description),120,'');
         }
      return view('frontend.pages.news',compact('news','events'));
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
        return view('frontend.pages.single-news',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function filter($id)
    {
        $events=Event::all();
        $news=News::where('news_category',$id)->paginate(8);
        foreach($news as $n)
        {
            $n->news_description=str_replace("&nbsp;", "", $n->news_description);
            $n->news_description=\Illuminate\Support\Str::limit(strip_tags($n->news_description),120,'');
         }
        return view('frontend.pages.news',compact('news','events'));

    }
}
