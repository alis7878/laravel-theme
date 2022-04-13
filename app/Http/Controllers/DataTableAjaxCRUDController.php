<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use Datatables;

class DataTableAjaxCRUDController extends Controller
{

    public function index()
    {
        if(request()->ajax()) {
            return datatables()->of(User::select('*'))
            ->addColumn('action', 'company-action')
            ->rawColumns(['action'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('home');
    }



    public function store(Request $request)
    {

        $companyId = $request->id;

        $company   =   User::updateOrCreate(
                    [
                     'id' => $companyId
                    ],
                    [
                    'name' => $request->name,
                    'email' => $request->email,
                    'phone' => $request->phone,
                    'age' => $request->age,
                    'gender' => $request->gender,
                    'edudetails' => $request->edudetails,
                    'sports' => $request->sports,
                    ]);
                    // dd($company);
        return Response()->json($company);

    }



    public function edit(Request $request)
    {
        $where = array('id' => $request->id);
        $company  = User::where($where)->first();

        return Response()->json($company);
    }



    public function destroy(Request $request)
    {
        $company = User::where('id',$request->id)->delete();

        return Response()->json($company);
    }
}
