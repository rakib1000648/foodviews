<div class="nav-header">
    <div class="brand-logo">
        <a href="index.html">
            <b class="logo-abbr">D</b>
            <span class="brand-title"><b>Drora</b></span>
        </a>
    </div>
    <div class="nav-control">
        <div class="hamburger">
            <span class="toggle-icon"><i class="fas fa-arrows-alt-h"></i></i></span>
        </div>
    </div>
</div>



<div class="header">
    <div class="header-content clearfix">
        <div class="header-left">
            <div class="input-group icons">
                <div class="input-group-prepend">
                    <span class="input-group-text bg-transparent border-0" id="basic-addon1"><i class="fas fa-search"></i></span>
                </div>
                <input type="search" class="border-0" placeholder="Search Dashboard" aria-label="Search Dashboard">
                <div class="drop-down animated flipInX d-md-none">
                    <form action="#">
                        <input type="text" class="form-control" placeholder="Search">
                    </form>
                </div>
            </div>
        </div>
        <div class="header-right">

            <ul class="clearfix">
                <li class="icons d-none d-md-flex">
                    <a href="javascript:void(0)" class="window_fullscreen-x">
                        <i class="fas fa-compress"></i>
                    </a>
                </li>
                <li class="icons">
                    <a href="javascript:void(0)" class="">

                        <i class="fas fa-envelope"></i>
                        <span class="badge badge-danger">3</span>
                    </a>
                    <div class="drop-down animated flipInX">
                        <div class="dropdown-content-body">
                            <ul>
                                <li class="notification-unread">
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{url('company')}}/assets/images/avatar/1.jpg" alt="">
                                        <div class="notification-content">
                                            <div class="notification-text">Hey, What's up! You have a good news !!!</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-unread">
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{url('company')}}/assets/images/avatar/2.jpg" alt="">
                                        <div class="notification-content">
                                            <div class="notification-timestamp">08 Hours ago</div>
                                            <div class="notification-text">Can you do me a favour?</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{url('company')}}/assets/images/avatar/3.jpg" alt="">
                                        <div class="notification-content">
                                            <div class="notification-text">Hey!</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <img class="float-left mr-3 avatar-img" src="{{url('company')}}/assets/images/avatar/4.jpg" alt="">
                                        <div class="notification-content">
                                            <div class="notification-text">And what do you do?</div>
                                            <div class="notification-timestamp">08 Hours ago</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a class="d-flex justify-content-center bg-primary px-4 text-white" href="email-inbox.html">
                                <span>See all messagese </span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="icons">
                    <a href="javascript:void(0)" class="">
                        <i class="fas fa-bell"></i>
                        <span class="badge badge-primary">3</span>
                    </a>
                    <div class="drop-down animated flipInX dropdown-notfication">
                        <div class="dropdown-content-body">
                            <ul>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fas fa-calender"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Started</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fas fa-calender"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Started</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-success-lighten-2"><i class="fas fa-calender"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Started</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void()">
                                        <span class="mr-3 avatar-icon bg-danger-lighten-2"><i class="fas fa-calender"></i></span>
                                        <div class="notification-content">
                                            <h6 class="notification-heading">Event Started</h6>
                                            <span class="notification-text">One hour ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <a class="d-flex justify-content-between bg-primary px-4 text-white" href="javascript:void()">
                                <span>All Notifications</span>
                                <span><i class="fas fa-settings"></i></span>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="icons">
                    <div class="user-img c-pointer-x">
                        <span class="activity active"></span>
                        <img src="{{url('company')}}/assets/images/user/1.png" height="40" width="40" alt="">
                    </div>
                    <div class="drop-down dropdown-profile animated flipInX">
                        <div class="dropdown-content-body">
                            <ul>
                                <li><a href="javascript:void()"><i class="fas fa-user"></i> <span>{{ Auth::user()->name }}</span></a>
                                </li>
                                <li><a href="javascript:void()"><i class="fas fa-calender"></i> <span>My Calender</span></a>
                                </li>
                                <li><a href="javascript:void()"><i class="fas fa-envelope-open"></i> <span>My Inbox</span> <div class="badge gradient-3 badge-pill badge-primary">3</div></a>
                                </li>
                                <li><a href="javascript:void()"><i class="fas fa-paper-plane"></i> <span>My Tasks</span><div class="badge badge-pill bg-dark">3</div></a>
                                </li>
                                <li><a href="javascript:void()"><i class="fas fa-check"></i> <span>Online</span></a>
                                </li>
                                <li><a href="javascript:void()"><i class="fas fa-lock"></i> <span>Lock Screen</span></a>
                                </li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();"><i class="fas fa-key"></i> <span>{{ __('Logout') }}</span></a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>


    </div>
</div>
