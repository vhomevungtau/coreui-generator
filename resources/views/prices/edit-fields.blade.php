<!-- Product Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Dịch vụ: {{ $price->product->name }}</label>
    <input type="text" class="form-control" name="product_id" value="{{ $price->product_id }}" readonly="">
</div>

<!-- Number Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('number', 'Số lần') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Giá</label>
    <input type="text" class="form-control" name="price" value="{{ $price->price }}">
</div>

<!-- 'bootstrap / Toggle Switch Publish Field' -->
<div class="mb-1 col-sm-12">
    <input type="checkbox" id="switch3"  name="publish" @if ($price->publish == 1 )
        checked
    @endif data-switch="success" />
    <label for="switch3" data-on-label="On" data-off-label="Off"></label>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.prices.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
