@extends('layouts.master')

@section('css')
<!-- Custom box css -->
<link href="{{asset('assets/libs/custombox/custombox.min.css')}}" rel="stylesheet">
@section('css')
<!-- third party css -->
<link href="{{ URL::asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<!-- third party css end -->
@endsection

@endsection

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CareYourHealth</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">แพทย์</a></li>
                        <li class="breadcrumb-item active">จัดการข้อมูลผู้ป่วย</li>
                    </ol>
                </div>
                <h4 class="page-title">จัดการข้อมูลผู้ป่วย</h4>
                {{-- <a href="{{ route('provider.create') }}" class="btn btn-success waves-effect waves-light mb-2"
                    data-animation="fadein" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> Add
                    Patiant</a> --}}
                    <a href="{{ route('patiant.create') }}" class="btn btn-success waves-effect waves-light mb-2"
                    data-animation="fadein" data-overlayColor="#38414a"><i class="mdi mdi-plus-circle mr-1"></i> เพิ่มผู้ป่วย</a>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                            <thead>
                                <tr>
                                    <th>เลขบัตรประจำตัวประชาชน</th>
                                    <th>ชื่อจริง</th>
                                    <th>นามสกุล</th>
                                    <th>เพศ</th>
                                    <th>เบอร์โทรศัพท์</th>
                                    <th>วันที่นัด</th>
                                    <th>วันที่รับการตรวจล่าสุด</th>
                                    <th style="width: 82px;">การจัดการ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $patiant as $key => $items)
                                <tr>
                                    <td class="table-user">
                                        {{-- <img src="{{url('assets\images\users\user-4.jpg')}}" alt="table-user"
                                        class="mr-2 rounded-circle"> --}}
                                        {{-- <a href="{{ action('addPatiantController@show',$items['no_patiant']) }}" class="text-body font-weight-semibold">{{$items['pid']}}</a> --}}
                                        <a href="{{ action('PatiantController@show',$items['no_patiant']) }}" class="text-body font-weight-semibold">{{$items['pid']}}</a>
                                    </td>
                                    <td>
                                        {{$items['name']}}
                                    </td>
                                    <td>
                                        {{$items['lastname']}}
                                    </td>
                                    <td>
                                        {{$items['sex']}}
                                    </td>
                                    <td>
                                        {{$items['patient_tel']}}
                                    </td>
                                    <td>
                                        @if ($items['no_assign'])
                                            {{$items['no_assign']}}
                                        @else
                                            No Assign
                                        @endif
                                    </td>
                                    <td>
                                        {{-- {{ date('j F, Y', strtotime($items->Treatment['created_at'])) }} --}}

                                        {{ \Carbon\Carbon::parse($items->Treatment['created_at'])->format('d/m/Y')}}

                                        {{-- {{ $items->Treatment['created_at']}} --}}
                                        {{-- {{ $items->Treatment->created_at }} --}}
                                    </td>
                                    {{-- <td>
                                        <a href="{{ action('addPatiantController@edit',$items['no_patient']) }}"
                                            class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <form method="POST" class="action-icon delete_form"
                                            action="{{ action('addPatiantController@destroy',$items['no_patient']) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="action-icon" style="border: none;  background-color: Transparent;
                                            background-repeat:no-repeat;">
                                                <i class="mdi mdi-delete"></i></button>
                                        </form>

                                    </td> --}}
                                    <td>
                                        <a href="{{ action('PatiantController@edit',$items['no_patiant']) }}"
                                            class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                        <form method="POST" class="action-icon delete_form"
                                            action="{{ action('PatiantController@destroy',$items['no_patiant']) }}">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE" />
                                            <button type="submit" class="action-icon" style="border: none;  background-color: Transparent;
                                            background-repeat:no-repeat;">
                                                <i class="mdi mdi-delete"></i></button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->




{{--  @include('provider.partial.modal')  --}}
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function(){
                $('.delete_form').on('submit',function(){
                    if(confirm("คุณต้องการลบข้อมูลหรือไม่ ?")){
                        return true;
                    }else{
                        return false;
                    }
                });
            });


</script>


<!-- Modal-Effect -->
<script src="{{ URL::asset('assets/libs/custombox/custombox.min.js')}}"></script>
<!-- third party js -->
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js')}}"></script>
<!-- third party js ends -->

<!-- Datatables init -->
<script src="{{ URL::asset('assets/js/pages/datatables.init.js')}}"></script>

@endsection
