<!-- Product Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Dịch vụ: {{ $product->name }}</label>
    <input type="text" class="form-control" name="product_id" value="{{ $product->id }}" readonly="">
</div>

<!-- Number Field -->
<div class="mb-1 col-sm-12">
    {!! Form::label('number', 'Số lần') !!}
    {!! Form::number('number', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Giá</label>
    <input type="text" class="form-control" name="price">
</div>

<!-- 'bootstrap / Toggle Switch Publish Field' -->
<div class="mb-1 col-sm-12">
    <input type="checkbox" id="switch3" name="publish" checked data-switch="success" />
    <label for="switch3" data-on-label="On" data-off-label="Off"></label>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.products.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
