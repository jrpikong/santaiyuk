@extends("welcome")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <div class="background-wite content">
                    <h3>{{$post->title}}</h3>
                    <img src="{{asset('storage/'.$post->image)}}" class="responsive image-view-post">
                    {!! $post->body !!}
                    <div>
                        {{--<ul>--}}
                        @foreach($tags as $tags)
                            <span class="tags">{{$tags->name}}</span>
                        @endforeach
                        {{--</ul>--}}
                    </div>
                </div>
            </div>

            {{--Sidebar with Vue JS--}}

            <sidebar></sidebar>
        </div>
    </div>

@endsection