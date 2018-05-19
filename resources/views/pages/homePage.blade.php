@extends("welcome")

@section("content")
    <slider-carousel></slider-carousel>

    <div class="container-fluid">
        <div class="row">
            {{--Recent--}}
            <recent></recent>
            {{--News--}}
            <akomodasi></akomodasi>
            {{--Hotel--}}
            <kuliner></kuliner>
            {{--Traveling--}}
            <traveling></traveling>
        </div>
    </div>
@endsection