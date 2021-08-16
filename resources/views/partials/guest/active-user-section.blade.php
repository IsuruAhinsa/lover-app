<section class="section-pb-space section-pt-space single-feature-section landing-bg overflow-hidden">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-sec">
                    <h4>active users</h4>
                    <h3>more then 100k active users</h3>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="vector-section">
                    <img src="https://themes.pixelstrap.com/friendbook/assets/images/company-landing/feature-vector/active-user.svg"
                         class="img-fluid blur-up lazyload active-img wow zoomIn" data-wow-delay="0.20s" alt="">
                </div>
            </div>
            <div class="col-lg-5">
                <div class="feature-content wow fadeInRight" data-wow-delay="0.25s">
                    <div>
                        <h3 class="title">Register To Enjoy This Application</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum blanditiis atque cum
                            iure nihil, ipsa commodi veniam, nemo ipsam sed aliquam aliquid modi totam. Quia
                            architecto nesciunt facere consectetur laudantium.</p>
                        <ul class="feature-lisiting">
                            <li>
                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/checkmark.svg" class="img-fluid blur-up lazyload" alt="">
                                Easy to Register with your Device.
                            </li>
                            <li>
                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/checkmark.svg" class="img-fluid blur-up lazyload" alt="">
                                Register in a minute by your Email ID
                            </li>
                            <li>
                                <img src="https://themes.pixelstrap.com/friendbook/assets/svg/checkmark.svg" class="img-fluid blur-up lazyload" alt="">
                                Your Data is Secure with us.
                            </li>
                        </ul>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-solid btn-md">register now</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="animation-home">
        <div class="cross"></div>
        <div class="cross cross1"></div>
        <div class="tringle"></div>
        <div class="tringle tringle1"></div>
        <div class="circle"></div>
        <div class="circle circle1"></div>
    </div>
</section>
