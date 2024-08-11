<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use App\Http\Resources\CourseResource;
use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $courses = DB::table('courses')
            ->when($request->input('course_name'), function ($query, $course_name) {
                return $query->where('course_name', 'like', '%' . $course_name . '%');
            })
            ->select('id', 'course_name', 'description', 'duration')
            ->orderBy('id', 'desc')
            ->paginate(15);
            return view('pages.users.course.index', compact('courses'));

    }

    public function create()
    {
        return view('pages.users.course.create');
    }

    public function store(StoreCourseRequest $request)
    {

        Course::create([
            'course_name' => $request['course_name'],
            'description' => $request['description'],
            'duration' => $request['duration'],
        ]);

        return redirect(route('course.index'))->with('success', 'Create New Course Successfully');
    }

    public function edit(Course $course)
    {
        return view('pages.users.course.edit')->with('course', $course);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateCourseRequest $request, Course $course)
    {
        $validate = $request->validated();
        $course->update($validate);
        return redirect()->route('course.index')->with('success', 'Edit Course Successfully');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect(route('course.index'))->with('success', 'Delete Course successfully');
    }
}


    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('pages.users.kursus.create');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \App\Http\Requests\StoreMateriRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama_kursus' => ['required'],
    //         'deskripsi' => ['required'],
    //         'durasi' => ['required'],
    //     ]);
    //     $validatedData['slug'] = Str::slug($request->nama_kursus);
       
    //     Course::create($validatedData);

    //     return redirect()->route('kursus');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Materi  $materi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Course $Course)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Materi  $materi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Course $course)
    // {
    //     return view('pages.users.kursus.edit', compact('course'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdateMateriRequest  $request
    //  * @param  \App\Models\Materi  $materi
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     // $validatedData = $request->validate([
    //     //     'nama_kursus' => ['required'],
    //     //     'deskripsi' => ['required'],
    //     //     'durasi' => ['required'],
    //     // ]);
    //     $validatedData=$request->all();
    //     $validatedData['slug'] = Str::slug($request->nama_kursus);
    //     $Course=Course::findOrFail($id);
    //     $Course->update($validatedData);

    //     return redirect()->route('kursus');
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Materi  $materi
    //  * @return \Illuminate\Http\Response
    //  */
    // // public function destroy(Course $Course)
    // // {
    // //     $Course->delete();
    // //     return redirect()->back();
    // // }


