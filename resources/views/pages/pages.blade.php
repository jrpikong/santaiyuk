@extends("welcome")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="background-wite content">
                    <h3>{{$page->title}}</h3>
                    @if($page->image)<img src="{{asset('storage/'.$page->image)}}" class="responsive image-view-post">@endif
                    {!! $page->body !!}
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