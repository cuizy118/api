<?php

namespace base;

class Result {

    const SUCCESS = 1;
    const FALSE = -1;
    const SUCCESS_MSG = 'success';
    const FALSE_MSG = 'error';
    private $code = NULL;
    private $msg = "";
    private $data = [];

    /**
     * construct
     * @param int $code
     * @param string $msg
     * @param array $data
     */
    public function __construct($code, $msg, $data = []) {
        $this->code = $code;
        $this->msg = $msg;
        $this->data = $data;
    }

    /**
     * 返回请求数据
     * @param string $type
     * @return type
     */
    public function result($type = 'json') {
        return $this->toJson($type);
    }

    /**
     * 转换返回类型
     * @param string $type
     * @return type
     */
    public function toJson($type = "json") {
        switch ($type) {
            case 'json':
                return json_encode(['code' => $this->code, 'msg' => $this->msg, 'data' => $this->data]);
                break;
            case 'xml':
                return '';
                break;
            default:
        }
    }

}
