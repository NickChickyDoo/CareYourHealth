@extends('layouts.master')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">CareYourHealth</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Provider</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Patiant</a></li>
                            <li class="breadcrumb-item active">Edit Profile</li>
                        </ol>
                    </div>
                    <h4 class="page-title"><i class="mdi mdi-account-circle mr-1"></i>Edit Profile</h4>
                </div>
            </div>
        </div>
    <div class="container justify-content">
        <form method="POST" action="{{ route('patiant.update',$patiant->no_patiant)}}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="PID">Personal ID</label>
                        <input type="text" class="form-control" id="pid" name="pid" placeholder="Personal ID" value="{{ $patiant->pid }}">
                        {{-- <input type="text" class="form-control" id="pid" name="pid" placeholder="Personal ID" value="#"> --}}
                    </div>
                </div> <!-- end row -->
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter first name" value="{{ $patiant->name }}">
                        {{-- <input type="text" class="form-control" id="name" name="name" placeholder="Enter first name" value="#"> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" value="{{ $patiant->lastname }}">
                        {{-- <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Enter last name" value="#"> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="birth">Date of Birth</label>
                        <input type="date" class="form-control" id="birth" name="birth" placeholder="Select Date of Birth" value="{{ $patiant->birth }}">
                        {{-- <input type="date" class="form-control" id="birth" name="birth" placeholder="Select Date of Birth" value="#"> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="sex">Gender</label>
                        <input type="text" class="form-control" id="sex" name="sex" placeholder="Enter your gender" value="{{ $patiant->sex }}">
                        {{-- <input type="text" class="form-control" id="sex" name="sex" placeholder="Enter your gender" value="#"> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter address" >{{ $patiant->address }}</textarea>
                        {{-- <textarea class="form-control" id="address" name="address" rows="4" placeholder="Enter address" ></textarea> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="line">Line</label>
                        <input type="text" class="form-control" id="line" name="line" placeholder="Enter line" value="{{ $patiant->line }}">
                        {{-- <input type="text" class="form-control" id="line" name="line" placeholder="Enter line" value="#"> --}}
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="patiantTel">Mobile</label>
                        <input type="text" class="form-control" id="patiant_tel" name="patiant_tel" placeholder="Enter phone number" value="{{ $patiant->patient_tel }}">
                        {{-- <input type="text" class="form-control" id="patiant_tel" name="patiant_tel" placeholder="Enter phone number" value="#"> --}}
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label for="contact">Contact person</label>
                        <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter phone number" value="{{ $patiant->contact }}">
                        {{-- <input type="text" class="form-control" id="contact" name="contact" placeholder="Enter phone number" value="#"> --}}
                    </div>
                </div>
            </div> <!-- end row -->
            <div class="text-left">
                <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
            </div>
        </form>
    </div>

    </div>
@endsection
