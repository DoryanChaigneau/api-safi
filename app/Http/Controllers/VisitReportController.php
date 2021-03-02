<?php


namespace App\Http\Controllers;


use App\Visit;
use App\VisitReport;
use Illuminate\Http\Request;

class VisitReportController extends Controller
{
    /**
     * GET Visit report from visit
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     */
    public function get_fromVisit(Request $request, Visit $visit)
    {
        if ($visit->employee() == $request->employee) {
            $vr = VisitReport::where('visit_id', $visit->id)->first();
            if ($vr) {
                return $this->success($vr);
            } else {
                return $this->error('Rapport introuvable', 404);
            }
        } else {
            return $this->error('Vous n\'avez pas le droit de voir ce rapport', 403);
        }
    }

    /**
     * PUT set content of report
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     */
    public function put_content(Request $request, Visit $visit)
    {
        if ($visit->employee() == $request->employee) {
            $report = $visit->report();
            if (isset($request->new_content)) {
                $content = stripcslashes($request->new_content);
                $report->content = $content;
                $report->save();
                return $this->success(true);
            } else {
                return $this->error('Veuillez remplir tous les champs');
            }
        } else {
            return $this->error('Vous n\'avez pas le droit d\'accéder à ce rapport');
        }
    }

    /**
     * @param Request $request
     * @param Visit $visit
     * @return \Illuminate\Http\JsonResponse
     */
    public function put_satisfaction(Request $request, Visit $visit)
    {
        if ($visit->employee() == $request->employee) {
            $report = $visit->report();
            if (isset($request->satisfaction)) {
                $satisfaction = intval($request->satisfaction);
                if ($satisfaction > 5) {
                    $satisfaction = 5;
                }
                if ($satisfaction < 1) {
                    $satisfaction = 1;
                }
                $report->satisfaction = $satisfaction;
                $report->save();
                return $this->success(true);
            } else {
                return $this->error('Veuillez remplir tous les champs');
            }
        } else {
            return $this->error('Vous n\'avez pas le droit d\'accéder à ce rapport');
        }
    }
}
