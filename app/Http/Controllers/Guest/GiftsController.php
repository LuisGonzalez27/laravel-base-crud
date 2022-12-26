<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;
use Psy\CodeCleaner\ReturnTypePass;

class GiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $gifts = Gift::orderBy('id', 'desc')->get();
        return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * 
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * 
     */
    public function store(Request $request)
    {
        $request->validate([
            'gift' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'image' => 'required'
        ]);

        $formData = $request->all();
        $newGift = new Gift;
        $newGift->gift = $formData['gift'];
        $newGift->name = $formData['name'];
        $newGift->surname = $formData['surname'];
        $newGift->age = $formData['age'];
        $newGift->country = $formData['country'];
        $newGift->city = $formData['city'];
        $newGift->address = $formData['address'];
        $newGift->image = $formData['image'];
        $newGift->save();

        return redirect()->route('gifts.show', $newGift->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function show(Gift $gift)
    {
        return view('Gifts.show', compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * 
     */
    public function edit(Gift $gift)
    {
        return view('gifts.edit', compact('gift'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * 
     */
    public function update(Request $request, $id)
    {
        $gift = Gift::find($id);

        $request->validate([
            'gift' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'age' => 'required',
            'country' => 'required',
            'city' => 'required',
            'address' => 'required',
            'image' => 'required'
        ]);

        $formData = $request->all();
       
        $gift->gift = $formData['gift'];
        $gift->name = $formData['name'];
        $gift->surname = $formData['surname'];
        $gift->age = $formData['age'];
        $gift->country = $formData['country'];
        $gift->city = $formData['city'];
        $gift->address = $formData['address'];
        $gift->image = $formData['image'];
        $gift->save();

        // return redirect()->route('gifts.show', $gift->id);
        return redirect()->route('gifts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
        return redirect()->route('gifts.index');
    }
}