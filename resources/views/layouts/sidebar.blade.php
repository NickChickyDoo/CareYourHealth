<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="slimscroll-menu">

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul class="metismenu" id="side-menu">

                <li class="menu-title">เมนู</li>
                <li>
                    <a href="javascript: void(0);">
                        <i class="fe-folder-plus"></i>
                        <span> แพทย์ </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false">จัดการข้อมูลผู้ป่วย
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{ route('physician.home') }}">ข้อมูลผู้ป่วยทั้งหมด</a>
                                </li>
                                <li>
                                    <a href="{{ route('patiant.create') }}">เพิ่มข้อมูลผู้ป่วย</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false">จัดการข้อมูลการรักษา
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{ route('treatment.index') }}">ข้อมูลการรักษาทั้งหมด</a>
                                </li>
                                <li>
                                    <a href="{{ route('treatment.create') }}">เพิ่มข้อมูลการรักษา</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false">จัดการข้อมูลการนัด
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{ route('assignment.index') }}">ข้อมูลการนัดหมายผู้ป่วยทั้งหมด</a>
                                </li>
                                <li>
                                    <a href="{{ route('assignment.create') }}">เพิ่มการนัดหมายผู้ป่วย</a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="javascript: void(0);" aria-expanded="false">จัดการข้อมูลการจ่ายยา
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="#">ข้อมูลการจ่ายยาผู้ป่วยทั้งหมด</a>
                                </li>
                                <li>
                                    <a href="{{ route('dispense.create') }}">เพิ่มข้อมูลการจ่ายยาผู้ป่วย</a>
                                </li>
                            </ul>
                        </li> --}}
                    </ul>
                </li>

                {{-- <li>
                    <a href="javascript: void(0);">
                        <i class="fe-airplay"></i>
                        <span class="menu-arrow"></span>
                        <span> แพทย์ </span>
                    </a>
                    <ul class="nav-second-level" aria-expanded="false">
                        <li>
                            <a href="{{ route('physician.home') }}">การจัดการข้อมูลผู้ป่วย</a>
                        </li>
                        <li>
                            <a href="{{ route('patiant.create') }}">บันทึกข้อมูลผู้ป่วย</a>
                        </li>
                        <li>
                            <a href="{{ route('treatment.create') }}">บันทึกการรักษา</a>
                        </li>
                        <li>
                            <a href="{{ route('treatment.index') }}">จัดการข้อมูลการรักษา</a>
                        </li>
                        <li>
                            <a href="{{ route('assignment.create') }}">บันทึกนัดหมายผู้ป่วย</a>
                        </li>
                        <li>
                            <a href="{{ route('assignment.index') }}">การจัดการข้อมูลนัดหมายผู้ป่วย</a>
                        </li>
                        <li>
                            <a href="{{ route('dispense.create') }}">การจัดการข้อมูลจ่ายยาผู้ป่วย</a>
                        </li>
                    </ul>
                </li> --}}
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->
