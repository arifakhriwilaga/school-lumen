<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as DB;
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
        $data->nisn = $request->input('email');
        $data->nisn = $request->input('firstName');
        $data->nisn = $request->input('lastName');
        $data->nisn = $request->input('fullName');
        $data->nisn = $request->input('gender');
        $data->nisn = $request->input('bornDate');
        $data->nisn = $request->input('address');
        $data->save();
        return response('Berhasil Tambah Data');
    }

    //
}
