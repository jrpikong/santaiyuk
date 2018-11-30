<?php
/**
 * Created by PhpStorm.
 * User: jrpikong
 * Date: 19/05/18
 * Time: 03:08
 */


namespace App\Widgets;

use App\PageView;
use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class TotalViewThisMonth extends AbstractWidget
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
        $fromDate = new Carbon('first day of this month');
        $toDate = new Carbon('now');
        $articles = PageView::whereBetween('created_at', array($fromDate->toDateTimeString(), $toDate->toDateTimeString()) )->get()->count();
        $count = $articles;
        $string = "Total View Bulan Ini";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-ticket',
            'title'  => "{$count} {$string}",
            'text'   => 'Total Semua Viewers Dalam Satu Bulan Pada Website Pergikeliling.com',
            'button' => [
                'text' => 'View All Posts',
                'link' => route('voyager.posts.index'),
            ],
            'image' => voyager_asset('images/compass/documentation.jpg'),
        ]));
    }

    public function getRelatedModel()
    {
        return Voyager::model('User');
    }

    public function isAccessible()
    {
        return \Auth::user()->can('browse', Voyager::model('User'));
    }
}
