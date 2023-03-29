<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

/**
 * @OA\Info(
 *     
 *      title="Laravel with Swagger",
 *      description="Example Api documentation with Swagger",
 *      @OA\Contact(
 *          email="dev.aroldosantos@gmail.com"
 *      ),
 *  version="1.0.0",
 * ),
 * @OA\SecurityScheme(
     *      securityScheme="bearerAuth",   
     *      type="http",
     *      scheme="bearer"
     * )
 */
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
}
