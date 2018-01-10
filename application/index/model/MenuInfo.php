<?php

namespace app\index\model;

use think\Model;

/**
 * 菜单模型
 * @author cuizy
 * @time 2018.01.05
 */
class MenuInfo extends Model {

    // 数据表名称
    protected $table = 'c_menu';
    // 表主键
    protected $pk = 'id';

    /**
     * 获取菜单列表
     * @return array
     */
    public function getList() {
        $list = $this->name('menu')->field('id,title,sort,message,image iconUrl')->select();
        if ($list) {
            foreach ($list as &$value) {
                $value['iconUrl'] = config('api_url') . $value['iconUrl'];
                $value['detailMessage'] = $value['message'];
            }
        }
        return $list;
    }

    /**
     * 获取菜单明细
     * @param int $menuId
     * @return array
     */
    public function getDetail($menuId) {
        $detail = $this->name('menu')->where(['id' => $menuId])->field('id,title,sort,message,image iconUrl')->find();
        if ($detail) {
            $detail['iconUrl'] = config('api_url') . $detail['iconUrl'];
            $detail['detailMessage'] = $detail['message'];
        }
        return $detail;
    }

}
