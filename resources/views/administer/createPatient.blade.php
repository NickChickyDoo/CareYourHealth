@extends('layouts.masterAdmin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CareYourHealth</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administer</a></li>
                            <li class="breadcrumb-item active">เพิ่มข้อมูลผู้ป่วย</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>เพิ่มข้อมูลผู้ป่วย</h4>
                </div>
            </div>
        </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('manage-patiant.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="PID">เลขบัตรประจำตัวประชาชน</label>
                        <input type="text" class="form-control" id="pid" name="pid" placeholder="เลขบัตรประจำตัวประชาชน">
                    </div>
                </div> <!-- end row -->
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="firstname">ชื่อจริง</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อจริง">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="lastname">นามสกุล</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="birth">วันเดือนปีเกิด</label>
                        <input type="date" class="form-control" id="birth" name="birth" placeholder="วันเดือนปีเกิด">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sex">เพศ</label>
                        <input type="text" class="form-control" id="sex" name="sex" placeholder="เพศ">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="address">ที่อยู่</label>
                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="ที่อยู่"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="line">Line</label>
                        <input type="text" class="form-control" id="line" name="line" placeholder="Line">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="patientTel">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="patient_tel" name="patient_tel" placeholder="เบอร์โทรศัพท์">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="contact">เบอร์โทรผู้ที่สามารถติดต่อได้</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="เบอร์โทรผู้ที่สามารถติดต่อได้">
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="text-left">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> บันทึก</button>
            </div>
        </form>
    </div>

    </div>
@endsection
