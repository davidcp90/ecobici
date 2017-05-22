<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Show a list of all of the application's users.
     *
     * @return Response
     */
    public function prestamosh()
    {
        $prestamo = DB::table('prestamo')->get();
        return view('users_dashboard/dash_inicio', ['prestamos' => $prestamo]);
    }
}
