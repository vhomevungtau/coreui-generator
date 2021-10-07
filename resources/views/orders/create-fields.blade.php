<!-- Price Field -->
<div class="mb-1">
    {!! Form::label('name', 'Dịch vụ') !!}
    <select class="form-select" name="price_id">
        @foreach ($prices as $v)
            <option value="{{ $v->id }}">{{ $v->product->name }} - {{ $v->number }} - {{ $v->price }}</option>
        @endforeach
    </select>
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
    {!! Form::label('name', 'Khách hàng') !!}
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
