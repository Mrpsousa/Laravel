<?php

namespace LaraDev\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use LaraDev\Property;

class PropertyController extends Controller
{
    //index = listagem
    public function index()
    {
        //$properties = DB::select("SELECT * FROM properties");
        $properties = Property::all();
        return view('property.index')->with('properties', $properties);
    }
//----------------------------------------------------------------------
    public function show($name)
    {
        //$property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();
        if(!empty($property))
        {
            return view('property.show')->with('property', $property);
            //var_dump($id);
            //echo"Done!"; //teste
        }else{
            return redirect()->action('PropertyController@index');
        }

    }

//----------------------------------------------------------------------

    public function create()
    {
        return view('property.create');
    }
//----------------------------------------------------------------------

    public function store(Request $request)
    {
        $propertySlug = $this->setName($request->title);

       /* $property = [
            $request->title,
            $propertySlug,
            $request->descript,
            $request->rental_price,
            $request->sale_price
        ];
        DB::insert("INSERT  INTO properties (title, name, descript, rental_price, sale_price) VALUES  (?, ?, ?, ?, ?)", $property);*/

        $property = [
            'title' => $request->title,
            'name' => $propertySlug,
            'descript' => $request->descript,
            'rental_price' => $request->rental_price,
            'sale_price' => $request->sale_price
        ];

        Property::create($property);
        return redirect()->action('PropertyController@index');
    }

//----------------------------------------------------------------------
    public function edit($name)
    {
        //$property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();
        if(!empty($property))
        {
            return view('property.edit')->with('property', $property);;
        }else{
            return redirect()->action('PropertyController@index');
        }
    }
//----------------------------------------------------------------------
     public function update(Request $request, $id)
     {
        $propertySlug = $this->setName($request->title);

       /* $property = [
            $request->title,
            $propertySlug,
            $request->descript,
            $request->rental_price,
            $request->sale_price,
            $id
        ];

        DB::update("UPDATE properties SET title = ?,  name = ?, descript = ?,  rental_price = ?,  sale_price = ? WHERE id = ?", $property);
        */
        $property = Property::find($id);

        $property->title = $request->title;
        $property->name = $propertySlug;
        $property->descript = $request->descript;
        $property->rental_price = $request->rental_price;
        $property->sale_price = $request->sale_price;

        $property->save();

        return redirect()->action('PropertyController@index');

     }

     //----------------------------------------------------------------------
    public function destroy($name)
    {
        //$property = DB::select("SELECT * FROM properties WHERE name = ?", [$name]);
        $property = Property::where('name', $name)->get();
        if(!empty($property))
        {
            DB::delete("DELETE FROM properties WHERE name = ?", [$name]);
        }
        return redirect()->action('PropertyController@index');

    }
//----------------------------------------------------------------------

    private function setName($title)
    {
        $propertySlug = str_slug($title);
        //$properties = DB::select("SELECT * FROM properties");
        $properties = Property::all();

        $t = 0;
        foreach($properties as $property)
        {
            if(str_slug($property->title) === $propertySlug)
            {
                $t++;
            }
        }

        if($t > 0)
        {
            $propertySlug =  $propertySlug.'-'.$t;
        }
        return $propertySlug;
    }
}
