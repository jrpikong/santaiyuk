@extends("welcome")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="background-wite content">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="pill" href="#directory-hotels">HOTELS</a></li>
                        <li><a data-toggle="pill" href="#food-drinks">FOOD AND DRINKS</a></li>
                        <li><a data-toggle="pill" href="#activities-travelling">ACTIVITIES & TRAVELLING</a></li>
                        <li><a data-toggle="pill" href="#product">PODUCT</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="directory-hotels" class="tab-pane fade in active">
                            @include('pages.form.directoryHotel')
                        </div>
                        <div id="food-drinks" class="tab-pane fade">
                            @include('pages.form.directoryFoodAndDrink')
                        </div>
                        <div id="activities-travelling" class="tab-pane fade">
                            <h3>ACTIVITIES & TRAVELLING</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div id="product" class="tab-pane fade">
                            @include('pages.form.direktoriProduct')
                        </div>
                    </div>
                </div>
                <div class="background-wite content text-center">
                    <img src="{{asset('img/image001.jpg')}}" width="100%" class="img-responsive">
                </div>
            </div>


            {{--Sidebar with Vue JS--}}
            <sidebar></sidebar>
        </div>
    </div>
@endsection