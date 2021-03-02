<?php


namespace App\Http\Controllers;


use App\Supply;
use Illuminate\Http\Request;


class SupplyController extends Controller
{
    public function getMedicine(){
        $supply = Supply::all();
       return $this->response($supply,200);
    }

    public function getMedicineById($id)
    {
        $supply = Supply::find($id);
        return response($supply,200);
    }

    public function modifySupply(Request $request, Supply $supply){

        $datas = $request->input();

        $supply->commercial_name = $datas['supply']['commercial_name'];
        $supply->composition = $datas['supply']['composition'];
        $supply->effects = $datas['supply']['effects'];
        $supply->contraindication = $datas['supply']['contraindication'];
        $supply->order_of_priority = $datas['supply']['order_of_priority'];
        $supply->laboratory_name = $datas['supply']['laboratory_name'];
        $supply->dose = $datas['supply']['dose'];

        $supply->save();

        return $this->success(true);
    }


}
