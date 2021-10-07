<!-- Theme Field -->
<div class="mb-2 col-sm-6">
    <label>Giao diện</label>
    <p></p>
    <input type="checkbox" id="switch0" name="theme" data-switch="none"
        {{ Auth::user()->theme->theme == 1 ? '' : 'checked' }} />
    <label for="switch0" data-on-label="Sáng" data-off-label="Tối"></label>

</div>

<!-- Sidebar Field -->
<div class="mb-2 col-sm-6">
    <label>Màu điều hướng</label>
    <div class="form-check">
        <input type="radio" id="customRadio1" name="sidebar" value="light" class="form-check-input"
            {{ Auth::user()->theme->sidebar == 'light' ? 'checked' : '' }}>
        <label class="form-check-label" for="customRadio1">Sáng</label>
    </div>
    <div class="form-check">
        <input type="radio" id="customRadio2" name="sidebar" value="dark" class="form-check-input"
            {{ Auth::user()->theme->sidebar == 'dark' ? 'checked' : '' }}>
        <label class="form-check-label" for="customRadio2">Tối</label>
    </div>
    <div class="form-check">
        <input type="radio" id="customRadio3" name="sidebar" value="default" class="form-check-input"
            {{ Auth::user()->theme->sidebar == 'default' ? 'checked' : '' }}>
        <label class="form-check-label" for="customRadio2">Mặc định</label>
    </div>
</div>

<!-- Option Field -->
<div class="mb-2 col-sm-12">
    <button type="submit" class="btn btn-primary btn-rounded">Lưu</button>
    <a href="{{ route('admin.themes.index') }}" class="btn btn-default justify-content-md-end">Hủy</a>
</div>
