<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\TestimonialResource;
use App\Models\Testimonial;
class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //return  Testimonial::all();
        $testimonials=Testimonial::paginate(10);
        return TestimonialResource::collection($testimonials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //   $testimonial=new Testimonial;
      //  // $testimonial->testimonial_id=$req->testimonial_id;
      //   $testimonial->name=$req->name;
      //   $testimonial->email=$req->email;
      //   $testimonial->phoneno=$req->phoneno;
      //   $testimonial->posting_date=$request->posting_date;
      //   $testimonial->message=$request->message;
      //   if($testimonial->save())
      //   {
      //     return new TestimonialResource($testimonial);
      //   }
      return view('testimonials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $testimonial=new Testimonial;
         $testimonial->id=$request->id;
         $testimonial->testimonial=$request->testimonial;
         $testimonial->email_id=$request->email_id;
         $testimonial->status=$request->status;
         $testimonial->posting_date=$request->posting_date;

        //  $result=$testimonial->save();
        //  if($result)
        //   {
        //       return["Result"=>"your message sended!"];
        //   }
        //   else{
        //       return["Result"=>"error"];
        //   }
         if($testimonial->save())
         {
           return new TestimonialResource($testimonial);
         }
     // return response()->json([
             //"message" => "testimonial record created"
        // ], 201);
       

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    { 
        $testimonial=Testimonial::find($id);
        return new TestimonialResource($testimonial);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $testimonial = Testimonial::find($id);
      //return view('testimonials.edit', compact('testimonial'));  
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
         $testimonial=Testimonial::find($id);
         $testimonial->testimonial=$request->testimonial;
         $testimonial->email_id=$request->email_id;
         $testimonial->status=$request->status;
         $testimonial->posting_date=$request->posting_date;
        
         if($testimonial->save())
        {
          return new TestimonialResource($testimonial);
        }
    //   $request->validate([
    //     'testimonial'=>'required',
    //     'email_id'=>'required',
    //     'status'=>'required'
    // ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $testimonial=Testimonial::find($id);
         
           if($testimonial->delete())
           {
             return new TestimonialResource($testimonial);
           }

      //  $testimonial = Testimonial::find($id);
      //   $testimonial->delete();

      //   return redirect('/testimonials')->with('success', 'testimonial deleted!');
    }
}
