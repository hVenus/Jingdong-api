<?php
/**
 * 子账号API.
 */

namespace hVenus\JingdongAPI\API;


trait ACCOUNT
{
    /**
     * 普通 基础 jingdong.vender.childAccount.query 1.    查询员工信息
     * @param $params
     * @return mixed
     */
    public function VenderChildAccountQuery($params) {
        return $this->call_jd_function('jingdong.vender.childAccount.query', $params);
    }

    /**
     * 普通 基础 jingdong.vender.childaccount.role.query 2.    查询员工角色信息
     * @param $params
     * @return mixed
     */
    public function VenderChildAccountRoleQuery($params) {
        return $this->call_jd_function('jingdong.vender.childaccount.role.query', $params);
    }

    /**
     * 普通 基础 jingdong.vender.childaccount.dept.query 3.    查询员工所在部门信息
     * @param $params
     * @return mixed
     */
    public function VenderChildAccountDeptQuery($params) {
        return $this->call_jd_function('jingdong.vender.childaccount.dept.query', $params);
    }

    /**
     * 普通 基础 jingdong.vender.childaccount.privilege.query 4.    查询员工的权限
     * @param $params
     * @return mixed
     */
    public function VenderChildAccountPrivilegeQuery($params) {
        return $this->call_jd_function('jingdong.vender.childaccount.privilege.query', $params);
    }

    /**
     * 普通 基础 jingdong.vender.privilege.query 5.    查询商家的权限信息
     * @param $params
     * @return mixed
     */
    public function VenderPrivilegeQuery($params) {
        return $this->call_jd_function('jingdong.vender.privilege.query', $params);
    }

    /**
     * 普通 基础 jingdong.vender.dept.list 6.    查询部门列表
     * @param $params
     * @return mixed
     */
    public function VenderDeptList($params) {
        return $this->call_jd_function('jingdong.vender.dept.list', $params);
    }

    /**
     * 普通 基础 jingdong.vender.dept.get 7.    获取单个部门信息
     * @param $params
     * @return mixed
     */
    public function VenderDeptGet($params) {
        return $this->call_jd_function('jingdong.vender.dept.get', $params);
    }

    /**
     * 普通 基础 jingdong.vender.dept.add 8.    新增部门
     * @param $params
     * @return mixed
     */
    public function VenderDeptAdd($params) {
        return $this->call_jd_function('jingdong.vender.dept.add', $params);
    }

    /**
     * 普通 基础 jingdong.vender.dept.delete 9.    删除部门
     * @param $params
     * @return mixed
     */
    public function VenderDeptDelete($params) {
        return $this->call_jd_function('jingdong.vender.dept.delete', $params);
    }

    /**
     * 普通 基础 jingdong.vender.dept.modify 10.    修改部门名称
     * @param $params
     * @return mixed
     */
    public function VenderDeptModify($params) {
        return $this->call_jd_function('jingdong.vender.dept.modify', $params);
    }

    /**
     * 普通 基础 jingdong.vender.role.list 11.    查询角色列表
     * @param $params
     * @return mixed
     */
    public function VenderRoleList($params) {
        return $this->call_jd_function('jingdong.vender.role.list', $params);
    }

    /**
     * 普通 基础 jingdong.vender.role.get 12.    获取单个角色信息
     * @param $params
     * @return mixed
     */
    public function VenderRoleGet($params) {
        return $this->call_jd_function('jingdong.vender.role.get', $params);
    }

    /**
     * 普通 基础 jingdong.vender.role.modify 14.    修改角色名称
     * @param $params
     * @return mixed
     */
    public function VenderRoleModify($params) {
        return $this->call_jd_function('jingdong.vender.role.modify', $params);
    }

    /**
     * 普通 基础 jingdong.vender.announcement.list 15.    公告列表查询
     * @param $params
     * @return mixed
     */
    public function VenderAnnouncementList($params) {
        return $this->call_jd_function('jingdong.vender.announcement.list', $params);
    }

}