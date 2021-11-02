<!-- Price Field -->
<div class="mb-1">
    {!! Form::label('name', 'Dịch vụ') !!}
    <select class="form-select" name="price_id">
        @foreach ($prices as $v)
            <option value="{{ $v->id }}"  @if ($v->id == $order->price_id) selected @endif>
                {{ $v->product->name }} - {{ $v->number }} - {{ $v->price }}</option>
        @endforeach
    </select>
</div>

<!-- User -->
<div class="mb-1">
    {!! Form::label('name', 'Khách hàng') !!}
    <select class="form-select" name="user_id">
        @foreach ($users as $v)
            <option value="{{ $v->id }}" @if ($v->id == $order->user_id) selected @endif>
                {{ $v->name }}</option>
        @endforeach
    </select>
</div>

<!-- Status -->
<div class="mb-1">
    {!! Form::label('name', 'Khách hàng') !!}
    <select class="form-select" name="status_id">
        @foreach ($statuses as $v)
            <option value="{{ $v->id }}" @if ($v->id == $order->status_id) selected @endif>
                {{ $v->desc }}</option>
        @endforeach
    </select>
</div>

<!-- Discount -->
<div class="mb-1">
    {!! Form::label('name', 'Giảm giá') !!}
    <select class="form-select" name="discount">
        <option value="0" @if ($order->discount == 0) selected @endif>0 %</option>
        <option value="0.05" @if ($order->discount == 0.05) selected @endif>5 %</option>
        <option value="0.1" @if ($order->discount == 0.1) selected @endif>10 %</option>
    </select>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.orders.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
