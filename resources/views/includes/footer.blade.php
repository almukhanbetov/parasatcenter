<div class="container-fluid bg-dark text-body footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Парасат</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Толе би,302a, 112 кабинет, Алматы, РК</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>7 777 100 51 23</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@parasat.kz</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Быстрые ссылки</h5>
                <a class="btn btn-link" href="">О нас</a>
                <a class="btn btn-link" href="">Контакты</a>
                <a class="btn btn-link" href="">Услуги</a>
                <a class="btn btn-link" href="">Курсы</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4">Галерея</h5>
                <div class="row g-2">
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-1.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-2.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-3.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-4.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-5.jpg')}}" alt="">
                    </div>
                    <div class="col-4">
                        <img class="img-fluid rounded" src="{{asset('/site/img/gallery-6.jpg')}}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-white mb-4"></h5>
                <p></p>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Введите email">                    
                </div>
                <div class="position-relative mx-auto" style="max-width: 400px;">
                    <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Введите email">                    
                </div>
                <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">Отправить</button>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">WEBCODE</a>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                    <br><a href="#" target="_blank">WEBCODEKZ</a>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
    <i class="bi bi-arrow-up"></i>
</a>
<img src="{{asset('/site/img/qr-code.png')}}" alt="" width="100" height="100" class="back-to-top" >
{{--<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">--}}
{{--    <img src="{{asset('/site/img/qr-code.png')}}" alt="" width="100" height="100">--}}
{{--</a>--}}

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/site/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('/site/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('/site/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('/site/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('/site/lib/owlcarousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('/site/lib/isotope/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('/site/lib/lightbox/js/lightbox.min.js')}}"></script>

<script src="{{asset('/site/js/main.js')}}"></script>
<script src="{{asset('/assets/admin.js')}}"></script>

@yield('scripts')
</body>

</html>

