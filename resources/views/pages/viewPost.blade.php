@extends("welcome")

@section("content")
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
		<div class="background-wite content text-center">
                        <a href ="https://www.alanahotels.com/en/hotel/view/5/the-alana-hotel---conference-center---sentul-city" target="_blank">
                            <img src="{{asset('img/ads/web-banner-pergikeliling.jpg')}}" width="100%" class="img-responsive">
                        </a>
                </div>
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
                    <div>
                        <div class="fb-comments" data-href="{{$url}}" data-width="100%" data-numposts="5"></div>
                    </div>
                </div>
                <div class="background-wite content text-center">
			<a href ="https://www.alanahotels.com/en/hotel/view/5/the-alana-hotel---conference-center---sentul-city" target="_blank">
	                    <img src="{{asset('img/ads/web-banner-pergikeliling.jpg')}}" width="100%" class="img-responsive">
			</a>
                </div>
            </div>

            {{--Sidebar with Vue JS--}}

            <sidebar></sidebar>
        </div>
    </div>

@endsection
