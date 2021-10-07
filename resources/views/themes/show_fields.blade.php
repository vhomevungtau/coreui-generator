<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $theme->id }}</p>
</div>

<!-- Theme Field -->
<div class="col-sm-12">
    {!! Form::label('theme', 'Theme:') !!}
    <p>{{ $theme->theme }}</p>
</div>

<!-- Sidebar Field -->
<div class="col-sm-12">
    {!! Form::label('sidebar', 'Sidebar:') !!}
    <p>{{ $theme->sidebar }}</p>
</div>

<!-- Option Field -->
<div class="col-sm-12">
    {!! Form::label('option', 'Option:') !!}
    <p>{{ $theme->option }}</p>
</div>

