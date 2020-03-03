<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patiant;
use App\User;

class UserController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
        $patiant = Patiant::all();
        $users = User::where('is_admin','0')->get();
        return view('administer.index',compact('patiant','users'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        return view('administer.createPatient');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $data)
  {
    $this->validate($data,[
        'name' => ['required', 'string', 'max:50'],
        'lastname' => ['required', 'string', 'max:50'],
        'address' => ['required', 'string', 'max:255'],
        'pid' => ['required', 'string', 'max:13'],
        'sex' => ['required', 'string', 'max:5'],
        'birth' => ['required', 'date'],
        'line' => ['string', 'max:50'],
        'patient_tel' => ['required', 'string', 'max:15'],
        'contact' => ['required', 'string', 'max:15'],
    ]);

    $patiant= new Patiant([

        'name' => $data->get('name'),
        'lastname' => $data->get('lastname'),
        'address' => $data->get('address'),
        'pid' => $data->get('pid'),
        'sex' => $data->get('sex'),
        'birth' => $data->get('birth'),
        'line' => $data->get('line'),
        'patient_tel' => $data->get('patient_tel'),
        'contact' => $data->get('contact'),
    ]);

    // dd($patiant);
    $patiant->save();

    return redirect()->route('admin.index')->with('success','เพิ่มข้อมูลเรียบร้อย');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {

  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {

  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {

  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $patient = Patiant::find($id);
    $patient->delete();
    return redirect()->route('admin.index')->with('success','ลบข้อมูลเรียบร้อย');
  }

  public function destroyUser($id)
  {
    $patient = Patiant::find($id);
    $patient->delete();
    return redirect()->route('admin.index')->with('success','ลบข้อมูลเรียบร้อย');
  }

}

?>
