<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateRequest;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $pages = Product::Paginate(6);
        return view('product', ['products' => $products , 'pages'=> $pages]);
    }

    public function create()
    {
        $seasons = Season::all();
        return view('register', compact('seasons'));
    }

    public function store(RegisterRequest $request)
    {
        $form = $request->all();
        Product::create($form);
        return redirect('/products');
    }

    public function detail($productId)
    {
        $item = ['id' => $productId];
        $products = Product::all();
        return view('detail', $item);
    }

    public function update(UpdateRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Product::find($request->id)->update($form);
        return redirect('/products');
    }

    public function delete(Request $request)
    {
        Product::find($request->id)->delete();
        return redirect('/products');
    }
    
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $query = Product::query;
        if(!empty($keyword)) {
        $query -> where('name', 'LIKE', "%{$keyword}%")
        ->orwhere('name',$keyword);
        $param = [ 'keyword' => $keyword,
                    'query' => $query];
        }
             return view('/product', $param);
     }

         
    }

