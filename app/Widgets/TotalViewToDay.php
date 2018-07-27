<?php
/**
 * Created by PhpStorm.
 * User: jrpikong
 * Date: 19/05/18
 * Time: 03:08
 */


namespace App\Widgets;

use App\PageView;
use App\Post;
use Arrilot\Widgets\AbstractWidget;
use Carbon\Carbon;
use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;

class TotalViewToDay extends AbstractWidget
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
        $date = Carbon::today();
        $articles = PageView::all()->where('created_at','>=',$date)->count();
        $count = $articles;
        $string = "Total View Hari Ini";

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'voyager-ship',
            'title'  => "{$count} {$string}",
            'text'   => 'Total Semua Viewers Artikel Hari Ini Pada Website <br>Pergikeliling.com',
            'button' => [
                'text' => 'View All Posts',
                'link' => route('voyager.posts.index'),
            ],
            'image' => voyager_asset('images/compass/documentation.jpg'),
        ]));
    }
}
