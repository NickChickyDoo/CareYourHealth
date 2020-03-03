@extends('layouts.master')

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CareYourHealt</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">แพทย์</a></li>
                        <li class="breadcrumb-item active">โปรไฟล์ผู้ป่วย</li>
                    </ol>
                </div>
                <h4 class="page-title">โปรไฟล์ผู้ป่วย</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-lg-4 col-xl-4">
            <div class="card-box text-center">
                <img src="{{ url('assets/images/users/user-1.jpg') }}" class="rounded-circle avatar-lg img-thumbnail"
                    alt="profile-image">
                <h4 class="mb-0">
                  Natchalit Namkong
                </h4>
                {{--  <p class="text-muted">@webdesigner</p>  --}}

                {{--  <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>  --}}

                <div class="text-left mt-3">
                    <h4 class="font-13 text-uppercase">About Me :</h4>
                    <p class="text-muted font-13 mb-3">
                        Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                        1500s, when an unknown printer took a galley of type.
                    </p>
                    <p class="text-muted mb-2 font-13"><strong>Personal ID :</strong> <span
                            class="ml-2">{{$patiant['pid']}}</span></p>
                    <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span
                            class="ml-2">{{$patiant['name']}} {{$patiant['lastname']}}</span></p>

                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span
                            class="ml-2">{{$patiant['patiant_tel']}}</span></p>

                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span
                            class="ml-2">{{$patiant['address']}}</span></p>
                    {{-- <p class="text-muted mb-2 font-13"><strong>เลขบัตรประจำตัวประชาชน :</strong> <span
                            class="ml-2">1509970047985</span></p>
                    <p class="text-muted mb-2 font-13"><strong>ชื่อ - นามสกุล :</strong> <span
                            class="ml-2">Natchalit Namkong</span></p>

                    <p class="text-muted mb-2 font-13"><strong>เบอร์โทรศัทพ์ :</strong><span
                            class="ml-2">0826174934</span></p>

                    <p class="text-muted mb-1 font-13"><strong>ที่อยู่ :</strong> <span
                            class="ml-2">เชียงใหม่</span></p> --}}
                </div>

            </div> <!-- end card-box -->
        </div> <!-- end col-->

        <div class="col-lg-8 col-xl-8">
            <div class="card-box">
                <ul class="nav nav-pills navtab-bg nav-justified">
                    <li class="nav-item">
                        <a href="#history" data-toggle="tab" aria-expanded="false" class="nav-link active">
                            ประวัติการรักษา
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    @include('provider.physician.partial.history')
                    <!-- end about me section content -->

                    <!-- end settings content-->

                </div> <!-- end tab-content -->
            </div> <!-- end card-box-->

        </div> <!-- end col -->
    </div>
    <!-- end row-->

</div> <!-- container -->

@endsection
