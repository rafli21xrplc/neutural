<?php

namespace App\Http\Controllers;

use App\Models\wisata;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class WisataController extends Controller
{

    protected function index(Request $request)
    {
        return view('homepage', [
            "title" => "Homepage",
            "datas" => wisata::all()
        ]);
    }

    protected function store(Request $request): RedirectResponse
    {
        // $validate = [
        //     $name = $request->input('name'),
        //     $category = $request->input('category'),
        //     $slug = Str::slug($name, '-'),
        //     $writer = $request->input('writer'),
        //     $image = $request->input('image'),
        //     $deskripsi = $request->input('deskripsi'),
        //     $body = $request->input('body'),
        // ];

        // $imageName = time() . '.' . $request->image->extension();
        // $path = $request->file('image')->storePubliclyAs(
        //     'images',
        //     $imageName,
        //     'public'
        // );

        // $path = $request->file('image')->store('images');

        $validate = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'writer' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('images');
        }
        $validate["slug"] = Str::slug($request->input('name'), '-');
        wisata::create($validate);

        return response()->redirectTo('/Dashboard');
    }

    protected function detail($id): Response
    {
        return response()->view('DetailWisata', [
            "title" => "Detail",
            "datas" => wisata::find($id)
        ]);
    }

    protected function storeUpdated(Request $request, int $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'category' => 'required',
            'writer' => 'required',
            'image' => 'required',
            'deskripsi' => 'required',
            'body' => 'required',
        ]);

        if ($request->file('image')) {
            $validate['image'] = $request->file('image')->store('images');
        }

        // if ($validate['slug'] !== )
        // $validate["slug"] = Str::slug($request->input('name'), '-');
        wisata::where('id', $id)->update($validate);

        return response()->redirectTo('/Dashboard');
    }
}
