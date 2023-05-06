<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    protected function index(Request $request): Response
    {
        return response()->view('Admin.Category', [
            "title" => "Category"
        ]);
    }

    protected function store(Request $request): RedirectResponse
    {
        $validate = $request->validate([
            'category' => 'required|unique:categories'
        ]);

        category::create($validate);
        return redirect('category');
    }
}
