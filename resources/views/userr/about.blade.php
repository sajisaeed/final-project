 @extends('layouts.index')
@section('mainContentUser')
<!-- about -->
<div class="about">
    <div class="container">
        <h3 class="w3_agile_header">About Us</h3>
        <div class="about-agileinfo w3layouts">
            <div class="col-md-8 about-wthree-grids grid-top">
                <h4>The concept of the electronic library </h4>
                <p class="top">
                    @foreach ($about as $about )
                    {{$about->about}}

                    @endforeach
                </p>
                <div class="about-w3agilerow">
                    <div class="col-md-4 about-w3imgs">
                        <img src="images/p3.jpg" alt="" class="img-responsive zoom-img"/>
                    </div>
                    <div class="col-md-4 about-w3imgs">
                        <img src="images/p4.jpg" alt=""  class="img-responsive zoom-img"/>
                    </div>
                    <div class="col-md-4 about-w3imgs">
                        <img src="images/p3.jpg" alt=""  class="img-responsive zoom-img"/>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-4 about-wthree-grids">
                <div class="offic-time">
                    <div class="time-top">
                        <h4>Gifts :</h4>
                    </div>
                    <div class="time-bottom">
                        <h5>At vero eos </h5>
                        <h5>Accusamus et</h5>
                        <p>For all those interested in historical, cultural, religious, Islamic and Arabic books and novels </p>
                    </div>
                </div>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //about -->

@endsection('mainContentUser')
