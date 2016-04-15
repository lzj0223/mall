<?php namespace App\Http\Controllers\Home;
use Request;
use Illuminate\Pagination\LengthAwarePaginator as LengthAwarePaginator;

class MemberController extends Controller
{
    /**
     * 个人中心首页
     */
    public function index(){
        return view('home.member.index');
    }
    
    public function addr(){
        return view('home.member.addr');
    }
    public function addr_add(){
        return view('home.member.addr_add');
    }
    public function order(){
        return view('home.member.order');
    }

    /**
     * 电影内页
     */
    public function detail()
    {
        $id = Request::input('id');
        if(!$id){
            $id = func_get_arg(0);
        }

        $FilmModel = new FilmModel();

        $info = $FilmModel->getFilmById($id);

        $sources = $FilmModel->getFilmSource($id);
        $kankan = [];

        foreach($sources as $value){
            if(preg_match('/^https?:\/\/.*/',$value->link)){
                continue;
            }
            $kankan[] = $value->link;
        }

        $tags = (new FilmTagRelationModel())->getTagsByFilmId($id);

        $seo_info = array(
            'title'=>$info['title'].'_BTFILM专业电影搜索引擎_海量电影等你来搜!',
            'keywords'=>'BTFILM,BTFILM搜索,BTFILM磁力搜索,BTFILM种子搜索,BTFILM影视搜索,BTFILM电影搜索,BTFILM最新电影',
            'desc'=>'BTFILM专业电影搜索引擎，海量电影等你来搜,'.$info['summary']
        );
        $nav_id = 'Index-detail';
        return view('home.index.detail', compact('info','sources','tags','kankan','seo_info','nav_id'));
    }

}