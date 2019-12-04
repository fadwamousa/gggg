<nav class="navbar navbar-default yamm navbar-fixed-top" id="header"> <div class="container-fluid padding-l-r">
        <div class="left-part">
            <button type="button" class="navbar-minimalize minimalize-styl-2  pull-left "><i class="fa fa-bars"></i></button>

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><i class="fa fa-bar-chart"></i>  Codex</a></div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="search" style="display: none;">
                <form >
                    <input type="text" class="form-control" autocomplete="off" placeholder="Write something and press enter">
                    <span class="search-close"><i class="fa fa-times"></i></span>
                </form>
            </div>

            <ul class="nav navbar-nav navbar-right navbar-top-drops">
                <li> <span class="search-icon"><i class="fa fa-search"></i></span>

                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-envelope"></i> <span class="badge badge-xs badge-info">6</span></a>

                    <ul class="dropdown-menu dropdown-lg animated flipInX">

                        <li class="notify-title">
                            3 New messages
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-1.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                <span class="block">
                                            John Doe
                                        </span>
                                <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-2.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                <span class="block">
                                            John Doe
                                        </span>
                                <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <img src="images/avtar-3.jpg" alt="" class="img-circle" width="30">
                                        </span>
                                <span class="block">
                                            John Doe
                                        </span>
                                <span class="media-body">
                                            Lorem ipsum dolor sit amet
                                            <em>28 minutes ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="read-more"><a href="#">View All Messages <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-bell"></i> <span class="badge badge-xs badge-warning">6</span></a>

                    <ul class="dropdown-menu dropdown-lg animated flipInX">
                        <li class="notify-title">
                            3 New messages
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-envelope"></i>
                                        </span>

                                <span class="media-body">
                                            15 New Messages
                                            <em>20 Minutes ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-twitter"></i>
                                        </span>

                                <span class="media-body">
                                            13 New Followers
                                            <em>2 hours ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="clearfix">
                            <a href="#">
                                        <span class="pull-left">
                                            <i class="fa fa-download"></i>
                                        </span>

                                <span class="media-body">
                                            Download complete
                                            <em>2 hours ago</em>
                                        </span>
                            </a>
                        </li>
                        <li class="read-more"><a href="#">View All Alerts <i class="fa fa-angle-right"></i></a></li>
                    </ul>
                </li>

                <li class="dropdown"><a href="#" class="dropdown-toggle button-wave" data-toggle="dropdown"><i class="fa fa-user"></i></a>

                    <ul class="dropdown-menu dropdown-lg animated flipInX profile">

                        <li><a href="#"><i class="fa fa-user"></i>My Profile</a></li>
                        <li><a href="#"><i class="fa fa-calendar"></i>My Calendar</a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i>My Inbox</a></li>
                        <li><a href="#"><i class="fa fa-barcode"></i>My Task</a></li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-lock"></i>Screen lock</a></li>
                        <li>
                            <form action="{{route('admin.logout')}}" method="POST">
                            @csrf
                                <a href="">
                                <button class="fa fa-key btn btn-success" value="Logout">Logout</button>
                                </a>
                            </form>
                        </li>

                    </ul>
                </li>

                <li><a href="#" class="button-wave right-sidebar-toggle waves-effect waves-button waves-light"><i class="fa fa-comment" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>