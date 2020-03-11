<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EchoController extends Controller
{
    /**
     * @OA\GET(
     *     path="/echo",
     *     summary="取得回音",
     *     tags={"Echo"},
     *     @OA\Response(response="200", description="ok")
     * )
     * @param Request $request
     * @return array
     */
    public function show(Request $request)
    {
        return $this->output("get", $request->all());
    }

    /**
     * @OA\POST(
     *     path="/echo",
     *     summary="取得回音",
     *     tags={"Echo"},
     *     @OA\Response(response="200", description="ok")
     * )
     * @param Request $request
     * @return array
     */
    public function store(Request $request)
    {
        return $this->output("post", $request->all());
    }

    /**
     * @OA\PUT(
     *     path="/echo",
     *     summary="取得回音",
     *     tags={"Echo"},
     *     @OA\Response(response="200", description="ok")
     * )
     * @param Request $request
     * @return array
     */
    public function update(Request $request)
    {
        return $this->output("put", $request->all());
    }

    /**
     * @OA\DELETE(
     *     path="/echo",
     *     summary="取得回音",
     *     tags={"Echo"},
     *     @OA\Response(response="200", description="ok")
     * )
     * @param Request $request
     * @return array
     */
    public function destroy(Request $request)
    {
        return $this->output("delete", $request->all());
    }


    protected function output(string $method, array $array)
    {
        return [
            'httpMethod' => strtoupper($method),
            'echo' => $array
        ];
    }
}
