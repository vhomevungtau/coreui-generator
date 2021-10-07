<!-- Name Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('name', '- Tên dịch vụ: ') !!}
    {{ $product->name }}
</div>

<!-- Desc Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('desc', '- Mô tả: ') !!}
    {{ $product->desc }}
</div>

<!-- Number Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('number', '- Số lần trị liệu: ') !!}
    {{ $product->number }}
</div>

<!-- Price Field -->
<div class="mb-2 col-sm-12">
    {!! Form::label('price', '- Giá: ') !!}
    {{ number_format($product->price,0) }}
</div>




