<?php

namespace App\Http\Controllers\APIs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * 登入類別
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * @OA\GET(
     *     path="/api/login/{platform}",
     *     summary="取得平台登入的導向網址",
     *     tags={"login"},
     *     @OA\Parameter(
     *         name="platform",
     *         in="path",
     *         description="平台為 facebook|google",
     *         required=true,
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="ok",
     *         content={
     *            @OA\MediaType(
     *                mediaType="application/json",
     *                @OA\Schema(
     *                    @OA\Property(
     *                        property="redirectUrl",
     *                        type="string",
     *                        description="前往導向登入的網址"
     *                    ),
     *                )
     *            )
     *        }
     *    )
     * )
     * @param string $platform
     * @return string
     */
    public function show(string $platform)
    {
        return "{$platform} 登入網址";
    }
}
