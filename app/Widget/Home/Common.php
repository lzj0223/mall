<?php

namespace App\Widget\Home;
/**
 * 小组件
 */
class Common extends AbstractBase
{
    public function nav()
    {
        if ($this->class == 'index' && $this->function == 'detail'){
            return view('home.widget.nav_items_detail',['class' => $this->class,'data'=>$this->data]);
        }else{
            return view('home.widget.nav',['class' => $this->class]);
        }
    }
}