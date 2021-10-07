<?php

namespace App\Http\Controllers;

use Response;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Repositories\PriceRepository;
use App\Http\Requests\CreatePriceRequest;
use App\Http\Requests\UpdatePriceRequest;
use App\Http\Controllers\AppBaseController;

class PriceController extends AppBaseController
{
    /** @var  PriceRepository */
    private $priceRepository;

    public function __construct(PriceRepository $priceRepo)
    {
        $this->priceRepository = $priceRepo;
    }

    /**
     * Display a listing of the Price.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        // $prices = $this->priceRepository->all();

        $prices = Price::with('product')
                ->get();

        return view('prices.index',[
            'prices'    => $prices
        ]);
    }

    /**
     * Show the form for creating a new Price.
     *
     * @return Response
     */
    public function create()
    {
        $products = Product::all();

        return view('prices.create',[
            'products'  => $products
        ]);
    }

    /**
     * Store a newly created Price in storage.
     *
     * @param CreatePriceRequest $request
     *
     * @return Response
     */
    public function store(CreatePriceRequest $request)
    {
        $input = $request->all();

        if ($request->publish != null) {
            $request['publish'] = 1;
        } else {
            $request['publish'] = 0;
        }

        $price = $this->priceRepository->create($input);

        Toastr::success('Price saved successfully.');

        return redirect(route('admin.prices.index'));
    }

    /**
     * Display the specified Price.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Toastr::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        return view('prices.show')->with('price', $price);
    }

    /**
     * Show the form for editing the specified Price.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Toastr::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        return view('prices.edit')->with('price', $price);
    }

    /**
     * Update the specified Price in storage.
     *
     * @param int $id
     * @param UpdatePriceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePriceRequest $request)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Toastr::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        $price = $this->priceRepository->update($request->all(), $id);

        Toastr::success('Price updated successfully.');

        return redirect(route('admin.prices.index'));
    }

    /**
     * Remove the specified Price from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $price = $this->priceRepository->find($id);

        if (empty($price)) {
            Toastr::error('Price not found');

            return redirect(route('admin.prices.index'));
        }

        $this->priceRepository->delete($id);

        Toastr::success('Price deleted successfully.');

        return redirect(route('admin.prices.index'));
    }
}
