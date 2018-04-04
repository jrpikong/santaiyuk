<?php
/**
 * Created by PhpStorm.
 * User: arief
 * Date: 27/12/2017
 * Time: 11.05
 */

namespace App\Http\Library;


use Illuminate\Http\Request;

class ApiHelper
{
    /**
     * Checking Required Parameter
     * @param array $requiredParam
     * @param Request $request
     * @return \stdClass
     */
    public static function checkRequiredParam($requiredParam=[],Request $request){
        $response = new \stdClass();
        $response->isSuccess = false;
        $response->errorMsg = null;

        $input = $request->except('token');
        $paramFailed = array();
        foreach ($requiredParam as $item) {
            if (!array_key_exists($item,$input)) $paramFailed[] = $item;
        }
        // if there is missing parameter
        if (!empty($paramFailed)){
            $message = "Missing Parameter : ".implode(', ',$paramFailed);
            $response->errorMsg = $message;
            return $response;
        }

        $response->isSuccess = true;
        return $response;
    }

    /**
     * Build response for API
     * @param int $code
     * @param string $message
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function buildResponse($code=400,$message='Failed Response',$data=array()){
        $response = new \stdClass();
        $response->code = $code;
        $response->message = $message;

        $result = new \stdClass();
        $result->response = $response;
        if (!is_array($data)) $result->data = $data;
        else $result->data = $data;

        return response()->json($result);
    }

    /**
     * Build response for API with pagination
     * @param int $code
     * @param string $message
     * @param int $totalPage
     * @param array $data
     * @return \Illuminate\Http\JsonResponse
     */
    public static function buildResponsePagination ($code = 400, $message = 'Failed Response', $totalPage = 1, $data = array())
    {
        $response = new \stdClass();
        $response->code = $code;
        $response->message = $message;

        $result = new \stdClass();
        $result->response = $response;
        if (!is_array($data)) {
            $result->totalpage = 0;
            $result->data = [$data];
        }else {
            $result->totalpage = $totalPage;
            $result->data = $data;
        }

        return response()->json($result);
    }
}