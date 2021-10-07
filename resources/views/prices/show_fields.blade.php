<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $price->id }}</p>
</div>

<!-- Product Id Field -->
<div class="col-sm-12">
    {!! Form::label('product_id', 'Product Id:') !!}
    <p>{{ $price->product_id }}</p>
</div>

<!-- Number Field -->
<div class="col-sm-12">
    {!! Form::label('number', 'Number:') !!}
    <p>{{ $price->number }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $price->price }}</p>
</div>

