  
     <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container about px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 ps-lg-0 wow fadeIn" data-wow-delay="0.1s" style="min-height: 800px; max-width:800px">
                    <div class="position-relative h-100 card pdf-card">
                        <iframe class="position-absolute img-fluid w-100 h-100 pdf-frame"
                            src="{{ asset('/storage/students/' . $student->image ?? '') }}" alt="">
                        </iframe>
                    </div>
                </div>  
                <div class="col-lg-6 about-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h6 class="text-primary"> {{ $student->firstname ?? '' }}</h6>
                       
                        {{-- <h3 class="mb-4">{{ $student->course->name ?? '' }}</h3> --}}
                     
                        <p><i class="fa fa-check-circle text-primary me-3"></i>ИИН : {{ $student->iin }}</p>
                        <p><i class="fa fa-check-circle text-primary me-3"></i>Фамилия : {{ $student->lastname ?? '' }}</p>
                                               <p><i class="fa fa-check-circle text-primary me-3"></i>ИИН: {{$student->iin ?? ''}} </p>

                        <a href="{{ route('site.student') }}"
                           class="btn btn-primary rounded-pill py-3 px-5 mt-3">Возврат</a> 
                    </div>
                </div>
            </div>
        </div>
    </div>
