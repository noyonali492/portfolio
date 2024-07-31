
@include('include.about')
<!--Resume Section-->
@include('include.resume');

<section class="section bg-dark text-center">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-6 col-lg-3">
                <div class="row ">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-alarm-clock icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">500</h1>
                        <p class="text-light mb-1">Hours Worked</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-layers-alt icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">50K</h1>
                        <p class="text-light mb-1">Project Finished</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-face-smile icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">200K</h1>
                        <p class="text-light mb-1">Happy Clients</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="row">
                    <div class="col-5 text-right text-light border-right py-3">
                        <div class="m-auto"><i class="ti-heart-broken icon-xl"></i></div>
                    </div>
                    <div class="col-7 text-left py-3">
                        <h1 class="text-danger font-weight-bold font40">2k</h1>
                        <p class="text-light mb-1">Coffee Drinked</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('include.service')

<section class="section bg-custom-gray" id="price">
    <div class="container">
        <h1 class="mb-5"><span class="text-danger">Packs</span> Pricing</h1>
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">Free</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">0</span>
                        <span class="date">MO</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">5 <span class="text-muted">Project</span></li>
                        <li class="list-item">1GB <span class="text-muted">Storage</span></li>
                        <li class="list-item"><span class="text-muted">No Domain</span></li>
                        <li class="list-item">1 <span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">Basic</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">10</span>
                        <span class="date">MO</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">50 <span class="text-muted">Project</span></li>
                        <li class="list-item">10GB <span class="text-muted">Storage</span></li>
                        <li class="list-item">1<span class="text-muted">Domain</span></li>
                        <li class="list-item">5 <span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center price-card-requried mb-4">
                    <h3 class="price-card-title">Exclusive</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">25</span>
                        <span class="date">MO</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">150 <span class="text-muted">Project</span></li>
                        <li class="list-item">15GB <span class="text-muted">Storage</span></li>
                        <li class="list-item">5<span class="text-muted"> Domain</span></li>
                        <li class="list-item">15<span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="price-card text-center mb-4">
                    <h3 class="price-card-title">Pro</h3>
                    <div class="price-card-cost">
                        <sup class="ti-money"></sup>
                        <span class="num">99</span>
                        <span class="date">MO</span>
                    </div>
                    <ul class="list">
                        <li class="list-item">500 <span class="text-muted">Project</span></li>
                        <li class="list-item">1000GB <span class="text-muted">Storage</span></li>
                        <li class="list-item">10<span class="text-muted"> Domain</span></li>
                        <li class="list-item">Unlimite<span class="text-muted">User</span></li>
                    </ul>
                    <button class="btn btn-primary btn-rounded w-lg">Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section bg-dark py-5">
    <div class="container text-center">
        <h2 class="text-light mb-5 font-weight-normal">I Am Available For FreeLance</h2>
        <button class="btn bg-primary w-lg" >Hire me</button>
    </div>
</section>

<!-- Portfolio Section -->
@include('include.portfolio');
<!-- End of portfolio section -->

@include('include.blog')

@include('include.contact')