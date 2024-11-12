<!-- Product Name Field -->
<div class="form-group">
    {!! Form::label('product_name', 'Product Name:') !!}
    <p>{{ $productReport->product_name }}</p>
</div>

<!-- Product Code Field -->
<div class="form-group">
    {!! Form::label('product_code', 'Product Code:') !!}
    <p>{{ $productReport->product_code }}</p>
</div>

<!-- Product Stock Field -->
<div class="form-group">
    {!! Form::label('product_stock', 'Product Stock:') !!}
    <p>{{ $productReport->product_stock }}</p>
</div>

<!-- Product Price Field -->
<div class="form-group">
    {!! Form::label('product_price', 'Product Price:') !!}
    <p>{{ $productReport->product_price }}</p>
</div>

<!-- Total Price Field -->
<div class="form-group">
    {!! Form::label('total_price', 'Total Price:') !!}
    <p>{{ $productReport->total_price }}</p>
</div>

<!-- Creation Date Field -->
<div class="form-group">
    {!! Form::label('creation_date', 'Creation Date:') !!}
    <p>{{ $productReport->creation_date }}</p>
</div>

<!-- Modification Date Field -->
<div class="form-group">
    {!! Form::label('modification_date', 'Modification Date:') !!}
    <p>{{ $productReport->modification_date }}</p>
</div>

<!-- Category Name Field -->
<div class="form-group">
    {!! Form::label('category_name', 'Category Name:') !!}
    <p>{{ $productReport->category_name }}</p>
</div>

<!-- Created By User Field -->
<div class="form-group">
    {!! Form::label('created_by_user', 'Created By User:') !!}
    <p>{{ $productReport->created_by_user }}</p>
</div>

<!-- Modified By User Field -->
<div class="form-group">
    {!! Form::label('modified_by_user', 'Modified By User:') !!}
    <p>{{ $productReport->modified_by_user }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $productReport->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $productReport->updated_at }}</p>
</div>

