@extends("welcome")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="background-wite content">
                    <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a data-toggle="pill" href="#directory-hotels">AKOMODASI</a></li>
                        <li><a data-toggle="pill" href="#food-drinks">KULINER</a></li>
                        <li><a data-toggle="pill" href="#activities-travelling">AKTIFITAS</a></li>
                        <li><a data-toggle="pill" href="#product">PRODUK</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="directory-hotels" class="tab-pane fade in active">
                            @include('pages.form.directoryHotel')
                        </div>
                        <div id="food-drinks" class="tab-pane fade">
                            @include('pages.form.directoryFoodAndDrink')
                        </div>
                        <div id="activities-travelling" class="tab-pane fade">
                            @include('pages.form.directoryActivitiesTravelling')
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