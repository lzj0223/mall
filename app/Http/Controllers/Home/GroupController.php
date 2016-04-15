<?php namespace App\Http\Controllers\Home;
use Request;
class GroupController extends Controller
{
    /**
     * 个人中心首页
     */
    public function index(){
        return view('home.group.index');
    }
    
    public function addr(){
        return view('home.member.addr');
    }
    public function addr_add(){
        return view('home.member.addr_add');
    }
}