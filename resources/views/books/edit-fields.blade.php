<!-- Order -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Đơn hàng</label>
    <input type="text" class="form-control" name="order_id" value="{{ $book->order_id }}" readonly="">
</div>

<!-- Status -->
<div class="mb-1">
    {!! Form::label('name', 'Trạng thái') !!}
    <select class="form-select" name="status_id">
        @foreach ($statuses as $v)
            <option value="{{ $v->id }}" @if ($v->id == $book->status_id) selected @endif>{{ $v->name }}</option>
        @endforeach
    </select>
</div>

<!-- Date -->
<div class="mb-1 position-relative" id="datepicker4">
    <label class="form-label">Chọn gày</label>
    <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true"
        data-date-container="#datepicker4" name="date" value="{{ date('d-m-Y', strtotime($book->date)) }}">
</div>

<!-- Time Field -->
<div class="mb-1 col-sm-12">
    <label class="form-label">Chọn giờ</label>
    <div class="input-group" id="timepicker-input-group3">
        <input id="timepicker3" type="text" class="form-control" value="{{ date('H:m', strtotime($book->time)) }}" data-show-meridian="false" data-provide="timepicker"
            data-minute-step="30" name="time">
    </div>
</div>

<!-- Content Field -->
<div class="mb-1">
    {!! Form::label('content', 'Ghi chú') !!}
    {!! Form::text('content', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-1 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.books.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
