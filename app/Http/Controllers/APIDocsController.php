<?php

namespace App\Http\Controllers;

/**
 * @OA\Info(title="面試趣 APIs Document", version="0.1")
 */
class APIDocsController extends Controller
{
    public function getJSON()
    {
        //指定Swagger要掃描的路徑，\OpenApi\scan()會讀取這個路徑下的文件
        //並且將讀取到的Swagger Annotations都轉換成JSON格式
        $swagger = \OpenApi\scan(app_path('Http/Controllers/'));
        return response()->json($swagger, 200);
    }

    /**
     * 訪問 Swagger UI
     * 為了避免線上訪問，因此鎖定在本機
     */
    public function index()
    {
        $env = config('app.env');
        if ($env !== "local") {
            abort(403);
        }

        return view('api-document');
    }
}
