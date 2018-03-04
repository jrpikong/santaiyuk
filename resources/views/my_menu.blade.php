{{--<ul class="list-unstyled components">--}}
@if(!isset($innerLoop))
        <ul class="list-unstyled components">
@else
        <ul id="homeSubmenu" class="list-unstyled collapse">
@endif

@php
        if (Voyager::translatable($items)) {
            $items = $items->load('translations');
        }
@endphp

@foreach ($items as $item)

        @php

                $originalItem = $item;
                if (Voyager::translatable($item)) {
                    $item = $item->translate($options->locale);
                }

                $listItemClass = null;
                $linkAttributes =  null;
                $styles = null;
                // With Children Attributes
                if(!$originalItem->children->isEmpty()) {
                    $linkAttributes =  'data-toggle="collapse" aria-expanded="true" class=""';
                    if(url($item->link()) == url()->current()){
                                $listItemClass = 'in';
                        }else{
                                $listItemClass = '';
                        }

                }

        @endphp

        <li class="{{ $listItemClass }}">
                <a href="{{ url($item->link()) }}" target="{{ $item->target }}" style="{{ $styles }}" {!! $linkAttributes or '' !!}>
                        <span>{{ $item->title }}</span>
                </a>
                @if(!$originalItem->children->isEmpty())
                        @include('my_menu', ['items' => $originalItem->children,'innerLoop' => true])
                @endif
        </li>
@endforeach

</ul>

