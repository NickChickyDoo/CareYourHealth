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
                            <li class="breadcrumb-item active">เพิ่มข้อมูลผู้ใช้ระบบ</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>เพิ่มข้อมูลผู้ใช้ระบบ</h4>
                </div>
            </div>
        </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('manage-user.store')}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">อีเมล</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="อีเมล">
                    </div>
                </div> <!-- end row -->
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="firstname">ชื่อจริง</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="ชื่อจริง">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="lastname">นามสกุล</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="นามสกุล">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="position">ตำแหน่ง</label>
                        <input type="text" class="form-control" id="position" name="position" placeholder="ตำแหน่ง">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="sex">พาสเวิร์ด</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="พาสเวิร์ด" required autocomplete="new-password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="password_confirmation">ยืนพาสเวิร์ด</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="ยืนยันพาสเวิร์ด" required autocomplete="new-password">
                    </div>
                </div>
            </div>
            <div class="text-left">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> บันทึก</button>
            </div>
        </form>
    </div>

    </div>
@endsection
