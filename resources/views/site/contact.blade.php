@extends('layouts.site')
@section('title', 'Контакты')
@section('content')

    <div class="container-fluid bg-light overflow-hidden px-lg-0" style="margin: 6rem 0;">
        <div class="container contact px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 contact-text py-5 wow fadeIn" data-wow-delay="0.5s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary">@yield('title')</h6>
                        <!--<h1 class="mb-4">Feel Free To Contact Us</h1>-->
                        <!--<p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href="https://htmlcodex.com/contact-form">Download Now</a>.</p>-->
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="">
                                        <label for="name"></label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="">
                                        <label for="email"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="">
                                        <label for="subject"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="" id="message" style="height: 100px"></textarea>
                                        <label for="message"></label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Связаться</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 pe-lg-0" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <iframe class="position-absolute w-100 h-100" style="object-fit: cover;"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2907.6744851400967!2d76.87392587653709!3d43.21631638057703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x388368f995375e33%3A0x1319f4e63cef109f!2zMTfQsCwg0YPQu9C40YbQsCDQodGD0LvQtdC50LzQtdC90L7QstCwIDEsINCQ0LvQvNCw0YLRiw!5e0!3m2!1sru!2skz!4v1703833763361!5m2!1sru!2skz"
                                frameborder="0" allowfullscreen="" aria-hidden="false"
                                tabindex="0"></iframe>
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>

@endsection
