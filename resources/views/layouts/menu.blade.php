<li class="nav-item {{ Request::is('products*') ? 'active' : '' }}">
   
</li>
<li class="nav-item {{ Request::is('productos*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productos.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Productos</span>
    </a>
</li><li class="nav-item {{ Request::is('categorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('categorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Categorias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('subCategorias*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('subCategorias.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Sub Categorias</span>
    </a>
</li>
<li class="nav-item {{ Request::is('productReports*') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('productReports.index') }}">
        <i class="nav-icon icon-cursor"></i>
        <span>Product Reports</span>
    </a>
</li>
