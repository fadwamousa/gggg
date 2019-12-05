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
                    <li><a href="{{route('sliders.index')}}">عرض الصور</a></li>
                    <li><a href="{{route('sliders.create')}}">رفع صور</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users"></i>
                    <span class="nav-label">المستخدمين</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('users.create')}}">انشاء مستخدم جديد</a></li>
                    <li><a href="{{route('users.index')}}">عرض جميع المستخدمين</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">الاعلانات</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('advs.index')}}">عرض الاعلان</a></li>
                    <li><a href="{{route('advs.create')}}">رفع اعلان جديد</a></li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">الجمعية</span>
                    <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('charities')}}">عرض معلومات الجمعية</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-table"></i> <span class="nav-label">اللجان</span>
                    <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('committes')}}">عرض معلومات لجان الجمعية</a></li>
                    <li><a href="{{route('committes.target.create')}}">اضافة اهداف اللجان</a></li>

                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-users"></i>
                    <span class="nav-label">أعضاء مجلس الادارة</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('membership.index')}}">عرض جميع الاعضاء</a></li>

                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">الوظائف</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('career.show')}}">عرض الوظائف</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">الاحداث</span>
                    <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('events')}}">عرض الاحداث</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">اللوائح والتقارير</span>
                    <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('reports.index')}}">عرض اللوائح</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">النماذج</span>
                    <span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('templates.index')}}">عرض النماذج</a></li>
                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">الحسابات البنكية</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('accounts.index')}}">عرض جميع الحسابات</a></li>
                    <li><a href="{{route('accounts.create')}}">انشاء حساب جديد</a></li>

                </ul>
            </li>


            <li>
                <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">العضوية</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('cards')}}">بطاقة العضوية</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-pencil"></i>
                    <span class="nav-label">مركز ورود الحياة</span><span class="fa fa-plus"></span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="{{route('centers.index')}}">عرض المركز</a></li>
                    <li><a href="{{route('messages')}}">انشاء الرسالة الموجهة لكل أم</a></li>
                    <li><a href="{{route('works')}}">انشاء الاعمال التطوعية في المركز</a></li>
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