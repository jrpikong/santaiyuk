<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Http\Controllers\VoyagerBreadController as BaseVoyagerBreadController;

use TCG\Voyager\Http\Controllers\Traits\BreadRelationshipParser;

class PostController extends BaseVoyagerBreadController
{
    use BreadRelationshipParser;

    public function store (Request $request)
    {
        $slug = 'posts';
        $dataType = Voyager::model('DataType')->where('slug', '=', $slug)->first();
        // Check permission
        $this->authorize('add', app($dataType->model_name));

        // Validate fields with ajax
        $val = $this->validateBread($request->all(), $dataType->addRows);

        if ($val->fails()) {
            return response()->json(['errors' => $val->messages()]);
        }

        if (!$request->ajax()) {
            $data = $this->insertUpdateData($request, $slug, $dataType->addRows, new $dataType->model_name());
            $post = Post::find($data->id);
            $post->tag(['tempe','tahu']);

            dd($post);
            event(new BreadDataAdded($dataType, $data));

            return redirect()
                ->route("voyager.{$dataType->slug}.index")
                ->with([
                    'message'    => __('voyager.generic.successfully_added_new')." {$dataType->display_name_singular}",
                    'alert-type' => 'success',
                ]);
        }
    }
}
