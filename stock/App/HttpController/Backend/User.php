<?php
namespace App\HttpController\Backend;

use App\Model\userModel;
use EasySwoole\Validate\Validate;
use App\HttpController\BaseController;


class User extends BaseController
{
    private $userModel;

    public function initialize()
    {
        $this->userModel = new UserModel();
    }

    /**
     * 获取分组列表
     * @return bool
     */
    public function getList()
    {
        $post  = $this->request()->getParsedBody();
        $where = "1=1";
        if (!empty($post['nick_name'])) {
            $where .= " and nick_name like '%{$post['nick_name']}%'";
        }
        if (!empty($post['phone'])) {
            $where .= " and phone like '%{$post['phone']}%'";
        }

        $data = ($this->userModel->where($where)->paginate([
            'list_rows' => $post['pagesize'],
            'page'      => $post['page'],
            'var_page'  => 'page',
        ]))->toArray();

        return $this->responseJson(200, $data);
    }

    /**
     * 获取单个用户详细信息
     * @return bool
     */
    public function getUser()
    {
        $post    = $this->request()->getParsedBody();
        $valitor = new Validate();
        $valitor->addColumn('id', 'id')->notEmpty();
        $valitor->validate($post);
        $data = $this->userModel->where('id=' . $post['id'])->find();
        return $this->responseJson(200, $data);

    }

    /**
     * 保存分组信息
     * @return bool
     */
    public function save()
    {
        $post = $this->request()->getRequestParam();
        $this->validate($post);
        if (!empty($post['id'])) {
            $ret = $this->userModel->where("id='{$post['id']}'")->update($post);
        } else {
            unset($post['id']);
            $ret = $this->userModel->insertGetId($post);
        }
        if ($ret) {
            return $this->responseJson(200, $post);
        }
        return $this->responseJson(500, [], '失败');
    }

    /**
     * 验证器
     * @param $post
     * @return bool
     */
    private function validate($post)
    {
        $valitor = new Validate();
        $valitor->addColumn('phone', '手机')->notEmpty();
        $valitor->addColumn('nick_name', '姓名')->notEmpty();
        $bool = $valitor->validate($post);
        if (!$bool) {
            return $this->responseJson(500, [], $valitor->getError()->__toString());
        }

    }

    /**
     * 删除分组
     * @return bool
     */
    public function del()
    {
        $post    = $this->request()->getParsedBody();
        $valitor = new Validate();
        $valitor->addColumn('id', 'id')->notEmpty();
        $bool = $valitor->validate($post);
        if (!$bool) {
            return $this->responseJson(500, [], $valitor->getError()->__toString());
        }

        $ret = $this->userModel->where('id=' . $post['id'])->delete();
        if ($ret) {
            return $this->responseJson(200, $post);
        }
        return $this->responseJson(500, [], '失败');
    }
}
