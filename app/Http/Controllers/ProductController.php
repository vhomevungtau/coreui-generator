<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Repositories\ProductRepository;
use App\Http\Controllers\AppBaseController;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;
use Response;

class ProductController extends AppBaseController
{
    /** @var  ProductRepository */
    private $productRepository;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepository = $productRepo;
    }

    /**
     * Display a listing of the Product.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productRepository->all();

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new Product.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created Product in storage.
     *
     * @param CreateProductRequest $request
     *
     * @return Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        if ($request->publish != null) {
            $input['publish'] = 1;
        } else {
            $input['publish'] = 0;
        }

        // dd( $input['price']);

        $product = $this->productRepository->create($input);

        Toastr::success('Product saved successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Display the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Toastr::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified Product.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Toastr::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified Product in storage.
     *
     * @param int $id
     * @param UpdateProductRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateProductRequest $request)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Toastr::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        if ($request->publish != null) {
            $request['publish'] = 1;
        } else {
            $request['publish'] = 0;
        }

        $product = $this->productRepository->update($request->all(), $id);

        Toastr::success('Product updated successfully.');

        return redirect(route('admin.products.index'));
    }

    /**
     * Remove the specified Product from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $product = $this->productRepository->find($id);

        if (empty($product)) {
            Toastr::error('Product not found');

            return redirect(route('admin.products.index'));
        }

        $this->productRepository->delete($id);

        Toastr::success('Product deleted successfully.');

        return redirect(route('admin.products.index'));
    }
}
