<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patiant;

class PatiantController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // return view('provider.register.createPatiant');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    return view('provider.register.createPatiant');
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

    return redirect()->route('physician.home')->with('success','เพิ่มข้อมูลเรียบร้อย');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
        $patiant = Patiant::find($id);
        // $user = User::find($id);
        // dd($patient);
        return view('provider.physician.profile',compact('patiant'));
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $patiant = Patiant::find($id);
    // dd($patiant);
    return view('provider.physician.edit',compact('patiant','id'));
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $data, $id)
  {

    $this->validate($data,[
        'name' => ['required', 'string', 'max:50'],
        'lastname' => ['required', 'string', 'max:50'],
        'address' => ['required', 'string', 'max:255'],
        'pid' => ['required', 'string', 'max:13'],
        'sex' => ['required', 'string', 'max:5'],
        'birth' => ['required', 'date'],
        'line' => ['string', 'max:50'],
        'patiant_tel' => ['required', 'string', 'max:15'],
        'contact' => ['required', 'string', 'max:15'],
    ]);

    $patiant= Patiant::find($id);

        $patiant->name = $data->get('name');
        $patiant->lastname = $data->get('lastname');
        $patiant->address = $data->get('address');
        $patiant->pid = $data->get('pid');
        $patiant->sex = $data->get('sex');
        $patiant->birth = $data->get('birth');
        $patiant->line = $data->get('line');
        $patiant->patient_tel = $data->get('patiant_tel');
        $patiant->contact = $data->get('contact');
        // dd($patiant);
        $patiant->save();

    return redirect()->route('physician.home')->with('success','อัพเดตข้อมูลเรียบร้อย');
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
    return redirect()->route('physician.home')->with('success','ลบข้อมูลเรียบร้อย');
  }

}

?>
