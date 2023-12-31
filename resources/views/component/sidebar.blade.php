<div class="left-side-bar">
    <div class="brand-logo">
        <a href="index.html">
            <img src="vendors/images/deskapp-logo.svg" alt="" class="dark-logo" style="max-width: 30px" />
            <img
                src="{{asset('images/logo.jpg')}}"
                alt=""
                class="light-logo"
                style="max-width: 30px"
            />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>
    <div class="menu-block customscroll">
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                <li>
                    <a href="/dashboard" class="dropdown-toggle no-arrow">
                        <i class="micon icon-copy fa fa-home" aria-hidden="true"></i>
                        <span class="mtext">Dashboard</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="micon icon-copy fa fa-database" aria-hidden="true"></i>
                        <span class="mtext">Data Entry</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('form')}}">Form Entry</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle">
                        <i class="micon icon-copy fa fa-print" aria-hidden="true"></i>
                       <span class="mtext">Report</span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{route('report')}}">Generate Report</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>