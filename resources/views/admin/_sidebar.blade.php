<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    <img src="{{ asset('assets')}}/admin/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">

                            <a href="#" class="d-block">{{Auth::user()->name}}</a>


                    </a>
                    <div class="clearfix"></div>

                    <div class="collapse in" id="collapseExample">
                        <ul class="nav">
                            <li>
                                <a href="#profile" class="dropdown-item">
                                    <span class="link-collapse">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#edit" class="dropdown-item">
                                    <span class="link-collapse">Edit Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="#settings" class="dropdown-item">
                                    <span class="link-collapse">Settings</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{route('home')}}">
                        <i class="fas fa-layer-group"></i>
                        <p>Main Page</p>

                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('admin_menu')}}">
                        <i class="fas fa-layer-group"></i>
                        <p>Menu</p>

                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('admin_content')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Contents</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('admin_message')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Contact Messages</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('admin_review')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Review</p>
                    </a>

                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
