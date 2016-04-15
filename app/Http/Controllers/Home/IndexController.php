<?php namespace App\Http\Controllers\Home;
use Request;
use Illuminate\Pagination\LengthAwarePaginator as LengthAwarePaginator;

class IndexController extends Controller
{
    /**
     * 商城首页
     */
    public function index()
    {
        return view('home.index.index');
    }

    /**
     * 电影内页
     */
    public function detail()
    {
        return view('home.index.detail');
    }

}