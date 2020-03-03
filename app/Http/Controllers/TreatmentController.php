<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Treatment;
use App\Patiant;
use App\User;

class TreatmentController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $treatments = Treatment::all();
    return view('provider.physician.treatment',compact('treatments'));
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        $patiants = Patiant::all()->toArray();
        $users = User::where('is_admin','0')->get();
        // dd($users);
        return view('provider.register.createTreatment',compact('patiants','users'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $data)
  {
    //   dd($data);
    // dd($data->input());
    $this->validate($data,[
        'cheifCompaint' => ['required', 'string', 'max:255'],
        'presentIllness' => ['required', 'string', 'max:255'],
        'pastHistory' => ['required', 'string', 'max:255'],
        'drugAllergy' => ['required', 'string', 'max:255'],
        'familyHistry' => ['required', 'string', 'max:255'],
        'diagnosis' => ['required', 'string', 'max:255'],
        'treatment' => ['required', 'string', 'max:255'],
        'no_patiant' => ['required', 'string', 'max:1'],
        'no_user' => ['required', 'string', 'max:1'],
    ]);

    $treatment= new Treatment([
        'cheifCompaint' => $data->get('cheifCompaint'),
        'presentIllness' => $data->get('presentIllness'),
        'pastHistory' => $data->get('pastHistory'),
        'drugAllergy' => $data->get('drugAllergy'),
        'familyHistry' => $data->get('familyHistry'),
        'diagnosis' => $data->get('diagnosis'),
        'treatment' => $data->get('treatment'),
        'no_patiant' => $data->get('no_patiant'),
        'no_user' => $data->get('no_user'),
    ]);

    $treatment->save();
    // dd($treatment->no_treatment);
    $Ko = array('no_treatment'=> $treatment->no_treatment);
    $linkPatiant = Patiant::where('no_patiant', $data->get('no_patiant'))->update($Ko);



    return redirect()->route('treatment.index')->with('success','เพิ่มข้อมูลเรียบร้อย');
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
        $treatment = Treatment::find($id);
        $treatment->delete();
        return redirect()->route('treatment.index')->with('success','ลบข้อมูลเรียบร้อย');
  }

}

?>
