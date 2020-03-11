<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StandBySwaggerDocController extends Controller
{
    //
}
/**
 * @OA\GET(
 *     path="/counter/interview／experiences",
 *     summary="全站面試心得數量",
 *     tags={"Counter"},
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         content={
 *            @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                        property="count",
 *                        type="integer",
 *                        description="數量"
 *                    )
 *                )
 *            )
 *        }
 *    )
 * )
 */

/**
 * @OA\GET(
 *     path="/counter/interview/featured",
 *     summary="精選面試數量",
 *     tags={"Counter"},
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         content={
 *            @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                        property="count",
 *                        type="integer",
 *                        description="精選面試數量"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */

/**
 * @OA\GET(
 *     path="/experiences",
 *     summary="精選面試心得",
 *     tags={"Experience"},
 *     @OA\Parameter(
 *         name="isFeatured",
 *         in="query",
 *         description="是否為精選面試心得？",
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
 *                        property="tag",
 *                        type="string",
 *                        description="標籤"
 *                    ),
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        description="標題"
 *                    ),
 *                    @OA\Property(
 *                        property="companyId",
 *                        type="string",
 *                        description="公司編號"
 *                    ),
 *                    @OA\Property(
 *                        property="companyTitle",
 *                        type="string",
 *                        description="公司名稱"
 *                    ),
 *                    @OA\Property(
 *                        property="score",
 *                        type="integer",
 *                        description="評價分數"
 *                    ),
 *                    @OA\Property(
 *                        property="difficulty",
 *                        type="integer",
 *                        description="難度"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */

/**
 * @OA\GET(
 *     path="blog-articles",
 *     summary="從 Blog 取得的文章列表",
 *     tags={"Articles"},
 *     @OA\Parameter(
 *         name="isFetured",
 *         in="query",
 *         description="是否為精選",
 *         required=true,
 *     ),
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         content={
 *            @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    type="array",
 *                    @OA\Items(
 *                        @OA\Property(
 *                            property="id",
 *                            type="integer",
 *                            description="編號"
 *                        ),
 *                        @OA\Property(
 *                            property="title",
 *                            type="string",
 *                            description="標題"
 *                        ),
 *                        @OA\Property(
 *                            property="cover",
 *                            type="string",
 *                            description="封面"
 *                        ),
 *
 *                        @OA\Property(
 *                            property="tags",
 *                            type="array",
 *                            description="標籤",
 *                            @OA\Items(),
 *                        ),
 *                        @OA\Property(
 *                            property="link",
 *                            type="string",
 *                            description="超連結"
 *                        ),
 *
 *
 *                    )
 *                )
 *            )
 *        }
 *    )
 * )
 */


/**
 * @OA\GET(
 *     path="componies",
 *     summary="公司列表",
 *     tags={"Componies"},
 *     @OA\Parameter(
 *         name="isPopular",
 *         in="query",
 *         description="是否熱門公司",
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
 *                        property="id",
 *                        type="integer",
 *                        description="編號"
 *                    ),
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        description="公司名稱"
 *                    ),
 *                    @OA\Property(
 *                        property="interviews",
 *                        type="integer",
 *                        description="面試數量"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */

/**
 * @OA\GET(
 *     path="componies/{componyId}",
 *     summary="公司項目",
 *     tags={"Componies"},
 *     @OA\Parameter(
 *         name="componyId",
 *         in="path",
 *         description="公司編號",
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
 *                        property="id",
 *                        type="integer",
 *                        description="公司編號"
 *                    ),
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        description="公司名稱"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */


/**
 * @OA\GET(
 *     path="industries",
 *     summary="行業類別",
 *     tags={"Industries"},
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         content={
 *            @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                        property="id",
 *                        type="integer",
 *                        description="編號"
 *                    ),
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        description="名稱"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */


/**
 * @OA\GET(
 *     path="/taiwan/areas",
 *     summary="取得台灣地區列表",
 *     tags={"Taiwan"},
 *     @OA\Response(
 *         response=200,
 *         description="ok",
 *         content={
 *            @OA\MediaType(
 *                mediaType="application/json",
 *                @OA\Schema(
 *                    @OA\Property(
 *                        property="id",
 *                        type="integer",
 *                        description="地區編號"
 *                    ),
 *                    @OA\Property(
 *                        property="title",
 *                        type="string",
 *                        description="地區名稱"
 *                    ),
 *                )
 *            )
 *        }
 *    )
 * )
 */
