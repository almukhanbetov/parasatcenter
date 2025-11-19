 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <a href="index3.html" class="brand-link">
         <img src="{{ asset('assets/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">AdminLTE 3</span>
     </a>
     <div class="sidebar">
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             {{-- <div class="image">
                 <img src="{{ asset('assets/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                     alt="User Image">
             </div> --}}
             <div class="info">
                 <a href="/" class="d-block">Главная</a>
             </div>
         </div>
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Услуги
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.service.index') }}" class="nav-link">
                                 <p>Все услуги</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.service.create') }}" class="nav-link">
                                 <p>Добавить услугу</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Курсы
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.course.index') }}" class="nav-link">
                                 <p>Все курсы</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.course.create') }}" class="nav-link">
                                 <p>Добавить курс</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item menu-open">
                     <a href="#" class="nav-link active">
                         <i class="nav-icon fas fa-tachometer-alt"></i>
                         <p>
                             Студенты
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.student.index') }}" class="nav-link">
                                 <p>Все студенты</p>
                             </a>
                         </li>
                     </ul>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('admin.student.create') }}" class="nav-link">
                                 <p>Добавить студента</p>
                             </a>
                         </li>
                     </ul>
                 </li>
             </ul>
         </nav>
     </div>
 </aside>
