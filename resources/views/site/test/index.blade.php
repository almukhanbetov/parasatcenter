@extends('layouts.app')
@section('title', 'Республиканский Учебный Центр «ПAPACAT»')
@section('content')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3453</h1>
                    </div>
                    <h5 class="mb-3"></h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <h1 class="mb-0 text-center" data-toggle="counter-up">4234</h1>
                    </div>
                    <h5 class="mb-3 "></h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-award text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">3123</h1>
                    </div>
                    <h5 class="mb-3"></h5>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                    <div class="d-flex align-items-center mb-4">
                        <div class="btn-lg-square bg-primary rounded-circle me-3">
                            <i class="fa fa-users-cog text-white"></i>
                        </div>
                        <h1 class="mb-0" data-toggle="counter-up">1831</h1>
                    </div>
                    <h5 class="mb-3"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('/site/img/about.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">О нас</h6>
                        <h1 class="mb-4">TOO «Республиканский Учебный Центр «ПAPACAT»</h1>
                        <p>В соответствии с регламентирующими требованиями законодательства Республики Казахстан, проводит
                            квалифицированное обучение руководителей и специалистов, работников предприятия по следующим позициям:
                        </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Безопасность охрана труда</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Промышленная безопасность</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Пожарно-технический минимум</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Электробезопасность</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Радиационная безопасность</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Оказание доврачебной медицинской помощи </p>
                        <p>А также выполняет услуги по промышленной безопасности:
                        </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Аттестация рабочих мест по условиям труда</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Экспертиза  промышленной безопасности</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Пожарно-технический минимум</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Дефектоскопия неразрушающими методами контроля</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Диагностика и обследование технических устройств</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Освидетельствование технических устройств на опасных
                            производственных объектах
                        </p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Разработка декларации опасных производственных объектах</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Получение разрешение на примените технических устройств</p>


                        <a href="" class="btn btn-primary rounded-pill py-3 px-5 mt-3">Связаться</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary">Наши услуги</h1>

            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/img-600x400-1.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-map fa-3x"></i>
                            </div>
                            <h4 class="mb-3">БЕЗОПАСНОСТЬ И ОХРАНА ТРУДА (БиОТ)</h4>
                            <p>В соответствии с регламентирующими требованиями законодательства Республики Казахстан, компания «Республиканский Учебный Центр «ПАРАСАТ»</p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/img-600x400-2.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-fire-extinguisher fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ПОЖАРНАЯ БЕЗОПАСНОСТЬ</h4>
                            <p>Обучение для руководителей организаций и работников, ответственных за пожарную безопасность и проведение противопожарного инструктажа
                                в виде семинарских и практических занятий.
                            </p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/img-600x400-3.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-flask fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ПРОМЫШЛЕННАЯ БЕЗОПАСНОСТЬ (РАЗРАБОТКА, РЕГИСТРАЦИЯ В
                                УПОЛНОМОЧЕННОМ ОРГАНЕ)
                            </h4>
                            <p>Компания «Республиканский Учебный Центр «ПАРАСАТ» имеет аттестованную испытательную лабораторию неразрушающего контроля. </p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/img-600x400-4.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-graduation-cap fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ЭКОЛОГИЧЕСКОЕ СОПРОВОЖДЕНИЕ</h4>
                            <p>Одной из главных обязанностей руководителей организаций является обеспечение безопасности сотрудника на рабочем месте,
                                а также создание комфортных условий труда.
                            </p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/img-600x400-5.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fas fa-wrench fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ТЕХНИЧЕСКИЙ НАДЗОР И  ОБСЛЕДОВАНИЕ ЗДАНИЙ</h4>
                            <p>Аттестация рабочих мест по условиям труда проводится в соответствии с Приказом Министра здравоохранения и социального развития Республики Казахстан от 28 декабря 2015 года №1057 </p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/projectdoc.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ПРОЕКТНО-СМЕТНАЯ ДОКУМЕНТАЦИЯ</h4>
                            <p>Экспертиза промышленной безопасности – вид экспертизы проектной документации, действующего оборудования, устройств, материалов</p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/povyshkvalprepod.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">Повышение квалификации преподавателей ВУЗ-ов</h4>
                            <p>Повышение квалификации преподавателей ВУЗ-ов и среднее специальных учебных заведений</p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/energoexpertiza.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ЭНЕРГОЭКСПЕРТИЗА</h4>
                            <p>Экспертиза промышленной безопасности – вид экспертизы проектной документации, действующего оборудования, устройств, материалов</p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded overflow-hidden">
                        <img class="img-fluid" src="{{asset('/site/img/energoaudit.jpg')}}" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                                <i class="fa fa-lightbulb fa-3x"></i>
                            </div>
                            <h4 class="mb-3">ЭНЕРГОАУДИТ1</h4>
                            <p>Экспертиза промышленной безопасности – вид экспертизы проектной документации, действующего оборудования, устройств, материалов</p>
                            <a class="small fw-medium" href="">Подробнее<i class="fa fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">Почему выбрали нас !</h6>
                        <h1 class="mb-4">ОБСЛЕДОВАНИЕ, ДИАГНОСТИКА
                        </h1>
                        <p class="mb-4 pb-2">Специалисты компании РУЦ «ПАРАСАТ» имеют необходимые навыки для осуществления работ по диагностике, освидетельствования, расчёта остаточного ресурса для продления истёкшего срока службы технических устройств любой сложности, применяемых на территории Республики Казахстан</p>
                        <div class="row g-4">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">ГПМ</p>
                                        <h5 class="mb-0">Грузоподъёмные механизмы  </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-user-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">НГДО</p>
                                        <h5 class="mb-0">Тех.диагностика и инструментов.</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-lg-square bg-primary rounded-circle">
                                        <i class="fa fa-drafting-compass text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <p class="mb-0">ШПМ</p>
                                        <h5 class="mb-0">Шахтно-подъёмных машин</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('/site/img/feature.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('/site/img/quote.jpg')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">ОБУЧЕНИЕ РАБОТНИКОВ ОСНОВАМ ОХРАНЫ ТРУДА</h6>
                        <h1 class="mb-4">ТОО «Республиканский Учебный Центр» ПАРАСАТ»</h1>
                        <p class="mb-4 pb-2">Осуществляет подготовку, переподготовку, повышение квалификации и проверку знаний (экзамены) инженерно-технических работников и специалистов опасных производственных объектов, а также аттестованных, проектных организаций и иных организаций, привлекаемых для работы на опасных производственных объектах, на основании имеющего Аттестата, предоставляющего право обучение специалистов в области промышленной безопасности.</p>
                        <p class="mb-4 pb-2">Общая программа подготовки и разработка установленного образца квалификационных удостоверений, отвечают требованиям статьи 79 Закона РК от 11 апреля 2014 года № 188-V «О гражданской защите» и нормативной базы РК в сфере промышленной безопасности.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected></option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder=""></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Написать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">Наши преподователи</h6>
                <h1 class="mb-4"></h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{asset('/site/img/team-1.jpg')}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Lorem</h5>
                            <span>Lorem</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{'/site/img/team-2.jpg'}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Lorem</h5>
                            <span>Lorem</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item rounded overflow-hidden">
                        <div class="d-flex">
                            <img class="img-fluid w-75" src="{{'/site/img/team-3.jpg'}}" alt="">
                            <div class="team-social w-25">
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-lg-square btn-outline-primary rounded-circle mt-3" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5>Lorem</h5>
                            <span>Lorem</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
