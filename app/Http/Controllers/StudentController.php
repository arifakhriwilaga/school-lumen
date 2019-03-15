<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Student;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index() {
        $data = Student::index();
        return response($data);
    }

    public function show($id) {
        $data = Student::detail($id);
        return response($data);
    }

    public function store (Request $request) {
        $data = new Student();
        $data->nisn = $request->input('nisn');
        $data->email = $request->input('email');
        $data->firstName = $request->input('firstName');
        $data->lastName = $request->input('lastName');
        $data->fullName = $request->input('fullName');
        $data->gender = $request->input('gender');
        $data->bornDate = $request->input('bornDate');
        $data->address = $request->input('address');
        $data->save();
        return response('Berhasil Tambah Data');
    }

    public function update(Request $request, $id){
        $data = Student::where('id',$id)->first();
        // var_dump($data);die();
        $data->nisn = $request->input('nisn');
        $data->email = $request->input('email');
        $data->firstName = $request->input('firstName');
        $data->lastName = $request->input('lastName');
        $data->fullName = $request->input('fullName');
        $data->gender = $request->input('gender');
        $data->bornDate = $request->input('bornDate');
        $data->address = $request->input('address');
        $data->save();
    
        return response('Berhasil Merubah Data');
    }
    
    public function destroy($id){
        $data = Student::where('id',$id)->first();
        $data->delete();
    
        return response('Berhasil Menghapus Data');
    }
}
