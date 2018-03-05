@extends("welcome")

@section("content")
    <div class="container-fluid" style="padding-top: 20px;">
        <div class="row">
            @if($article)
                @foreach($article as $item)
                    <div class="col-sm-6 col-md-4">
                        <a href="/{{$item->slug}}">
                            <div class="thumbnail">
                                <img alt="100%x200"
                                     data-src="{{asset('storage/'.$item->image)}}"
                                     style="height: 200px; width: 100%; display: block;"
                                     src="{{asset('storage/'.$item->image)}}"
                                     data-holder-rendered="true">
                                <div class="caption">
                                    <h3>{{$item->title}}</h3>
                                    <p>{{$item->created_at}}</p>
                                    <p>
                                        {{$item->excerpt}}
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection