<!-- Product Field -->
<div class="mb-1">
    {!! Form::label('name', 'Dịch vụ') !!}
    <select class="form-select" name="product_id">
        @foreach ($products as $v)
            <option value="{{ $v->id }}" >{{ $v->name }}</option>
        @endforeach
    </select>
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
    <label for="switch3"></label>
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.prices.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
