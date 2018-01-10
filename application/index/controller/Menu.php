<?php

namespace app\index\controller;

use base\BaseController;
use base\Result;
use app\index\model\MenuInfo;
use think\Request;

/**
 * 菜单控制器
 * @author cuizy
 * @time 2018.01.05
 */
class Menu extends BaseController {

    /**
     * 获取菜单列表
     * @return json
     */
    public function getMenuList() {
        $state = Result::SUCCESS;
        $msg = Result::SUCCESS_MSG;
        $menuModel = new MenuInfo();
        $menuList = $menuModel->getList();
        return (new Result($state, $msg, $menuList))->result();
    }

    /**
     * 获取菜单明细信息
     * @return json
     */
    public function detail(Request $request) {
        $state = Result::SUCCESS;
        $msg = Result::SUCCESS_MSG;
        $menu_id = $request->param('menu_id');
        $menuModel = new MenuInfo();
        $detail = $menuModel->getDetail($menu_id);
        return (new Result($state, $msg, $detail))->result();
    }

}
