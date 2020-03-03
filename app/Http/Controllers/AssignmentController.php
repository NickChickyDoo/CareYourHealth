<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assignment;
use App\Patiant;
use App\User;

class AssignmentController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $assignment = Assignment::all();
    // dd($assignment);
    return view('provider.physician.assign',compact('assignment'));
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
        return view('provider.register.createAssign',compact('patiants','users'));
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $data)
  {
    // dd($data);
    $this->validate($data,[
        'date' => ['required', 'date', 'max:255'],
        'assignFor' => ['required', 'string', 'max:255'],
        'comment' => ['required', 'string', 'max:255'],
        'no_patiant' => ['required', 'string', 'max:1'],
        'no_user' => ['required', 'string', 'max:1'],
        ]);

        $assignment= new Assignment([
            'date' => $data->get('date'),
            'assignFor' => $data->get('assignFor'),
            'comment' => $data->get('comment'),
            'no_patiant' => $data->get('no_patiant'),
            'no_user' => $data->get('no_user'),
            ]);

    // dd($assignment);
    $assignment->save();

    
    // dd($treatment->no_treatment);
    $Ko = array('no_assign'=> $assignment->no_assign);
    $linkPatiant = Patiant::where('no_assign', $data->get('no_assign'))->update($Ko);

    return redirect()->route('assignment.index')->with('success','เพิ่มข้อมูลเรียบร้อย');

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
        $assignment = Assignment::find($id);
        $assignment->delete();
        return redirect()->route('assignment.index')->with('success','ลบข้อมูลเรียบร้อย');
  }

}

?>
