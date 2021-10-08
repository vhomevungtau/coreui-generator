<?php

namespace App\Http\Controllers;

use Response;
use App\Models\User;
use App\Models\Order;
use App\Models\Price;
use App\Models\Status;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Repositories\PriceRepository;
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

        return view('prices.index', [
            'prices'    => $prices
        ]);
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
            Toastr::error('Không tìm thấy giá dịch vụ');

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
            Toastr::error('Không tìm thấy giá dịch vụ');

            return redirect(route('admin.prices.index'));
        }

        if ($request->publish != null) {
            $request['publish'] = 1;
        } else {
            $request['publish'] = 0;
        }

        $price = $this->priceRepository->update($request->all(), $id);

        Toastr::success('Cập nhật giá dịch vụ thành công.');

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
            Toastr::error('Không tìm thấy giá dịch vụ');

            return redirect(route('admin.prices.index'));
        }

        $this->priceRepository->delete($id);

        Toastr::success('Xáo giá dịch vụ thành công.');

        return redirect(route('admin.prices.index'));
    }

    public function getOrder($id)
    {
        $price = $this->priceRepository->find($id);

        return view('prices.order',[
            'price'     => $price,
            'users'     => User::all(),
            'statuses'  => Status::all()
        ]);
    }

    public function postOrder(Request $request)
    {
        $input = $request->all();

        $price = Price::find($request->price_id)->price;

        $input['price_id']  = $request->price_id;

        $input['money'] = $price;

        $input['total'] = (Double)$price - ((Double)$price * (Double)$request->discount);

        $order = Order::create($input);

        Toastr::success('Đặt dịch vụ thành công.');

        return redirect(route('admin.orders.index'));
    }
}
