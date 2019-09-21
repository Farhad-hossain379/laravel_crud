<?php

namespace App\Http\Controllers;
use App\Department;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
class UserController extends Controller
{
    public function userView()
    {
        return view('userview');
    }
    public function formSubmit( Request $req)
    {
             echo $req->input(['email']);
    }

    public function departments()
    {
        //$departments = Department::where('id', '>', 1)->get();
        $departments = Department::all();
        //return view('departments')->with('departments', $departments);
        /*return view('departments', [
            'departments' => $departments
        ]);*/
        return view('departments', compact('departments'));
    }
    public function createDepartment()
    {
        return view('create_department');
    }
    public function createDepartmentPost(Request $request)
    {
        Department::create($request->all());
        return redirect('departments');
    }
    public function editDepartment( Department $department )
    {
        //$department = Department::findOrFail($id); // id pass then query using this id
        return view('edit_department', compact('department'));
    }
    public function editDepartmentPost(Request $request)
    {
        $id = $request->id;
        $department_name = $request->department_name;
        $department_short_name = $request->department_short_name;
        Department::whereId($id)->update(['department_name'=>$department_name,'department_short_name'=>$department_short_name ]);
        return redirect('departments');
    }
    public function deleteDepartment($id)
    {
        Department::destroy($id);
        return redirect()->back();
        //Department::where('id', $id)->delete();
    }

}
