<!-- Sidebar -->
<div class="sidebar">

    <div class="sidebar-background"></div>
    <div class="sidebar-wrapper scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="avatar-sm float-left mr-2">
                    @if(Auth::user()->profile_photo_path)
                        <img src="{{ Storage::url(Auth::user()->profile_photo_path) }}" alt="..." class="avatar-img rounded-circle">
                    @endif
                </div>
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">

                            <a href="#" class="d-block">{{Auth::user()->name}}</a>
                    </a>
                    <br>
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
                        <p>Reviews</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('admin_faq')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>FAQ</p>
                    </a>

                </li>
                <li class="nav-item">
                    <a href="{{route('admin_users')}}">
                        <i class="fas fa-pen-square"></i>
                        <p>Users</p>
                    </a>

                </li>

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
