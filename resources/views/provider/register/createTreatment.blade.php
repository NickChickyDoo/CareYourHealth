@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CareYourHealth</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">แพทย์</a></li>
                        <li class="breadcrumb-item active">บันทึกข้อมูลการรักษา</li>
                    </ol>
                </div>
                <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>เพิ่มข้อมูลการรักษา</h4>
            </div>
        </div>
    </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('treatment.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group mb-3">
                        <label for="no_patiant">ชื่อผู้ป่วย</label>
                        <select class="form-control" id="no_patiant" name="no_patiant">
                            @foreach ($patiants as $item)
                            <option value="{{ $item['no_patiant']}}">{{ $item['name']}} {{ $item['lastname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="pastHistory">โรคประจำตัว</label>
                        <input type="text" class="form-control" id="pastHistory" name="pastHistory"
                            placeholder="โรคประจำตัว">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="drugAllergy">ประวัติการแพ้ยา</label>
                        <input type="text" class="form-control" id="drugAllergy" name="drugAllergy"
                            placeholder="ประวัติการแพ้ยา">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="familyHistry">ประวัติครอบครัว</label>
                        <input type="text" class="form-control" id="familyHistry" name="familyHistry"
                            placeholder="ประวัติครอบครัว">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="cheifCompaint">อาการ / ปัญหาที่มารับการรักษา</label>
                        <textarea class="form-control" id="cheifCompaint" name="cheifCompaint" rows="4"
                            placeholder="อาการ"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="presentIllness">อาการปัจจุบัน</label>
                        <textarea class="form-control" id="presentIllness" name="presentIllness" rows="4"
                            placeholder="อาการปัจจุบัน"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="diagnosis">Diagnosis</label>
                        <textarea class="form-control" id="diagnosis" name="diagnosis" rows="4"
                            placeholder="Diagnosis"></textarea>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="treatment">การรักษา</label>
                        <textarea class="form-control" id="treatment" name="treatment" rows="4"
                            placeholder="การรักษา"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_user">แพทย์ผู้ทำการรักษา</label>
                        <select type="text" class="form-control" id="no_user" name="no_user">
                            @foreach ($users as $item)
                                <option value="{{ $item['no_user']}}">{{ $item['name']}} {{ $item['lastname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>


            <div class="text-left">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i
                        class="mdi mdi-content-save"></i> บันทึก</button>
            </div>
        </form>
    </div>

</div>
@endsection
