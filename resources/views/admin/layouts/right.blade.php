<nav class="navbar-aside navbar-static-side " id="menu">
    <div class="sidebar-collapse">

        <ul class="nav" id="side-menu">

            <li class="active">
                <a href="{{route('dashboard')}}"><i class="fa fa-th-large"></i>
                    <span class="nav-label">لوحة التحكم </span><span class="label label-rouded pull-right p1-bg note-icon">1</span></a>
            </li>

           <li class="nav-heading"><span>Components</span></li>


            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">سلايدر</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('slider')}}">عرض الصور</a></li>
                    <li><a href="{{route('slider.create')}}">رفع صور</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users"></i>
                    <span class="nav-label">المستخدمين</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('admin.create')}}">انشاء مستخدم جديد</a></li>
                    <li><a href="{{route('admin.users')}}">عرض جميع المستخدمين</a></li>

                </ul>
            </li>

          

            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Forms</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="form_basic.html">Basic form</a></li>
                    <li><a href="form_file_upload.html">File upload</a></li>
                    <li><a href="file_drop.html">File Dropzone</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Other Pages</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="gallery.html">gallery</a></li>
                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">Tables</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse"><li><a href="table_basic.html">Static Tables</a></li>
                    <li><a href="table_data_tables.html">Data Tables</a></li>

                </ul>
            </li><li class="nav-heading"><span>More</span></li>


            <li>
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">Blog</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="blog_list.html">Blog list</a></li>
                    <li><a href="blog_post.html">Blog post</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-sitemap"></i> <span class="nav-label">Menu Levels </span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li>
                        <a href="#">Third Level <span class="fa fa-plus"></span></a>
                        <ul class="nav nav-third-level">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li> <li><a href="#">Second Level Item</a></li>
                </ul>
            </li><li class="nav-heading"><span>Extra</span></li>
        </ul>



    </div>
</nav>