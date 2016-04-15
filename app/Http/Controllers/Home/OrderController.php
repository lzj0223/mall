<?php namespace App\Http\Controllers\Home;
use Request;
class OrderController extends Controller
{
    /**
     * 个人中心首页
     */
    public function index(){
        return view('home.order.index');
    }
    
    public function addr(){
        return view('home.member.addr');
    }
    public function addr_add(){
        return view('home.member.addr_add');
    }
}