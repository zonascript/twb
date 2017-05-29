<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProduct;
use App\Service\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @var Product
     */
    private $product;
    protected $productTypes = [
        'Regular Pack' => 'Regular Pack',
        'Family Pack' => 'Family Pack',
        'Special Pack' => 'Special Pack',
    ];

    /**
     * ProductController constructor.
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['pageTitle'] = 'Product List';
        return view('admin.products.index', $data);
    }

    public function datatableList()
    {
        return $this->product->datatable();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['productTypes'] = $this->productTypes;
        $data['pageTitle'] = 'Add New Product';
        return view('admin.products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreProduct $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProduct $request)
    {
        if ($this->product->store($request)) {
            return backendRedirect('product');
        }
        return backendRedirect('product/create')->withInput();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['id'] = $id;
        $data['post'] = $this->product->getById($id);
        $data['pageTitle'] = 'Edit Product';
        $data['productTypes'] = $this->productTypes;
        return view('admin.products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param StoreProduct $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProduct $request, $id)
    {
        if ($this->product->update($request, $id)) {
            return backendRedirect('product/' . $id . '/edit')->with('message', 'Product Saved.');;
        }
        return backendRedirect('product/' . $id . '/edit')->withErrors(['update' => 'Error when updating the data.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if ($this->product->destroy($id)) {
            return backendRedirect('product');
        }
        return backendRedirect('product')->withErrors(['delete_failed' => 'Error when delete the data.']);
    }
}
