<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_c = Comic::all();
        return view('comics.index', compact('data_c'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $request->validate([
            "title" => "required|string|max:50|unique:comics",
            "description" => "required|string",
            //completare validation price.
            "price" => "required|numeric",
            "series" => "required|string|max:100",
            "sale_date" => "required",
            "type" => [
                "required",
                Rule::in(['graphic novel','comic book'])
                ,],
            "thumb" => "nullable|url"
        ]);
        // $newcomic = new Comic();
        // $newcomic->title = $data_comics["title"];
        // $newcomic->description = $data_comics["description"];
        // $newcomic->price = $data_comics["price"];
        // $newcomic->series = $data_comics["series"];
        // $newcomic->sale_date = $data_comics["sale_date"];
        // $newcomic->type = $data_comics["type"];
        // if(!empty($data_comics["thumb"])){
        //     $newProduct->image = $data_comics["thumb"];
        // }
        // $newcomic->save();
        $data_comics = $request->all();
        $newcomic = Comic::create($data_comics);

        return redirect()->route('comics.show', $newcomic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data_comics = Comic::find($id);
        return view('comics.show',compact('data_comics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit',compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            "title" => "required|string|max:50|unique:comics",
            "description" => "required|string",
            //completare validation price.
            "price" => "required|numeric",
            "series" => "required|string|max:100",
            "sale_date" => "required",
            "type" => [
                "required",
                Rule::in(['graphic novel','comic book'])
                ,],
            "thumb" => "nullable|url"
        ]);
        // $data = $request->all();
        // $comic->title = $data["title"];
        // $comic->description = $data["description"];
        // $comic->price = $data["price"];
        // $comic->series = $data["series"];
        // $comic->sale_date = $data["sale_date"];
        // if(!empty($data["thumb"])){
        //     $product->image = $data["thumb"];
        // }
        // $comic->save();
        $data_comics = $request->all();
        $comic->update($data_comics);
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
