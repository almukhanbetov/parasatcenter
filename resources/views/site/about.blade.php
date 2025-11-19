@extends('layouts.site')
@section('title', 'О нас')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">О компании</h6>
                <!--<h1 class="mb-4">Experienced Team Members</h1>-->
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-6 wow fadeInUp text-black" data-wow-delay="0.1s">
                    <p><b style="padding: 40px">TОО «Республиканский Учебный Центр «ПАРАСАТ»</b> создан в июне 2018 года в целях подготовки, переподготовки и повышения квалификации педагогов школ, колледжей и преподавателей ВУЗов, персонала предприятий атомной, горнорудной, нефтегазовой и других отраслей промышленности РК.</p>
                    <p><b style="padding: 40px">Наша миссия</b> - содействие образовательным учреждениям (школы, высшие учебные заведения), а также организациям отраслей промышленности в повышении их конкурентоспособности и безопасности посредством предоставления качественных услуг в сферах дополнительного профессионального образования персонала, а также иных мероприятий в соответствии с ожиданиями и требованиями Заказчиков.</p>
                    <p>31 июля 2023 года Центру выдан за номером KZ14VEK00015030 Аттестат на право проведения работ в области промышленной безопасности "Комитетом промышленной безопасности Министерства по чрезвычайным ситуациям Республики Казахстан" по направлениям:</p>
                    <ul>
                        <li>- Проведение технического обслуживания газопотребляющих систем</li>
                        <li>- Подготовка, переподготовка специалистов, работников в области промышленной безопасности</li>
                        <li>-Проведение экспертизы промышленной безопасности (технологии, технические устройства, материалы, применяемые на опасных производственных объектах, за исключением строительных материалов, применяемых на опасных производственных объектах; опасные технические устройства; проектные документы, подлежащие экспертизе в области промышленной безопасности в соответствии с Кодексом Республики Казахстан «О недрах и недропользовании»;</li>
                       </ul>
                        <ul>
                        <li><em>Безопасность и охрана труда</em></li>
                        <li><em>Промышленная безопасность</em></li>
                        <li><em>Промышленная безопасность</em></li>
                        <li><em>По пожарной безопасности в объеме пожарно-технического минимума</em></li>
                        <li><em>Электробезопасность</em></li>
                        <li><em>Радиационная безопасность</em></li>
                        <li><em>Оказание доврачебной медицинской помощи</em></li>
                       </ul>
                     <button class="toggle-btn" id="toggleBtn">Показать больше</button>
                    <div class="content-wrapper" id="content">
                        <p><span style="padding: 40px">С 2018 года Центр проводит обучение в соответствии с регламентирующими требованиями законодательства Республики Казахстан, проводит квалицированное обучение руководителей, специалистов и работников по следующим позициям:</span></p>
                       <b>А также выполняют услуги по промышленной безопасности:</b>
                       <ul>
                        <li><em>Аттестация рабочих мест по условиям труда</em></li>
                        <li><em>Экспертиза промышленной безопасности</em></li>
                        <li><em>Дефектоскопия неразрушающими методами контроля</em></li>
                        <li><em>Диагностика и обследование технических устройств</em></li>
                        <li><em>Освидетельствование технических устройств на опасных</em></li>
                        <li><em>производственных объектах</em></li>
                        <li><em>Разработка декларации опасных производственных объектах</em></li>
                        <li><em>Получение разрешение на применение технических устройств</em></li>
                        <li><em>Проведение энергоаудита на предприятии и многое др.</em></li>
                       </ul>
                       <p><b style="padding: 40px">Наше Видение: ТОО «Республиканский Учебный Центр «ПАРАСАТ»</b> стремится стать конкурентоспособной организацией, достойно представляющая качественное отечественное и международное образование в мировом академическом, интеллектуальном и научном пространстве, соответствующей современному уровню знаний для решения профессиональных современных задач.</p>
                       <p><b style="padding: 40px">Наши Стратегические цели:</b> Обеспечить качественное образование обучающимся, предлагая актуальные и вдохновляющие образовательные траектории в соответствии современным трендам развития той или иной отрасли и потребностям рынка труда.</p>
                       <ul>
                        <li>1.	Подготавливать конкурентоспособных профессионалов, владеющих морально-этическими ценностями, способностями к социальной адаптации.</li>
                        <li>2.	Формирование у обучающихся социально-личностных качеств: целеустремленности, коммуникабельности, организованности, ответственности, трудолюбия, толерантности и повышении их общей культуры.</li>
                        <li>3.	Формирование у обучающихся компетенций, обеспечивающих его профессиональную деятельность в выбранной ими области.</li>
                        <li>4.	Участвовать и занимать места в первой десятке лучших по различным рейтингам для оценки достижений образовательных программ.</li>
                        <li>5.	Способствовать к развитию профессиональных программ по повышению квалификации, посредством усиления партнерских отношений с ведущими отечественными и международными образовательными организациями.</li>
                       </ul>
                        <p>Программы обучения, предлагаемые Центром, проводятся в открытом и корпоративном форматах с выездом преподавателей на производственную площадку клиента.</p>
                        <p><b style="padding: 40px">Преимущества Центра:</b></p>
                     Учебные программы для слушателей разрабатываются преподавателями-практиками, имеющими большой опыт работы в бизнесе/производстве и менеджменте.
                     <ul>
                        <li>1.	Индивидуальный учет потребностей и подход к каждому клиенту.</li>
                        <li>2.	Оптимальная стоимость программ при их высоком качестве.</li>
                        <li>3.	Гибкий формат обучения, возможность выбора удобного графика обучения.</li>
                        <li>4.	Для корпоративных клиентов - индивидуальные программы обучения с выездом на территорию клиентов.</li>
                        <li>5.	Организация (и полное сопровождение) семинаров, тренингов, стажировок.</li>
                      </ul>
                     Места проведения обучения: обучение может проводиться как в г. Алматы, так и в любом городе Казахстана. Мы имеем большой опыт предоставления всего комплекса конференц-сервиса для проведения любого корпоративного тренинга.
                     В Центре, за время начала деятельности, всего прошло обучение более 5000 слушателей из различных регионов Казахстана.

                    </div>





                </div>
            </div>
        </div>
        
    </div>

    <div class="text-center mt-5">
                <h6 class="text-primary">Наши партнеры</h1>
    </div>

    <div class="container-fluid color-cer p-3">
            <div class="row g-5 justify-content-center mt-2">
                <div class="col-md-2  wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-1.png')}}">
                    </div>
                    <h5 class="text-center">Kazatomprom</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-2.png')}}">
                    </div>
                    <h5 class="text-center">KazMunayGas</h5>
                </div>
                <div class="col-md-2  wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-3.png')}}">
                    </div>
                    <h5 class="text-center">АО Волковгеология</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-4.png')}}">
                    </div>
                    <h5 class="text-center">ДП ОРТАЛЫК</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-5.png')}}">
                    </div>
                    <h5 class="text-center">KazakhstanTemirZholy</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-6.png')}}">
                    </div>
                    <h5 class="text-center">IntergasCentralAsia</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-7.png')}}">
                    </div>
                    <h5 class="text-center">АО Алатау Жарық Компаниясы</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-8.png')}}">
                    </div>
                    <h5 class="text-center">АО QAZAQGAZ AIMAQ</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-9.png')}}">
                    </div>
                    <h5 class="text-center">АО КазТрансОйл</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-10.png')}}">
                    </div>
                    <h5 class="text-center">АО УМЗ</h5>
                </div>
                <div class="col-md-2 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center">
                        <img class="img-fluid rounded-circle mx-auto mb-5" src="{{asset('/site/img/testimonial-11.png')}}">
                    </div>
                    <h5 class="text-center">ТОО Институт высоких технологий</h5>
                </div>
            </div>
       
    </div>

@endsection
