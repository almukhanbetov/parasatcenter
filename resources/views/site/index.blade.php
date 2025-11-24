@extends('layouts.app')
@section('title', 'Республиканский Учебный Центр «ПAPACAT»')
@section('content')


    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('/site/img/1.gif')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0 text-black">
                        <h5 class="mb-4">31 июля 2023 года Центру выдан за номером KZ14VEK00015030 Аттестат на право проведения работ в области промышленной безопасности "Комитетом промышленной безопасности Министерства по чрезвычайным ситуациям Республики Казахстан" по направлениям:</h5>
                        <p>
                         Проведение технического обслуживания газопотребляющих систем 
                        </p>
                        <p>Подготовка, переподготовка специалистов, работников в области промышленной безопасности </p>
                        <p>Проведение экспертизы промышленной безопасности (технологии, технические устройства, материалы, применяемые на опасных производственных объектах, за исключением строительных материалов, применяемых на опасных производственных объектах; опасные технические устройства; проектные документы, подлежащие экспертизе в области промышленной безопасности в соответствии с Кодексом Республики Казахстан «О недрах и недропользовании»; </p>
                        <a class="btn btn-primary toggle-a  py-3 px-5 mb-3" id="bt">Подробнее</a>
                       <div class="index-wrapper" id="content-1">
                        <p>С 2018 года Центр проводит обучение в соответствии с регламентирующими требованиями законодательства Республики Казахстан, проводит квалицированное обучение руководителей, специалистов и работников по следующим позициям:</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Безопасность и охрана труда</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Промышленная безопасность</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>По пожарной безопасности в объеме пожарно-технического минимума</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Радиационная безопасность</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Оказание доврачебной медицинской помощи</p>
                        <p>А также выполняют услуги по промышленной безопасности:</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Аттестация рабочих мест по условиям труда</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Экспертиза промышленной безопасности</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Дефектоскопия неразрушающими методами контроля</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Диагностика и обследование технических устройств</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Освидетельствование технических устройств на опасных производственных объектах</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Разработка декларации опасных производственных объектах</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Получение разрешение на применение технических устройств</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Проведение энергоаудита на предприятии и многое др</p>
                       </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
            
<div class="container my-5 p-5 color-cer">
    <div class="text-primary text-center mb-4">
        <h6>Разрешительные документы</h6>
    </div>
  <div class="row justify-content-center g-4">
    
    <!-- Карточка PDF -->
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/1.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/2.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/3.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/4.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/5.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/6.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/7.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card pdf-card">
        <iframe
          class="pdf-frame"
          src="{{ asset('/site/pdf/8.pdf') }}#toolbar=0&navpanes=0&scrollbar=0"
        ></iframe>
      </div>
    </div>

    <!-- Можно добавить другие карточки -->
    

  </div>
</div>

<div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container quote px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute img-fluid w-100 h-100" src="{{asset('/site/img/parasat.gif')}}" style="object-fit: cover;" alt="">
                    </div>
                </div>
                <div class="col-lg-6 quote-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary">Free Quote</h6>
                        <h1 class="mb-4">Get A Free Quote</h1>
                        <p class="mb-4 pb-2">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo erat amet</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
