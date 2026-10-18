<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function home()
    {
        $categories = Furniture::selectRaw('category, MIN(image) as image')
            ->groupBy('category')
            ->orderBy('category')
            ->get();

        $featured = Furniture::orderByDesc('id')->take(4)->get();

        return view('page.home', compact('categories', 'featured'));
    }

    public function index(Request $request)
    {
        $query = Furniture::query();

        if ($request->filled('q')) {
            $q = $request->q;
            $query->where(function ($w) use ($q) {
                $w->where('name', 'like', "%{$q}%")
                  ->orWhere('material', 'like', "%{$q}%");
            });
        }

        if ($request->filled('kategori')) {
            $query->where('category', $request->kategori);
        }

        switch ($request->urut) {
            case 'termurah':
                $query->orderBy('price');
                break;
            case 'termahal':
                $query->orderByDesc('price');
                break;
            default:
                $query->orderBy('id');
        }

        $furnitures = $query->paginate(8)->withQueryString();
        $categories = Furniture::select('category')->distinct()->orderBy('category')->pluck('category');

        return view('page.produk', compact('furnitures', 'categories'));
    }

    public function show($id)
    {
        $furniture = Furniture::findOrFail($id);

        $related = Furniture::where('category', $furniture->category)
            ->where('id', '!=', $furniture->id)
            ->take(4)
            ->get();

        return view('page.detail', compact('furniture', 'related'));
    }
}
