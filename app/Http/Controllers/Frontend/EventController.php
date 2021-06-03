<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\News;
use App\Backend\Event;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news=News::all();
        $events=Event::orderBy('created_at','DESC')->paginate(8);
    
      return view('frontend.pages.events',compact('news','events'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $events=Event::find($id);
  
        return view('frontend.pages.single-event',compact('events'));
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
    public function search(Request $request)
    {
        $events=Event::where('event_title', 'LIKE', "%{$request->search}%")
        ->orWhere('event_category', 'LIKE', "%{$request->search}%")
        ->paginate(8);
        $news=News::all();
        
      return view('frontend.pages.events',compact('news','events'));
     
    }

    public function filter($id)
    {
        $news=News::all();
        $events=Event::where('event_category',$id)->paginate(8);
        return view('frontend.pages.events',compact('news','events'));

    }
}
