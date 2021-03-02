<?php


namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function login(Request $request) {
        $datas = $request->input();
        /** @var Employee $employee */
        $employee = Employee::where('login', $datas['login'])->first();
        if(!is_null($employee)){
            if(hash('SHA512', $datas['password']) === $employee->password){
                $datas_return = [
                    "token" => $employee->generate_api_token(),
                    "firstname" => $employee->firstname,
                    "lastname" => $employee->lastname,
                    "login" => $employee->login,
                    "id" => $employee->id,
                    "address" => $employee->address,
                    "pc" => $employee->postalCode,
                    "city" => $employee->city,
                    "hireDate" => $employee->hireDate,
                    "phonenumber" => $employee->phone
                ];
                return response($datas_return, 200);
            }
        }
        return response('Identifiants invalides', 401);
    }
}
