<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <!-- Логотип -->
    <a href="{{ route('admin.service.index') }}" class="brand-link">
        <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Админка</span>
    </a>

    <div class="sidebar">

        <!-- Главная -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="/" class="d-block">Главная</a>
            </div>
        </div>

        <!-- Меню -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">

                <!-- ====================== Услуги ======================= -->
                <li class="nav-item {{ request()->routeIs('admin.service.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.service.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-cog"></i>
                        <p>Услуги<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.service.index') }}"
                                class="nav-link {{ request()->routeIs('admin.service.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все услуги</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.service.create') }}"
                                class="nav-link {{ request()->routeIs('admin.service.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить услугу</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- =================== Категории курсов =================== -->
                <li class="nav-item {{ request()->routeIs('admin.course.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.course.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        <p>Категории курсов<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course.index') }}"
                                class="nav-link {{ request()->routeIs('admin.course.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все категории</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.course.create') }}"
                                class="nav-link {{ request()->routeIs('admin.course.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить категорию курса</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- ====================== Курсы ======================= -->
                <li class="nav-item {{ request()->routeIs('admin.course-detail.*') ? 'menu-open' : '' }}">
                    <a href="#"
                        class="nav-link {{ request()->routeIs('admin.course-detail.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-book"></i>
                        <p>Курсы<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.course-detail.index') }}"
                                class="nav-link {{ request()->routeIs('admin.course-detail.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все курсы</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.course-detail.create') }}"
                                class="nav-link {{ request()->routeIs('admin.course-detail.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить курс</p>
                            </a>
                        </li>
                    </ul>
                </li>


                <!-- ====================== Студенты ======================= -->
                <li class="nav-item {{ request()->routeIs('admin.student.*') ? 'menu-open' : '' }}">
                    <a href="#" class="nav-link {{ request()->routeIs('admin.student.*') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Студенты<i class="right fas fa-angle-left"></i></p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('admin.student.index') }}"
                                class="nav-link {{ request()->routeIs('admin.student.index') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Все студенты</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{ route('admin.student.create') }}"
                                class="nav-link {{ request()->routeIs('admin.student.create') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Добавить студента</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
    </div>
</aside>
