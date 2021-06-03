<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
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
        $events=Event::orderBy('created_at','DESC')->paginate(8);
        return view('backend.events.index',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.events.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event=new Event();
        $event->event_title=$request->event_title;
        $event->event_category=$request->event_category;
        $event->event_description=$request->event_description;
        $event->event_start=$request->event_start;
        $event_photo = $request->file('event_image');
        $extension = $event_photo->getClientOriginalExtension();
        Storage::disk('public')->put($event_photo->getFilename().'.'.$extension,  File::get($event_photo));
      $event->event_image=$event_photo->getFilename().'.'.$extension;
        $event->save();
        return redirect('/admin/events')->with('success','Event added successfully!');
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
        return view('backend.events.show',compact('events'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events=Event::find($id);
        return view('backend.events.edit',compact('events'));
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
         $event=event::find($id);
        $event->event_title=$request->event_title;
        $event->event_category=$request->event_category;
        $event->event_description=$request->event_description;
        $event->event_start=$request->event_start;
       if($request->file('event_image'))
       {
        $event_photo = $request->file('event_image');
        $extension = $event_photo->getClientOriginalExtension();
        Storage::disk('public')->put($event_photo->getFilename().'.'.$extension,  File::get($event_photo));
        $event->event_image=$event_photo->getFilename().'.'.$extension;
       } 
       else{
           $event->event_image=$event->event_image;
       }
       $event->save();
      return redirect('/admin/events')->with('success','Event edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event=Event::find($id);
        File::delete($event->event_image);
        $event->delete();
        return redirect('/admin/events')->with('success','Events deleted successfully!');
    }
}
