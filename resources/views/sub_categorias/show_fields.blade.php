<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Nombre:') !!}
    <p>{{ $subcategory->name }}</p>
</div>

<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Categoría:') !!}
    <p>{{ $subcategory->category_name }}</p> <!-- Cambié a category_name -->
</div>
<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $subcategory->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $subcategory->updated_at }}</p>
</div>

