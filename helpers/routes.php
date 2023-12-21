<?php
class Routes
{
    public static function getRoutes(): array
    {
        return [
            '/' => 'HomeController@index',
            '/profile' => 'HomeController@profile',
            '/login' => 'AuthController@loginForm',
            '/logout' => 'AuthController@logout',
            '/verifylogin' => 'AuthController@verifyLogin',
            '/registerUser' => 'AuthController@registerUser',
            '/register' => 'AuthController@registrationForm',
            '/dashboard' => 'DashboardController@index',

            //Dashboard User
            '/dashboard/users' => 'UserController@index',
            '/dashboard/user/save' => 'UserController@save',
            '/dashboard/user/update' => 'UserController@update',
            '/dashboard/user/delete/(\d+)' => 'UserController@delete',

            //Dashboard Kategori
            '/dashboard/kategoris' => 'KategoriController@index',
            '/dashboard/kategori/save' => 'KategoriController@save',
            '/dashboard/kategori/update' => 'KategoriController@update',
            '/dashboard/kategori/delete/(\d+)' => 'KategoriController@delete',

            //Dashboard Produk
            '/dashboard/produks' => 'ProdukController@indexdashboard',
            '/dashboard/produk/save' => 'ProdukController@save',
            '/dashboard/produk/update' => 'ProdukController@update',
            '/dashboard/produk/delete/(\d+)' => 'ProdukController@delete',

            //Index Produk
            '/public/produks' => 'ProdukController@indexpublic',
            '/public/produk/save' => 'ProdukController@save',
            '/public/produk/update' => 'ProdukController@update',
            '/public/produk/delete/(\d+)' => 'ProdukController@delete',

            //route untuk API disini
            '/api/users' => 'ApiController@getUsers',
            '/api/kategoris' => 'ApiController@getKategoris',
            '/api/produks' => 'ApiController@getProduks',
        ];
    }
}
?>