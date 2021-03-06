<?php
/**
 * Created by DreamPHP.
 * User: Leruge
 * Date: 2018/4/5 0005
 * Time: 17:12
 * Email: leruge@163.com
 * Url: http://www.dreamphp.com.cn/
 */

namespace app\common\validate;

use think\Validate;

class Article extends Validate
{
    protected $rule = [
        'title|文章标题' => 'require|unique:article',
        'cate_id|所属栏目' => 'require',
        'tags|标签' => 'require',
        'desc|文章概要' => 'require',
        'content|文章内容' => 'require',
        'is_top|推荐' => 'require'
    ];

    public function sceneAdd()
    {
        return $this->only(['title', 'cate_id', 'tags', 'desc', 'content']);
    }

    public function sceneTop()
    {
        return $this->only(['is_top']);

    }



    public function sceneEdit()
    {
        return $this->only(['title','tags','is_top','cate_id','desc','content']);
    }
}