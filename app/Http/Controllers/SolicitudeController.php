<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use App\Role;
use App\Teacher;
/*  */

class SolicitudeController extends Controller
{
    /*  */
    public function teacher()
    {
        $user = auth()->user();
        if (! $user->teacher) {
            try {
                \DB::beginTransaction();
                $user->role_id = Role::TEACHER;
                Teacher::create([
                    'user_id' => $user->id
                ]);
                $success = true;
            } catch (\Exception $exception) {
                \DB::rollBack();
                $success = $exception->getMessage();
            }

            if ($success === true) {
                \DB::commit();
                auth()->logout();
                auth()->loginUsingId($user->id);
                return back()->with('message', ['success', __("Felicidades, ya eres un instructor en la plataforma")]);
            }
            return back()->with('message', ['danger', $success]);
        }
        return back()->with('message', ['danger', __("Algo ha fallado")]);
    }
    /*  */
}
