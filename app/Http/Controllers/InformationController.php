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
        return view('admin.index', compact('courses', 'carousels', 'info'));
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

            foreach ($request->courses as $course) {
                $image = $course['image'];
                $course = Course::create([
                    'name' => $course['name'],
                    'description' => $course['description'],
                    'image' => $image->store('courses', 'public'),
                ]);

                $topics = $course['topics'];
                foreach ($topics as $topic) {
                    CourseTopic::create([
                        'course_id' => $course->id,
                        'name' => $topic['name'],
                    ]);
                }
            }

            foreach ($request->carousels as $carousel) {
                $image = $carousel['image'];
                $carousel = Carousel::create([
                    'title1' => $carousel['title1'],
                    'title2' => $carousel['title2'],
                    'image' => $image->store('carousels', 'public'),
                ]);
            }

            $info = Information::create([
                'yt_link' => $request->yt_link,
                'cellphone' => $request->cellphone,
                'telephone' => $request->telephone,
                'email' => $request->email,
                'address' => $request->address,
            ]);

            DB::commit();
            return redirect()->route('admin.index');
        } catch (\Exception $e) {
            DB::rollBack();
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
        DB::beginTransaction();
        try {

            // dlte all courses
            Course::truncate();
            // delete all carousels
            Carousel::truncate();

            foreach ($request->courses as $course) {
                $image = $course['image'];
                $course = Course::create([
                    'name' => $course['name'],
                    'description' => $course['description'],
                    'image' => $image->store('courses', 'public'),
                ]);

                $topics = $course['topics'];
                foreach ($topics as $topic) {
                    CourseTopic::create([
                        'course_id' => $course->id,
                        'name' => $topic['name'],
                    ]);
                }
            }

            foreach ($request->carousels as $carousel) {
                $image = $carousel['image'];
                $carousel = Carousel::create([
                    'title1' => $carousel['title1'],
                    'title2' => $carousel['title2'],
                    'image' => $image->store('carousels', 'public'),
                ]);
            }

            $info = Information::find('1');
            $info->yt_link = $request->yt_link;
            $info->cellphone = $request->cellphone;
            $info->telephone = $request->telephone;
            $info->email = $request->email;
            $info->address = $request->address;
            $info->save();

            DB::commit();
            return redirect()->route('admin.index');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
