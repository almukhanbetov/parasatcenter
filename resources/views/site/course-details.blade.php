@extends('layouts.site')
@section('title', 'Курсы описание')
@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary">@yield('title')</h6>
                <!--<h1 class="mb-4">Experienced Team Members</h1>-->
            </div>
            <div class="row g-4">
                <div class="col-lg-12 col-md-6 wow fadeInUp text-black" data-wow-delay="0.1s">
                    <p><b style="padding: 40px">TОО «Республиканский Учебный Центр «ПАРАСАТ»</b> создан в июне 2018 года в целях подготовки, переподготовки и повышения квалификации педагогов школ, колледжей и преподавателей ВУЗов, персонала предприятий атомной, горнорудной, нефтегазовой и других отраслей промышленности РК.</p>
                    <p><b style="padding: 40px">Наша миссия</b> - содействие образовательным учреждениям (школы, высшие учебные заведения), а также организациям отраслей промышленности в повышении их конкурентоспособности и безопасности посредством предоставления качественных услуг в сферах дополнительного профессионального образования персонала, а также иных мероприятий в соответствии с ожиданиями и требованиями Заказчиков.</p>
                    
                     <button class="toggle-btn" id="toggleBtn">Показать больше</button>
                  
                    </div>
                </div>
            </div>
        </div>        
    </div>
    <div class="text-center mt-5">
        <h6 class="text-primary">Наши партнеры</h1>
    </div>
   

@endsection
