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
                        <span> Administer </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="nav-second-level nav" aria-expanded="false">
                        <li>
                            <a href="javascript: void(0);" aria-expanded="false">จัดการข้อมูล
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-third-level nav" aria-expanded="false">
                                <li>
                                    <a href="{{ route('admin.index') }}">ข้อมูลสมาชิกทั้งหมด</a>
                                </li>
                            </ul>
                        </li>

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
