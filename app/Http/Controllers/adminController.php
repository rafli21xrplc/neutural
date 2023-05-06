<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\wisata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{

    protected function dashboard(Request $request): Response
    {
        return response()->view('Admin.DetailWisata', [
            "title" => "Dashboard",
            "datasWisata" => wisata::all()
        ]);
    }

    protected function updated($id): Response
    {
        return Response()->view('Admin.UpdatedWisata', [
            "title" => "Updated",
            "datas" => wisata::find($id)
        ]);
    }

    protected function deleted($id): RedirectResponse
    {
        wisata::destroy($id);
        return response()->redirectTo('/Dashboard');
    }

    // protected function /
}
