
<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                <div class="profile-image"> <img src="{{asset('images/faces/face4.jpg')}}" alt="image"/> <span class="online-status online"></span> </div>
                <div class="profile-name">
                    <p class="name">Masudul Hasan Shawon</p>
                    <p class="designation">Manager</p>
                    <div class="badge badge-teal mx-auto mt-3">Online</div>
                </div>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link" href="{{route('company.index')}}"><img class="menu-icon" src="{{asset('images/menu_icons/01.png')}}" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('images/menu_icons/08.png')}}" alt="menu icon"> <span class="menu-title">Manage Jobs</span><i class="fa fa-arrow"></i></a>
            <div class="collapse" id="general-pages">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('job.index')}}">Manage Jobs</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('job.create')}}">Add Jobs</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link" href="#district-pages">
                <form class="form-inline" action="#" method="post">
                    @csrf
                    <input type="submit" value="Logout" class="btn btn-danger">
                </form>
            </a>
        </li>

    </ul>
</nav>
<!-- partial -->
