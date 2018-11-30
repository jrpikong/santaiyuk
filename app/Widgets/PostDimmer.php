<?php

namespace App\Widgets;


use Arrilot\Widgets\AbstractWidget;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class PostDimmer extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $id = \Auth::user()->id;
        $count = Voyager::model('Post')->where('author_id',$id)->count();

        $string = trans_choice('voyager::dimmer.post', $count);

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-news',
            'title'  => "{$count} {$string}",
            'text'   => __('voyager::dimmer.post_text', ['count' => $count, 'string' => Str::lower($string)]),
            'button' => [
                'text' => __('voyager::dimmer.post_link_text'),
                'link' => route('voyager.posts.index'),
            ],
            'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
        ]));
    }

    public function getRelatedModel()
    {
        return Voyager::model('Post');
    }

    public function isAccessible()
    {
        return Voyager::can('browse_posts');

    }
}
