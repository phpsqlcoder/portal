<div class="page-sidebar-wrapper">
    <!-- END SIDEBAR -->
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <ul class="page-sidebar-menu  page-header-fixed page-sidebar-menu-hover-submenu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
            <li class="nav-item start ">
                <a href="/home" class="nav-link">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>                  
                </a>
              
            </li>
            <li class="nav-item  ">
                <a href="/patients" class="nav-link">
                    <i class="icon-users"></i>
                    <span class="title">Patients</span>                   
                </a>
                
            </li>
            <li class="nav-item  ">
                <a href="{{ route('patients.create') }}" class="nav-link">
                    <i class="icon-users"></i>
                    <span class="title">Create New Patient</span>                   
                </a>
               
            </li>
			<li class="nav-item  " style="display: none;">
                <a href="/patients_today" class="nav-link">
                    <i class="icon-users"></i>
                    <span class="title">Patients <span class="badge badge-danger">Today</span></span>                   
                </a>
                
            </li>
			<li class="nav-item  ">
                <a href="/transaction/all" class="nav-link">
                    <i class="icon-grid"></i>
                    <span class="title">Transactions</span>                   
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('personnels.index') }}" class="nav-link">
                    <i class="icon-users"></i>
                    <span class="title">Personnels</span>                   
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('machines.index') }}" class="nav-link">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Machines</span>                   
                </a>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('schedules.index') }}" class="nav-link">
                    <i class="icon-calendar"></i>
                    <span class="title">Schedule</span>                   
                </a>
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-paper-clip"></i>
                    <span class="title">Inventory</span>
                    <span class="arrow"></span>
                </a>
				<ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="/products" class="nav-link ">
                            <span class="title">Products</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="/receiving/list" class="nav-link ">
                            <span class="title">Stock In</span>
                        </a>
                    </li>
					
                    
                </ul>
               
            </li>
            <li class="nav-item  ">
                <a href="/services" class="nav-link nav-toggle">
                    <i class="icon-settings"></i>
                    <span class="title">Services</span>
                    <span class="arrow"></span>
                </a>
               
            </li>
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-calendar"></i>
                    <span class="title">Reports</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="" class="nav-link ">
                            <span class="title">Patients</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="" class="nav-link ">
                            <span class="title">Receiving</span>
                        </a>
                    </li> --}}
                    <li class="nav-item  ">
                        <a href="{{ route('report.prescription') }}" class="nav-link ">
                            <span class="title">Prescription</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('report.booking') }}" class="nav-link ">
                            <span class="title">Bookings</span>
                        </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="{{ route('report.inventory') }}" class="nav-link ">
                            <span class="title">Inventory</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item  ">
                <a href="{{ route('patient.sign_up') }}" target="_blank" class="nav-link nav-toggle">
                    <i class="fa fa-user"></i>
                    <span class="title">Guest Form</span>                  
                </a>
               
            </li>
            
          
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>