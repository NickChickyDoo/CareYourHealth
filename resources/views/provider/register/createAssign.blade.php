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
                        <li class="breadcrumb-item active">เพิ่มการนัดหมาย</li>
                    </ol>
                </div>
                <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>เพิ่มการนัดหมาย</h4>
            </div>
        </div>
    </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('assignment.store') }}">
            @csrf

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="date">วันที่นัดหมาย</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="dateCurrent">วันที่สร้างใบนัด</label>
                        <input type="text" readonly class="form-control" value="{{ Carbon\Carbon::today()->format('d-m-Y') }}">
                    </div>
                </div>

            </div>
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
                        <label for="no_user">แพทย์ผู้ทำการนัด</label>
                        <select type="text" class="form-control" id="no_user" name="no_user">
                            @foreach ($users as $item)
                                <option value="{{ $item['no_user']}}">{{ $item['name']}} {{ $item['lastname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="assignFor">สาเหตุที่นัดหมาย</label>
                        <textarea class="form-control" id="assignFor" name="assignFor" rows="3" placeholder="สาเหตุที่นัดหมาย"></textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="comment">หมายเหตุ</label>
                        <textarea class="form-control" id="comment" name="comment" rows="2"
                            placeholder="อาการปัจจุบัน"></textarea>
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
