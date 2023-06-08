<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Inertia\Response;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return Inertia::render('Food/Index', [
            'foods' => Food::query()
                ->when(Request::input('search'), function($query, $search) {
                    $query->where('name','LIKE','%'.$search.'%');
                })->paginate(2)
                ->withQueryString(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        $food = Food::findOrFail($id);

        return Inertia::render('Food/Item', [
            'food' => $food
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        //
    }
}
