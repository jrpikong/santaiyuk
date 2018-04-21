@extends("welcome")

@section("content")
    <slider-carousel></slider-carousel>

    <div class="container-fluid">
        <div class="row">
            {{--Recent--}}
            <recent></recent>
            {{--News--}}
            <news></news>
            {{--Hotel--}}
            <hotel></hotel>
            {{--Traveling--}}
            <traveling></traveling>
        </div>
    </div>
@endsection