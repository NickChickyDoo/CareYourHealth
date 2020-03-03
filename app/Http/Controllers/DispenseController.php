<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Condition;
use App\Dispense;
use App\Treatment;
use App\Patiant;
use App\User;
use App\Drug;
use App\When;
use App\Time;

class DispenseController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {

  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
        $users = User::where('is_admin','0')->get();
        $patiants = Patiant::all();
        $drugs = Drug::all();
        $times = Time::all();
        $whens = When::all();
        $conditions = Condition::all();
        return view('provider.register.createDepense',compact('users','patiants','drugs','times','whens','conditions'));
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
        //   'date' => ['required'],
        //   'amount' => ['required'],
        //   'indicator' => ['required'],
        //   'take' => ['required'],
        //   'daily' => ['required'],
        //   'no_when' => ['required'],
        //   'time' => ['required'],
        //   'no_drug' => ['required'],
        //   'only_when' => ['required'],
        //   'no_condition' => ['required'],
        //   'no_patiant' => ['required'],
        //   'no_user' => ['required'],
          'date' => ['required', 'date'],
          'amount' => ['required', 'string', 'max:255'],
          'indicator' => ['required', 'string', 'max:255'],
          'take' => ['required', 'string', 'max:255'],
          'daily' => ['required', 'string', 'max:255'],
          'no_when' => ['required', 'string', 'max:255'],
          'no_time' => ['required', 'array'],
          'no_time.*' => ['required', 'string', 'distinct', 'max:255'],
          'only_when' => ['required', 'string', 'max:255'],
          'no_condition' => ['required', 'string', 'max:100'],
          'no_patiant' => ['required', 'string', 'max:100'],
          'no_user' => ['required', 'string', 'max:100'],
          'no_drug' => ['required', 'string', 'max:100'],
          ]);

          dd($data);
    $dispense= new Dispense([
        'date' => $data->get('date'),
        'amount' => $data->get('amount'),
        'indicator' => $data->get('indicator'),
        'take' => $data->get('take'),
        'daily' => $data->get('daily'),
        'no_drug' => $data->get('no_drug'),
        'no_when' => $data->get('on_when'),
        'time' => $data->get('time'),
        'no_condition' => $data->get('no_condition'),
        'no_patiant' => $data->get('no_patiant'),
        'no_user' => $data->get('no_user'),
    ]);

    $dispense->save();

    $Ko = array('no_dispense'=> $dispense->no_dispense);
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

  }

}

?>
