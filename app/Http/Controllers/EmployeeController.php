<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Utils;
use App\Visit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;

class EmployeeController extends Controller
{
    public function all(Request $request){
        $users = Employee::all();
        return $this->success($users);
    }

    public function allVisitor(){
        $users = Employee::all()->where('employee_type_id','=',1);
        return response($users, 200);
    }

    public function getEmployeeById($id)
    {
     $user = Employee::find($id);
     return response($user,200);
    }

    public function allDelegate()
    {
        $users = Employee::all()->where('employee_type_id','=',2);
        return response($users,200);
    }

    public function allEmployees()
    {
        $employee = Employee::all();
        return response($employee,200);
    }

    public function activateEmployee(Request $request, $employee_id)
    {
        $employeeConnected = Utils::isValidConnection($request);
        if (!is_null($employeeConnected)){
            /** @var Employee $employee */
            $employee = Employee::where("id",$employee_id)->first();
            $activated = $request->input()["activated"];
            $employee->activated=$activated;
            try{
                $employee->save();
                return response(true,200);
            }catch (Exception $exception){
                return response(false, 403);
            }
        }
        return response('Vous n\'êtes pas autorisé à effectuer cette action', 403);
    }

    public function createEmployee(Request $request)
    {
        $datas = $request->input();
        $employee = Employee::create(['lastname' => $datas['lastname'], 'login' => $datas['login'], 'password' => hash('SHA512',$datas['password']), 'address' => $datas['address'], 'city' => $datas['city'], 'postalCode' => $datas['postalCode'], 'firstname' => $datas['firstname'],'phone' => $datas['phone'], 'hireDate' => $datas['hireDate'], 'district_id' => $datas['district_id'],'activated' => $datas['activated']]);
        $employee->save();
        if(!is_null($employee)){
            $datas_return = [
              "code" => $employee->code,
              "lastname" => $employee->lastname,
              "login" => $employee->login,
              "password" => (hash('SHA512',$employee->password)),
              "address" => $employee->address,
              "city" => $employee->city,
              "postalCode" => $employee->postalCode,
              "phone" => $employee->phone,
              "hireDate" => $employee->hireDate,
              "firstname" => $employee->firstname,
              "district_id" => (int)$employee->district_id,
              "activated" => (int)$employee->activated
            ];
            return response($datas_return,200);
        }
        return response('Échec de la création de compte',401);
    }

    public function modifyEmployee(Request $request , Employee $employee)
    {
        $datas = $request->input();
        $employee->lastname = $datas['employee']['lastname'];
        $employee->firstname = $datas['employee']['firstname'];
        $employee->address = $datas['employee']['address'];
        $employee->city = $datas['employee']['city'];
        $employee->postal_code = $datas['employee']['postal_code'];
        $employee->phone = $datas['employee']['phone'];
        $employee->activated = $datas['employee']['activated'];
        $employee->save();

        return $this->success(true);

    }


    public function researchEmployee(Request $request)
    {
        $datas = $request->input();
        $employee = Employee::where('login', $datas['login'])->first();
        if(!is_null($employee)){
          $data_return = [
              "lastname" => $employee->lastname,
              "firstname" => $employee->firstname,
              "login" => $employee->login,
              "address" => $employee->address,
              "postalCode" => $employee->postalCode,
              "city" => $employee->city,
              "phone" => $employee->phone,
              "hireDate" => $employee->hireDate,
              "activation" => $employee->activation
          ];
          return response($data_return,200);
        }
        return response("Erreur de recherche",401);
    }
//
//    public function connexionRole(Request $request)
//    {
//        $datas = $request->input();
//        $employee = Employee::where('login', $datas['login'])->first();
//        if(!is_null($employee)){
//            $data_return = [
//                'employee_type_id' => $employee->employee_type_id
//            ];
//            return response($data_return,200);
//        }
//        return response("Erreur");
//    }
}
