<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function returnData($msg, $code, $data = null)
    {
        $res = ['msg' => $msg];
        if ($data) $res['data'] = $data;
        return response()->json($res, $code);
    }

    public function success($data = null)
    {
        return $this->returnData('success', 200, $data);
    }
}
