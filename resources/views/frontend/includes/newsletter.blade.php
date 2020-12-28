<!-- newsletter section -->
<section class="bg-light pattern-overlay-1-dark">
    <div class="container">
        <div class="col-md-12 col-lg-9 mx-auto p-4 p-sm-5">
            <div class="text-center px-0 px-sm-5">
                <p class="mb-3 lead">
                    @if(Session::get('language') == 'russian')
                        21,215+ Прокат автомобилей и доступные туры! <br>
                        Подпишитесь на нашу рассылку
                    @else
                        21,215+ Car Rent and Tours Available!<br>
                        Subscribe our newslatter
                    @endif
                </p>
                <form>
                    <div class="input-group px-0 px-md-5">
                        <input class="form-control border-radius-right-0 border-right-0 bg-transparent" type="text" name="search" placeholder="@if(Session::get('language') == 'russian') Введите адрес электронной почты @else Enter your email @endif">
                        <button type="button" class="btn btn-grad mb-0 border-radius-left-0 custom-btn">
                            <span class=" d-md-block">
                                @if(Session::get('language') == 'russian')
                                    подписываться
                                @else
                                    SUBSCRIBE
                                @endif
                            </span>
                            <span class="d-md-none"><i class="fab fa-paper-plane-o m-0"></i></span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end newsletter section -->