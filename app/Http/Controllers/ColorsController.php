<?php
 
namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorsController extends Controller
{
    public function index()
    {
        $colors = Color::get();

        foreach ($colors as $color) {
            $color->hex = sprintf("#%02x%02x%02x", $color->red, $color->green, $color->blue);
        }

        return view('colors.index', ['colors' => $colors]);
    }

    public function show()
    {
        //show a single resource
        $color = Color::findOrFail();

        return view('colors.index', ['color' => $color]);
    }
   
    public function create()
    {
        //show a view to create a new resource
        return view('colors.index');
    }

    public function store()
    {
        $color = new Color();

        $hex = request('color');
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

        $color->red = $r;
        $color->green = $g;
        $color->blue = $b;
        
        $color->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $color = Color::findOrFail($id);

        return view('colors.index', compact('color'));
    }

    public function update(Request $request)
    {
        $id = request('id');
        $color = Color::findOrFail($id);
        $hex = request('color');
        list($r, $g, $b) = sscanf($hex, "#%02x%02x%02x");

        $color->red = $r;
        $color->green = $g;
        $color->blue = $b;
        
        $color->save();

        return response()->json(['success'=>true]);
    }

    public function destroy($id)
    {
        $color = Color::findOrFail($id);

        $color->delete();

        return redirect('/');
    }

}