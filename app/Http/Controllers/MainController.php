<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saint;

class MainController extends Controller
{
    public function home()
    {
        $saints = Saint::all();
        $data = [
            "saints" => $saints
        ];
        return view("pages.home", $data);
    }
    public function searchSaint($id)
    {
        $saint = Saint::find($id);
        $data = [
            "saint" => $saint
        ];
        return view("pages.saint", $data);
    }
    public function destroy($id)
    {
        $saint = Saint::find($id);
        $saint->delete();
        return redirect()->route("home");
    }
    public function createSaint()
    {
        return view("pages.create-saint");
    }
    public function requestSaint(Request $request)
    {
        $data = $request->all();
        $saint = new Saint();
        $saint->name = $data["name"];
        $saint->birth_place = $data["birth_place"];
        $saint->blessing_date = $data["blessing_date"];
        $saint->miracles_number = $data["miracles_number"];
        $saint->save();
        return redirect()->route("home");

    }
}