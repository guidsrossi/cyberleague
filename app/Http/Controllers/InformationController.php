<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Course;
use App\Models\CourseTopic;
use App\Models\Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        $carousels = Carousel::all();
        $info = Information::find('1');
        $topics = CourseTopic::all();

        // if (auth()->check()) {
            return view('admin.index', compact('courses', 'carousels', 'info', 'topics'));
        // }
        // return view('home.index', compact('courses', 'carousels', 'info', 'topics'));
        
    }
    public function home()
    {
        $courses = Course::all();
        $carousels = Carousel::all();
        $info = Information::find('1');
        $topics = CourseTopic::all();

        // if (auth()->check()) {
            // return view('admin.index', compact('courses', 'carousels', 'info', 'topics'));
        // }
        return view('home.index', compact('courses', 'carousels', 'info', 'topics'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {

            $carousels_ids = Carousel::all()->pluck('id')->toArray();
            $deleted_items = json_decode($request->deleted_items, true);
            if(!isset($request->carousels)){
                foreach ($carousels_ids as $carousel_id) {
                    $carousel = Carousel::find($carousel_id);
                    $carousel->delete();
                }
            }
            else{
                if(isset($request->carousels)){
                    foreach ($request->carousels as $carousel) {
                        if ($deleted_items != null && !in_array($carousel['carousels_id'], $deleted_items)){
                            $carousel = Carousel::find($carousel['carousels_id']);
                            $carousel->delete();
                        }
                        else if(in_array($carousel['carousels_id'], $carousels_ids)) {
                            // $image = $carousel['image'];
                            $carousel = Carousel::find($carousel['carousels_id']);
                            $carousel->title1 = $carousel['title1'];
                            $carousel->title2 = $carousel['title2'];
                            // $carousel->image = $image->store('carousels', 'public');
                            $carousel->save();
                        }
                        else{
                            $image = $carousel['image'];
                            $carousel = Carousel::create([
                                'title1' => $carousel['title1'],
                                'title2' => $carousel['title2'],
                                'image' => $image->store('carousels', 'public'),
                            ]);
                        }
                    }
                }
            }

            
            foreach ($request->courses as $course) {
                $course_db = Course::where('name', $course['name'])->first();
                if(!$course_db){

                    if($course['name'] != 'matematica'){
                        $image = $course['image'];
                        $course_db = Course::create([
                            'name' => $course['name'],
                            // 'description' => $course['description'],
                            'image' => $image->store('courses', 'public'),
                        ]);
                    }
                    else{
                        $course_db = Course::create([
                            'name' => $course['name']
                            // 'description' => $course['description'],
                        ]);
                    }
                }
                else{
                    $course_db->name = $course['name'];
                    // $course->description = $course['description'];
                    if(isset($course['image'])){
                        $image = $course['image'];
                        $course_db->image = $image->store('courses', 'public');
                    }
                    $course_db->save();
                }

                $topics_db = CourseTopic::where('course_id', $course_db->id)->get();
                foreach ($topics_db as $topic_db) {
                    $topic_db->delete();
                }

                if(isset($course['topics'])){
                    $topics = $course['topics'];
                    foreach ($topics as $topic) {
                        CourseTopic::create([
                            'course_id' => $course_db->id,
                            'name' => $topic['title'],
                            'description' => $topic['description'],
                        ]);
                    }
                }
            }
        


            $info = Information::find('1');
            if ($info) {
                $info->yt_link = $request->yt_link;
                $info->cellphone = $request->cellphone;
                $info->telephone = $request->telephone;
                $info->email = $request->email;
                $info->address = $request->address;
                $info->save();
            }
            else{
                $info = Information::create([
                    'yt_link' => $request->yt_link,
                    'cellphone' => $request->cellphone,
                    'telephone' => $request->telephone,
                    'email' => $request->email,
                    'address' => $request->address,
                ]);
            }

            DB::commit();
            return redirect()->route('admin.index');
        } catch (\Exception $e) {
            DB::rollBack();
            dd($e);
            return redirect()->route('admin.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
