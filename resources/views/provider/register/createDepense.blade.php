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
                        <li class="breadcrumb-item active">เพิ่มข้อมูลการรับประทานยา</li>
                    </ol>
                </div>
                <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>เพิ่มข้อมูลการรับประทานยา</h4>
            </div>
        </div>
    </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('dispense.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_patiant">ชื่อผู้ป่วย</label>
                        <select type="text" class="form-control" id="no_patiant" name="no_patiant">
                            @foreach ($patiants as $item )
                            <option value="{{ $item['no_patiant']}}">{{ $item['name']}} {{ $item['lastname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_user">ผู้จ่ายยา</label>
                        <select type="text" class="form-control" id="no_user" name="no_user">
                            @foreach ($users as $item )
                            <option value="{{ $item['no_user']}}">{{ $item['name']}} {{ $item['lastname'] }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="date">วันที่จ่ายยา</label>
                        <input type="date"  class="form-control" id="date" name="date"
                            value="{{ Carbon\Carbon::today()->format('Y-m-d') }}">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="no_drug">ชื่อยา</label>
                        <select type="text" class="form-control" id="no_drug" name="no_drug">
                            @foreach ($drugs as $item )
                            <option value="{{ $item['no_drug']}}">{{ $item['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="indicator">ข้อบ่งใช้</label>
                        <input type="text" class="form-control" id="indicator" name="indicator" placeholder="ข้อบ่งใช้">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="amount">จำนวน</label>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="จำนวน">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="take">ทาน</label>
                        <input type="text" class="form-control" id="take" name="take" placeholder="ทาน">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label for="daily">วันละ</label>
                        <input type="text" class="form-control" id="daily" name="daily" placeholder="วันละ">
                    </div>
                </div>
            </div>
            <div class="row">

            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group mt-3">
                        @foreach ($whens as $key => $item )
                        <div class="custom-control custom-checkbox">
                            <input type="radio" class="custom-control-input" id="no_when{{$key}}" name="no_when"
                                value="{{ $item['no_when']}}">
                            <label class="custom-control-label" for="no_when{{$key}}">{{ $item['name']}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mt-3">
                        @foreach ($times as $key => $item )
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="no_time{{$key}}" name="no_time[]"
                                value="{{ $item['no_time']}}">
                            <label class="custom-control-label" for="no_time{{$key}}">{{ $item['name']}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group mt-3">
                        @foreach ($conditions as $key => $item )
                        <div class="custom-control custom-checkbox">
                            <input type="radio" class="custom-control-input" id="no_condition{{$key}}"
                                name="no_condition" value="{{ $item['no_condition']}}">
                            <label class="custom-control-label" for="no_condition{{$key}}">{{ $item['name']}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> <!-- end row -->

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="only_when">เมื่อมีอาการ</label>
                        <input type="text" class="form-control" id="only_when" name="only_when" placeholder="เมื่อมีอาการ">
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
