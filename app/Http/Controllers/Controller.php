<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Renvoyer une réponse erreur en JSON
     * @param $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function error($message, $code = 500)
    {
        return $this->response(['code' => $code, 'message' => $message], $code);
    }

    /**
     * Renvoyer une réponse succès en JSON
     * @param $datas
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function success($datas, $code = 200)
    {
        return $this->response($datas, $code);
    }

    /**
     * Renvoyer une réponse en JSON
     * @param $datas
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function response($datas, $code = 200)
    {
        return response()->json($datas)->setStatusCode($code);
    }
}
