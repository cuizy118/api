<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return json_encode(['code' => 200, 'msg' => 'success', 'result' => '我是肥仔李少！']);
    }
}
