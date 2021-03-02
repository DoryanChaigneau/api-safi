<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Utils;
use App\Visit;
use Illuminate\Http\Request;

class VisitController extends Controller
{
    /**
     * Récupère les visites de l'utilisateur connecté grace à un timestamp
     * @param Request $request
     * @param $timestamp
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function get_withTimestamp(Request $request, $timestamp)
    {
        /** @var Visit[] $visits */
        $visits = $request->employee->visits_fromTimestamp($timestamp); // On récupère les visites du jour pour l'utilisateur connecté
        if(!empty($visits)){
            foreach ($visits as $visit) { // Pour chaque visite on récupère le Practitioner
                $visit['practitioner'] = $visit->practitioner();
            }
            return $this->success($visits);  // On renvoit une réponse 200 avec les visites en json
        }else{
            return $this->error('Aucune visite', 404);
        }
    }

    /**
     * Reporte une visite à une nouvelle date
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function report(Request $request, Visit $visit)
    {
        if ($visit) { // Si la visite existe
            if ($visit->employee() == $request->employee) { // On vérifie si l'utilisateur est bien propriétaire de la visite
                if (isset($request->new_date)) {
                    $visit->date = new \DateTime($request->new_date); // On assigne la nouvelle date à la visite
                    $visit->save();
                    return $this->success(true);
                }
                return $this->error("Aucune date n'est spécifiée");
            }
            return $this->error("Vous ne pouvez pas modifier cette visite", 403);
        }
        return $this->error('Aucune visite', 404);
    }

    /**
     * Retourne la visite
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_byId(Request $request, Visit $visit)
    {
        if ($visit->employee() == $request->employee) {
            return $this->success($visit);
        } else {
            return $this->error("Vous n'êtes pas autorisé à effectuer cette action, ce n'est pas votre visite", 403);
        }
    }

    /**
     * Annule la visite
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function cancel(Request $request, Visit $visit)
    {
        if ($visit->employee() == $request->employee) {
            $visit->delete();
            return $this->success(true);
        } else {
            $this->error("Vous n'êtes pas autorisé à effectuer cette action", 403);
        }
    }
}

