<!-- Price Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Giá dịch vụ: {{ $price->product->name }} -
        {{ number_format($price->price,0) }}</label>
    <input type="text" class="form-control" name="price_id" value="{{ $price->id }}" readonly="">
</div>

<!-- User -->
<div class="mb-1">
    {!! Form::label('name', 'Khách hàng') !!}
    <select class="form-select" name="user_id">
        @foreach ($users as $v)
            <option value="{{ $v->id }}">{{ $v->name }}</option>
        @endforeach
    </select>
</div>

<!-- Status -->
<div class="mb-1">
    {!! Form::label('name', 'Trạng thái') !!}
    <select class="form-select" name="status_id">
        @foreach ($statuses as $v)
            <option value="{{ $v->id }}">{{ $v->name }}</option>
        @endforeach
    </select>
</div>

<!-- Discount -->
<div class="mb-1">
    {!! Form::label('name', 'Giảm giá') !!}
    <select class="form-select" name="discount">
        <option value="0">0 %</option>
        <option value="0.05">5 %</option>
        <option value="0.1">10 %</option>
    </select>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.prices.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
