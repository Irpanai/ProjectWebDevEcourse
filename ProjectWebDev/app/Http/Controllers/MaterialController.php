<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMaterialRequest;
use App\Http\Requests\UpdateMaterialRequest;
use App\Http\Resources\MaterialResource;
use App\Http\Controllers\Controller;
use App\Models\Material;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MaterialController extends Controller
{
    public function index(Request $request)
    {
        $materials = DB::table('materials')
            ->join('courses', 'materials.course_id', '=', 'courses.id')
            ->when($request->input('course_name'), function ($query, $course_name) {
                return $query->where('courses.course_name', 'like', '%' . $course_name . '%');
            })
            ->select('materials.id', 'materials.title', 'materials.description', 'materials.material_link', 'courses.course_name') // Pilih course_name dari tabel courses
            ->orderBy('materials.id', 'desc')
            ->paginate(15);
    
        return view('pages.users.material.index', compact('materials'));
    }
    

    public function create()
    {
        return view('pages.users.material.create');
    }

    public function store(StoreMaterialRequest $request)
    {

        Material::create([
            'title' => $request['title'],
            'description' => $request['description'],
            'material_link' => $request['material_link'],
            'course_id' => $request['course_id'],
        ]);

        return redirect(route('material.index'))->with('success', 'Create New Material Successfully');
    }

    public function edit(Material $material)
    {
        return view('pages.users.material.edit')->with('material', $material);
    }

    public function show(string $id)
    {
        //
    }

    public function update(UpdateMaterialRequest $request, Material $material)
    {
        $validate = $request->validated();
        $material->update($validate);
        return redirect()->route('material.index')->with('success', 'Edit Material Successfully');
    }

    public function destroy(Material $material)
    {
        $material->delete();
        return redirect(route('material.index'))->with('success', 'Delete Material successfully');
    }
}

// use App\Models\Material;
// use App\Http\Requests\StoreMaterialRequest;
// use App\Http\Requests\UpdateMaterialRequest;
// use App\Models\Course;
// use Illuminate\Auth\Events\Validated;

// class MaterialController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index()
//     {
//         $material=Material::with('course')->get();

//         return view('pages.users.material.index', compact('materials'));
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         $course=Course::all();
//         return view('pages.users.materi.create', compact('course'));
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \App\Http\Requests\StoreMateriRequest  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(StoreMateriRequest $request)
//     {
//         $validated = $request->validated();

//         Materi::create($validated);

//         return redirect()->route('materi');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Materi  $materi
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Materi $materi)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Materi  $materi
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Materi $materi)
//     {
//         $course=Course::all();
//         return view('pages.users.materi.edit', compact('materi','course'));
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \App\Http\Requests\UpdateMateriRequest  $request
//      * @param  \App\Models\Materi  $materi
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UpdateMateriRequest $request, Materi $materi)
//     {
//         $validated = $request->validated();

//         $materi->update($validated);

//         return redirect()->route('materi');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Materi  $materi
//      * @return \Illuminate\Http\Response
//      */

//     public function destroy(Materi $materi)
//     {
//         $Course->delete();
//         return redirect(route('materi.index'))->with('success', 'Delete Materi successfully');
//     }
// }
