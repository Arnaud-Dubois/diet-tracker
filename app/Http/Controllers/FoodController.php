<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Support\Facades\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Inertia\Inertia;
use Inertia\Response;

const PAGINATION_NUMBER = 4;

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
                    $query->where('name','LIKE','%'.$search.'%')
                    ->orWhere('calories','LIKE','%'.$search.'%')
                    ->orWhere('proteines','LIKE','%'.$search.'%')
                    ->orWhere('glucides','LIKE','%'.$search.'%')
                    ->orWhere('lipides','LIKE','%'.$search.'%');
                })->paginate(PAGINATION_NUMBER)
                ->onEachSide(1)
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
    public function destroy($id)
    // TODO: Handle Inertia Success and Error Response
    {
        try {
            $food = Food::findOrFail($id);
            $food->delete();
            return redirect()->back()->with('success', 'The food has been removed');
        } catch(ModelNotFoundException $exception) {
            return redirect()->back()->with('error', 'The food does not exist');
        }
    }
}
