<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Mosque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class MosqueController extends Controller
{
    public function index()
    {
        return view('backend.mosque.index');
    }

    public function dataTable()
    {
        $query = Mosque::query();
        return DataTables::eloquent($query)
            ->addIndexColumn()
            ->addColumn('action', function(Mosque $mosque) {
                return '<a href="'.route('mosque.edit',['mosque' => $mosque->id]).'" class="btn btn-primary bg-gradient-primary btn-sm btn-edit"><i class="fa fa-edit"></i></a>
                        <a role="button" data-id="'.$mosque->id.'" class="btn btn-danger btn-sm btn-delete"><i class="fa fa-trash"></i></a>';

            })
//            ->addColumn('activity_category_name', function(Mosque $activity) {
//                return $activity->activityCategory->name ?? '';
//            })
//            ->addColumn('image', function(Mosque $activity) {
//                return '<img height="100px" src="'.asset($activity->attachments->first()->file ?? '').'">';
//            })
            ->rawColumns(['action'])
            ->toJson();
    }

    public function create(){
        return view('backend.mosque.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'google_map_url' => 'required|max:255',
            'establist_year' => 'required|max:255',
            'total_commitee_members' => 'nullable|digits_between:1,2',
        ],[
            'name.required' => 'Mosque name is required.',
        ]);

        DB::beginTransaction();
        try {

            $mosque = Mosque::create($validateData);

            DB::commit();
            return redirect()->route('mosque.index')->with('success','Mosque created successfully.');

        }catch (\Exception $e){
            DB::rollBack();

            return response()->json([
                'status'=>false,
                'message'=>$e->getMessage(),
            ]);
        }
    }
    public function show(Mosque $mosque){

    }

    public function edit(Mosque $mosque)
    {

    }

    public function update(Request $request, Mosque $mosque){

    }

    public function destroy(Mosque $mosque){

    }
}
