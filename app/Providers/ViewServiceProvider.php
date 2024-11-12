<?php

namespace App\Providers;
use App\Models\categoria;
use App\Models\subcategorias; 
use App\Models\SubCategoria;
use App\Models\producto;
use Illuminate\Support\ServiceProvider;
use View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
       public function boot()
{

   View::composer(['productos.create', 'productos.edit'], function ($view) {
        $SubcategoryItems = SubCategoria::pluck('name', 'id')->toArray();
        $view->with('SubcategoryItems', $SubcategoryItems);
    });

    View::composer(['sub_categorias.create', 'sub_categorias.edit','productos.create' ,'productos.edit'], function ($view) {
        $categoryItems = categoria::pluck('name', 'id')->toArray();
        $view->with('categoryItems', $categoryItems);
    });
}
}