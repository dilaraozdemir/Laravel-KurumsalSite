@auth()
<div class="col-sm-3">
    <div class="left-sidebar">
        <h2>User Panel</h2>

        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordian" class="collapsed">
                            <span class="badge pull-right"></span>

                        </a>
                    </h4>
                </div>



            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="panel-title"><a href="{{route('myprofile')}}">My Profile</a></h4><br>
                    <h4 class="panel-title"><a href="{{route('user_content')}}">My Contents</a></h4><br>
                    <h4 class="panel-title"><a href="{{route('myreviews')}}">My Review</a></h4><br>

                    @php
                        $userRoles = Auth::user()->roles->pluck('name');
                    @endphp

                    @if($userRoles->contains('admin'))
                        <h4 class="panel-title"><a href="{{route('admin_seting')}}" target="_blank">Settings</a></h4><br>
                        <h4 class="panel-title"><a href="{{route('admin_home')}}" target="_blank">Admin Panel</a></h4><br>

                    @endif
                    <h4 class="panel-title"><a href="{{route('myprofile')}}">Logout</a></h4><br>
                </div>
            </div>
        </div><!--/category-products-->
    </div>
</div>
@endauth
