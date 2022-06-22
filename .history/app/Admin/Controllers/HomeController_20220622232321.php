<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\Dashboard;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(Content $content)
    {

    }
    //function pour récupérer les utilisateurs coté admin
    public function print_users(Content $content)
    {
       return $content
        ->title('Dashboard')
        ->description('Description...')
        ->row(Dashboard::title())
        ->row(Dashboard::users());
    }
    
    public function tmp_fichiers(Content $content)
    {

    }
}
