<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Spatie\PdfToImage\Pdf;
use Org_Heigl\Ghostscript\Ghostscript;
use Illuminate\Http\Request;
use App\Library;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $library=Library::all();
        return view('backend.library.index',compact('library'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.library.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[   
             "book_name"=>"required",
             "grade"=>"required",
             "faculty"=>"required",
             "book"=>"required",]);
        $library=new Library();
        $library->book_name=$request->book_name;
        $library->author=$request->author;
        $library->grade=$request->grade;
        if($request->faculty==="0" || $request->faculty==="4")
        {
            $request->faculty="Science";
        } else if($request->faculty==="1" || $request->faculty==="5")
        {
            $request->faculty="Management";

        }else if($request->faculty==="2")
        {
            $request->faculty="Humanities";

        }
        else if($request->faculty==="3")
        {
            $request->faculty="Law";
        }
        $library->faculty=$request->faculty;
        $library->stream=$request->stream;
        $book = $request->file('book');
         $extension = $book->getClientOriginalExtension();
         Storage::disk('public')->put($book->getFilename().'.'.$extension,  File::get($book));
      $library->book=$book->getFilename().'.'.$extension;
      Ghostscript::setGsPath('C:\Program Files\gs\gs9.53.3\bin\gswin64c.exe');
    
      $pdf=new Pdf($book);
      $output_file_name="thumbs_".uniqid().".png";
      $output_path=public_path()."\images\\".$output_file_name;
      $pdf->setPage(1)->setOutputFormat('png')->saveImage($output_path);
      $library->book_thumbnails=$output_file_name;

      $library->save();

      return redirect('/library')->with('success','Book added successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = Library::find($id);
        return response()->file(Storage::disk('public')->path($file->book));
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
        $library=Library::find($id);
        File::delete($library->book);
        $library->delete();
        return redirect('/library')->with('success','Book deleted successfully!');
    }
    public function search(Request $request)
    {
        $library=Library::where('book_name', 'LIKE', "%{$request->search}%")->get();;

        return view('backend.library.index',compact('library'));
    }
    public function filter(Request $request)
    {
        $library=new Library();
        $library=$library->newQuery();

       if($request->faculty==="0" || $request->faculty==="4")
        {
            $request->faculty="Science";
        } else if($request->faculty==="1" || $request->faculty==="5")
        {
            $request->faculty="Management";

        }else if($request->faculty==="2")
        {
            $request->faculty="Humanities";

        }
        else if($request->faculty==="3")
        {
            $request->faculty="Law";
        }
        if ($request->has('grade')&&$request->grade!="") {
            $library->where('grade', 'like', '%' . $request->grade . '%')
                ->get();
        }
  
        if ($request->has('faculty')&&$request->faculty!=""&&$request->stream=="") {
            $library->where('faculty', 'like', '%' . $request->faculty . '%')
                ->get();
        }
        if ($request->has('stream')&&$request->faculty!=""&&$request->stream!="") {
            $library->where('stream', 'like', '%' . $request->stream . '%')
                ->get();
        }
        $library=$library->get();
        return view('backend.library.index',compact('library'));

     
    }
}
