<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;

Route::rule('product/category', 'product/category/cate');                 //企业--分类333
Route::get('product/category_tree', 'product/category/getCateTree');                 //云产品库指定分类树形结构333
Route::rule('product/title', 'product/index/search_title');                 //企业--产品关键词搜索333
Route::rule('product/draft', 'product/draft/draft');                 //企业--等待审核列表|审核不通过列表    status=0|-1
Route::rule('product/review', 'product/platform/review');                 //平台--审核操作
Route::rule('platform/draft', 'product/platform/draft');                 //平台--等待审核列表|审核不通过列表
Route::rule('platform/libgoods', 'product/platform/lib_goods');                 //平台--云产品库列表
Route::rule('product/check', 'product/local/checkGo ods');   //企业--系统验证是否存在产品


Route::rule('local/goods', 'product/local/goods');                 //企业本地产品库列表
Route::rule('local/libgoods', 'product/local/libGoods');                 //云产品库列表
Route::rule('local/system', 'product/local/system');                 //企业设置产品所属系统
Route::rule('local/relation_product', 'product/local/product_relation_sys');  //系统对应产品列表接口


Route::rule('draft/info', 'product/goods/draft');                 //草稿详情
Route::rule('lib/info', 'product/goods/lib_goods');                 //云产品库详情
Route::rule('lib/stepOne', 'product/goods/goodsResearchStep');                 //云产品库筛选第一步
Route::rule('lib/stepTwo', 'product/goods/goodsResearchStep');                 //云产品库筛选第二步
Route::rule('lib/stepThree', 'product/goods/goodsResearchStep3');                 //云产品库筛选第三步
Route::rule('lib/stepFour', 'product/goods/goodsResearchStep4');                 //云产品库筛选第四步
Route::get('lib/search', 'product/goods/libSearch');                 //云产品库搜索
Route::post('lib/product_search', 'product/product/search');                 //云产品库搜索(支持名称，价格，属性)

/**
 * 企业地址信息接口
 */
Route::rule('address/list', 'company/address/getAddressList');          //企业地址列表
Route::rule('address/add', 'company/address/addAddress');         //企业地址添加
Route::rule('address/get', 'company/address/addrList');          //省市区获取
Route::rule('address/moren', 'company/address/moren');          //企业地址默认设置
Route::rule('address/info', 'company/address/address');          //企业地址信息
Route::rule('address/default', 'company/address/getDefault');          //获取企业默认地址信息


/**
 * 企业账户信息接口
 */
Route::rule('account/list', 'company/account/accountInfo');         //企业账户列表
Route::rule('account/add', 'company/account/addAccount');        //企业添加账户信息
Route::rule('account/moren', 'company/account/moren');          //企业账户默认设置
Route::rule('account/info', 'company/account/account');          //企业账户信息
Route::rule('account/default', 'company/account/getDefault');          //获取企业默认账户信息
Route::rule('company/info', 'company/company/company_info');          //获取用户企业信息

Route::rule('renzheng/info', 'company/RenZheng/get_account_info');   //获取认证信息
Route::rule('qiku/company', 'company/Qiku/http');  //企库认证操作
/**
 * 人事组织结构接口
 */
Route::rule('postcategory', 'company/Postcategory/category');

//app产品页面
Route::rule('app/info', 'product/App/productInfo');                 //云产品内容详情
Route::rule('app/attr', 'product/App/productAttr');                 //云产品库属性
Route::rule('app/detail', 'product/App/ptProduct');                 //云产品库产品所有数据
Route::rule('app/policy', 'product/App/policy');                 //招商政策


//用户信息
Route::rule('member/info', 'member/Index/index');                 //兼职人员对应客户经理临时接口


//app导航管理
Route::get('appnav', 'app/Nav/read');//查询
Route::post('appnav/[:id]', 'app/Nav/update'); //修改后的数据
Route::delete('appnav/:id', 'app/Nav/delete'); //删除
Route::get('nav/background', 'app/Background/get_background'); //获取背景图
Route::post('nav/background', 'app/Background/get_background'); //添加背景图
Route::delete('nav/background', 'app/Background/get_background'); //删除背景图


//平台管理APP导航
Route::get('nav', 'app/Managenav/read');//查询
Route::post('nav/[:id]', 'app/Managenav/update'); //修改后的数据
Route::delete('nav/:id', 'app/Managenav/delete'); //删除


/**************************企业接口**********************/

//公司接口
Route::get('company/company', 'company_new/Companys/read');//查询
Route::post('company/company', 'company_new/Companys/add'); //创建公司
Route::get('system/company', 'company_new/Companys/authCompany'); //所有认证企业列表
Route::put('company/company', 'company_new/Companys/update'); //编辑
Route::delete('company/company/[:id]', 'company_new/Companys/delete'); //删除
Route::get('company/company_user', 'company_new/Company_uuid/company_main_user'); //公司与认证账号关系
Route::post('company/enter', 'company_new/Companys/enter');//公司入驻接口APP
Route::post('company/authentication', 'company_new/Authentication/index');//公司入驻接口APP
Route::get('company/authentication', 'company_new/System/getAuthentication');//账号认证信息接口（企业认证信息或者个人认证信息）
Route::post('company/authentication_store', 'company_new/Authentication/store');//账号认证信息接口（企业认证信息或者个人认证信息）
Route::get('company/auth_store', 'company_new/Company_store/authStores');//门店列表（企业认证信息或者个人认证信息）
Route::post('company/companyinfo', 'company_new/Company_extend/update');//公司信息设置（封面图、展会标签、简介）
Route::post('company/multiple', 'company_new/System/getMoreCompany'); //批量获取公司信息
Route::rule('platform/industry', 'company_new/Platform_industry/route'); //平台管理员设置公司行业分类
Route::get('normal/industry', 'company_new/Company_industry/getIndustry'); //普通获取行业分类（树形结构）
Route::post('staff/create_company', 'company_new/Authentication/createCompany');//员工创建公司
Route::get('company/logo', 'company_new/Company_uuid/companyLogo');//公司logo

//企业部门管理
Route::get('company/department/tree', 'company_new/department/getList');//公司所有部门树形结构
//Route::get('company/department/tree_v2', 'company_new/department/getList_v2');//公司所有部门树形结构
Route::get('company/department/tree_v2', 'personnel/App_department/getList_v2');//公司所有部门树形结构
Route::get('company/department', 'company_new/department/read');//查询
Route::post('company/department', 'company_new/department/update'); //添加|修改的数据
Route::delete('company/department/[:id]', 'company_new/department/delete'); //删除
Route::get('company/update_department_redis', 'company_new/department/updateRedis'); //部门更新缓存数据
Route::get('company/depart/charge', 'company_new/department/getCharge'); //部门负责人
Route::get('department/list', 'company_new/CompanyAllDepartment/getDepartmentList'); //部门父级ID查询下级部门
Route::get('department/allNext', 'company_new/App_department/getAllNext'); //部门下所有子部门
Route::get('company/company_post_code', 'company_new/Post_code/read'); //公司所有岗位编码或者单个岗位编码详情
Route::post("department/list/byids", 'company_new/AppDepartment/getDeparmentByList');//获取批量部门信息
Route::post("staff/list/byids", 'call_center/Index/getStaffByuuids');//获取批量员工信息
Route::get("staff/charge_department", 'company_new/Department_new/getChargeDepartment');//根据staff_uuid查询负责的部门列表
Route::get("post/establishment", 'company_new/Company_establishment/getList');//公司岗位缺编（全公司成员）
Route::get("post/establishment_info", 'company_new/Company_establishment/getInfo');//公司岗位编制详情（全公司成员）
Route::get("post/establishment_detail", 'company_new/Company_establishment/getEstablishmentDetail');//公司岗位编制详情（包含员工信息）
//平台所有部门列表
Route::get("system/department", 'company_new/year_month_department/create');//平台所有部门（可带条件）

//企业岗位类型
Route::get('company/post_category', 'company_new/Company_post_category/read');
Route::post('company/post_category', 'company_new/Company_post_category/add');
Route::put('company/post_category', 'company_new/Company_post_category/update');
Route::delete('company/post_category', 'company_new/Company_post_category/delete');

//公告
Route::get('notice/get_material', 'notice/Material/getMaterial');
Route::get('notice/get_all_material', 'notice/Material/getAllMaterial');
Route::get('notice/image_text_display', 'notice/Material/image_text_display');
Route::get('notice/file_download', 'notice/Material/fileDownload');
Route::post('notice/ae_material', 'notice/Material/aeMaterial');
Route::delete('notice/del_material', 'notice/Material/delMaterial');

Route::get('notice/get_image_list', 'notice/Notice/get_image_text');
Route::get('notice/get_list', 'notice/Notice/get_notice_list');
Route::post('notice/ae_notice', 'notice/Notice/ae_notice');
Route::get('notice/get_details', 'notice/Notice/get_notice_details');
Route::get('notice/get_notice_add', 'notice/Notice/get_notice_add');
Route::get('notice/notice_read_count', 'notice/Notice/notice_read_count');
Route::post('notice/cancel_notice', 'notice/Notice/cancel_notice');
Route::delete('notice/del_notice', 'notice/Notice/del_notice');
Route::delete('notice/del_notice_phone', 'notice/Notice/del_notice_phone');
Route::delete('notice/local_del', 'notice/Notice/local_del_notice');
Route::post('notice/cancle_time', 'notice/Notice/cancle_delayed_time');
Route::post('notice/edit_time', 'notice/Notice/edit_delayed_time');
Route::post('notice/notice_collect', 'notice/Notice/notice_collect');
Route::post('notice/upload_file', 'notice/Notice/upload_file');

//稽核
Route::post('audit/task_add', 'audit/Audit/task_add');
Route::rule('audit/auditedTaskVoucherList', 'audit/Audit/auditedTaskVoucherList');
Route::rule('audit/getTypeVersion', 'audit/Audit/getTypeVersion');
Route::post('audit/task_ae', 'audit/Audit/task_ae');
Route::post('audit/type_task_list', 'audit/Audit/type_task_list');
Route::get('audit/get_task_form_info', 'audit/Audit/get_task_form_info');
Route::get('audit/back_wait_distribution', 'audit/Audit/back_wait_distribution');
Route::rule('audit/back_wait_distribution_more', 'audit/Audit/back_wait_distribution_more');
Route::post('audit/examine_complete_return', 'audit/Audit/examine_complete_return');
Route::post('audit/task_form_config', 'audit/Audit/task_form_config');
Route::get('audit/export_excel', 'audit/Excel/export_excel');
Route::get('audit/export_excel_audited_task', 'audit/Excel/export_excel_audited_task');
Route::get('audit/get_task_type_config', 'audit/Audit/get_task_type_config');
Route::get('audit/task_details', 'audit/Audit/task_details');
Route::post('audit/task_type_add', 'audit/Audit/add_audit_task_type');
Route::get('audit/type_list', 'audit/Audit/task_config_list');
Route::post('audit/task_list', 'audit/Audit/task_list');
Route::get('audit/oneself_task_list', 'audit/Audit/oneself_task_list');
Route::get('audit/oneself_task_list_count', 'audit/Audit/oneself_task_list_count');
Route::post('audit/remove_task', 'audit/Audit/remove_task');
Route::delete('audit/type_del', 'audit/Audit/task_del');
Route::post('audit/type_config', 'audit/Audit/task_config');
Route::post('audit/recoder_hand', 'audit/Audit/recoder_hand');
Route::post('audit/upload_voucher', 'audit/Audit/upload_voucher');
Route::get('audit/voucher_config', 'audit/Audit/voucher_config');
Route::get('audit/voucher_config_v2', 'audit/Audit/voucher_config_v2');
Route::get('audit/voucher_details', 'audit/Audit/voucher_details');
Route::get('audit/getVersionNum', 'audit/Audit/getVersionNum');
Route::get('audit/voucher_details_third', 'audit/Audit/voucher_details_third');
Route::rule('audit/get_audit_person', 'audit/Audit/get_type_audit_person');
Route::rule('audit/submit_examine', 'audit/Audit/submit_examine');
Route::get('audit/task_list_select', 'audit/Audit/task_list_select');
Route::get('audit/audit_type_details', 'audit/Audit/audit_type_details');
Route::delete('audit/cancle_task', 'audit/Audit/cancle_task');
Route::get('audit/config_details', 'audit/Audit/audit_config_details');
Route::get('audit/type_num', 'audit/Audit/type_and_num');//获取待分配任务分类及各分类下任务个数
Route::rule('audit/typeTaskList', 'audit/Audit/type_task_list');//批量获取多个分类下的任务个
Route::rule('audit/leadingInTask', 'audit/ExcelChild/leadingInTask');//导入稽核任务
Route::rule('audit/waitAuditHandMore', 'audit/audit/wait_audit_hand_more');//批量待稽核任务分配
Route::rule('audit/getTaskQucik', 'audit/audit/getTaskQucik');//批量待稽核任务分配
Route::rule('audit/hxFieldSubmit', 'audit/audit/hxFieldSubmit');//提交核销字段
Route::rule('audit/attachFieldSubmit', 'audit/audit/attachFieldSubmit');//提交附加字段
Route::rule('audit/thirdResultPushMsg', 'audit/attach/thirdResultPushMsg');//任务过期检测与消息推送
Route::rule('audit/tag', 'audit/audit/tag');//任务标签
Route::rule('audit/handle_transfer_task', 'audit/extend/handle_transfer_task');//拒绝、接受转移的稽核任务

//企业岗位
Route::get('company/post', 'company_new/Company_post/read');
Route::post('company/post', 'company_new/Company_post/add');
Route::put('company/post', 'company_new/Company_post/update');
Route::delete('company/post', 'company_new/Company_post/delete');
Route::get('company/post_list', 'company_new/Post/getList');//员工获取公司岗位列表
Route::rule('company/payment', 'company_new/payment/payment');//应用支付方案配置

//企业职务
Route::get('company/position', 'company_new/Company_position/read');
Route::post('company/position', 'company_new/Company_position/add');
Route::put('company/position', 'company_new/Company_position/update');
Route::delete('company/position', 'company_new/Company_position/delete');

//企业岗位编制配置
Route::get('company/establishment', 'company_new/Company_establishment_config/read');
Route::post('company/establishment', 'company_new/Company_establishment_config/add');
Route::delete('company/establishment', 'company_new/Company_establishment_config/delete');
//批量获取编制下面的员工信息
Route::post('personnel/multi/organization/staff', 'personnel/App_post/getMultiOrganizationStaff');
Route::post('personnel/multi/post/staff', 'personnel/App_post/getMultiPostStaff');

//企业岗位编码管理
Route::get('company/post_code', 'company_new/Company_post_code/read');
Route::post('company/post_code', 'company_new/Company_post_code/addOne');  //添加员工时，自动生成岗位编码
Route::put('company/post_code', 'company_new/Company_post_code/update');
Route::delete('company/post_code', 'company_new/Company_post_code/delete');
Route::put('company/post_code_use', 'company_new/Company_post_code/set_use');   //设置岗位编码是否被占用（状态）

//企业别名管理
Route::get('company/alias', 'company_new/Company_alias/read');
Route::post('company/alias', 'company_new/Company_alias/add');
Route::put('company/alias', 'company_new/Company_alias/update');
Route::delete('company/alias', 'company_new/Company_alias/delete');

//企业账户管理（new）
Route::get('company/account', 'company_new/Company_account/read');
Route::post('company/account', 'company_new/Company_account/add');
Route::put('company/account', 'company_new/Company_account/update');
Route::delete('company/account', 'company_new/Company_account/delete');


//公司地址类型管理（new）
Route::get('company/address_cate', 'company_new/Company_address_category/read');
Route::post('company/address_cate', 'company_new/Company_address_category/add');
Route::put('company/address_cate', 'company_new/Company_address_category/update');
Route::delete('company/address_cate', 'company_new/Company_address_category/delete');

//企业地址管理（new）
Route::get('company/address', 'company_new/Company_address/read');
Route::post('company/address', 'company_new/Company_address/add');
Route::put('company/address', 'company_new/Company_address/update');
Route::delete('company/address', 'company_new/Company_address/delete');
Route::get('company/uuidAddress', 'company_new/Company_address/uuidAddress'); //根据公司uuid+id查询公司地址列表|详情

//企业用户通过uid获取UUid
Route::get('company/uuid', 'company_new/Company_uuid/getCompanyuuid');
//企业工商公示信息
Route::get('company/business', 'company_new/Company_business/read');
//企业管理员接口
Route::get('company/relation', 'company_new/Companys/relationUser');

Route::get('department/list', 'company_new/CompanyAllDepartment/getDepartmentList');


//企业员工管理
Route::get('company/staff', 'personnel/Personnel_staff/staff');   //员工列表/简单列表（只包含ID和姓名）/部门负责人
Route::post('company/staff', 'personnel/Personnel_staff/add');
Route::put('company/staff', 'personnel/Personnel_staff/update');
Route::delete('company/staff', 'personnel/Personnel_staff/delete');
Route::post('company/staff_account', 'personnel/Personnel_staff/bindAccount');         //员工信息绑定注册账号
Route::get('personnel/post', 'personnel/Personnel_staff/checkPost');  //检查该岗位下是否有员工
Route::put('company/staff_edit', 'personnel/personnel_staff/edit');    //编辑员工
Route::post('company/bind', 'personnel/binding_one_key/bind');         //一键绑定
Route::get('personnel/detail', 'personnel/personnel_staff/detail');         //员工详情
Route::put('personnel/staff_header', 'personnel/App_staff/setHeader');         //修改头像
Route::rule('personnel/link_man_config', 'personnel/Link_man_config/route');         //企业通讯录权限配置
Route::get('personnel/link_man', 'personnel/link_man/myLinkMan');         //企业通讯录列表
Route::get('company/staff_search', 'personnel/Company_staff/staffSearch');         //搜索公司员工姓名

//企业客户
Route::get('company/customer', 'personnel/Customer/read');

//调用企查查接口
Route::get('company/business_list', 'custom/App_business/businessList'); //关键字查询企查查列表
Route::get('company/business_name', 'custom/App_business/nameDetail'); //过企业名称查工商公示信息详情
Route::get('company/business_keyno', 'custom/App_business/keyNoDetail'); //通过企业keyno查工商公示信息详情

/***************************************APP组织架构接口*******************************************/

Route::get('app/company', 'company_new/App_company/read'); //通过uuid获取公司信息
Route::get('app/colleague', 'personnel/Colleague/index'); //同事列表
Route::get('app/colleague_all_post', 'personnel/Colleague/getStaffAllPost'); //同事所有岗位列表
Route::get('app/colleague_info', 'personnel/Colleague/read'); //同事信息
Route::get('app/staff_report', 'personnel/Colleague/report'); //根据员工uuid查找汇报对象信息
Route::get('app/colleague_V2', 'personnel/AppStaff/getColleagueV2'); //同时列表（增量）
Route::get('app/staff_reports', 'personnel/reports/get_staff_report'); //根据post_code 获取负责部门的所有员工以及汇报对象


Route::get('app/user_staff_info', 'personnel/AppStaff/getStaffByUid'); //根据账号绑定的员工信息查询该员工信息
Route::get('staff/avatar', 'personnel/Avatar/index'); //员工头像地址


Route::get('app/all_department', 'company_new/App_department/read');//APP员工获取公司所有部门(内部调用)
Route::get('app/next_department', 'company_new/App_department/nextDepartment');    //获取下级部门（company_uuid+pid）(内)
Route::get('app/all_position', 'company_new/App_position/read');    //获取公司所有岗位(内)|详情
//APP员工获取公司所有岗位
Route::get('app/all_post', 'company_new/App_post/read');
Route::get('app/post', 'personnel/App_post/allPost');   //获取公司所有岗位
Route::post('app/post/staff', 'personnel/App_post/getPostIdByStaffUuids');   //批量获取员工岗位名称

Route::get('app/department', 'personnel/App_department/read');//APP员工获取公司所有部门（app）
Route::get('app/department_info', 'company_new/App_department/getInfo');//公司部门信息
Route::get('app/allNext', 'personnel/App_department/getAllNext');//员工获取部门下所有子部门
Route::get('app/invited', 'personnel/App_invited/read'); //员工接收到邀请
Route::post('app/invited', 'personnel/App_invited/join'); //员工处理邀请(加入\拒绝)
Route::get('app/company_info', 'personnel/App_company/read'); //查看公司认证信息
Route::get('app/staff_info', 'personnel/App_staff/read'); //查看员工信息
Route::get('app/staff_post_code', 'personnel/App_staff/getUidPostCode'); //根据员工uid 查找该账号的所有岗位编码
Route::get('app/token_get_company_uuid', 'personnel/App_staff/getUserCompanyUuid'); //根据用户token获取公司uuid
Route::get('app/token_get_company', 'company_new/Companys/tokenToCompany');  //根据token获取公司信息
Route::post('app/main_post', 'personnel/App_staff/setMainPost');  //员工设置主岗位
Route::get('app/user_main', 'personnel/App_company/userMain');  //token 获取公司绑定账号关系
Route::get('department/charge', 'personnel/App_department/charge');  //根据部门ID获取部门负责人信息
Route::get('department_post/staff', 'personnel/App_department/getStaffByDepartPost'); //根据部门ID和岗位ID查询所有员工
Route::get('department/staff_list', 'personnel/App_department/getStaffByDepartment'); //根据部门ID查询所有员工的基础信息（包括员工uid）
Route::get('department/staff', 'personnel/Department/checkStaff'); //检查部门下是否有员工接口
Route::get('department/chargeDepartment', 'personnel/App_department/chargeDepartment'); //根据账号uid查询对应负责的部门ID
Route::post('company/extend', 'personnel/App_company/extend'); //设置公司扩展信息
Route::get('app/next_staff', 'personnel/App_staff/getNextStaff'); //获取所有下属（创始人获取所有员工，部门经理获取所有下属）
//Route::get('company/department_tree/staff', 'personnel/Personnel_staff/departmentStaff'); //所有组织架构数据
Route::get('company/department_tree/staff', 'personnel/App_department/departmentStaff'); //所有组织架构数据
Route::get('personnel/staff/post_uid', 'personnel/App_staff/getPostUid'); //根据岗位编码查找员工绑定账号信息
Route::get('personnel/post_staff', 'personnel/Colleague/getStaffByPost'); //根据岗位编码查找员工绑定账号信息
Route::post('staff/post_staff', 'personnel/App_post/getPostStaff'); //根据员工post_code获取员工基础信息
Route::get('department/next_staff', 'personnel/App_staff/departmentNextStaff'); //公司指定部门下的所有员工（包括本部门）
Route::put('app/staff_report', 'personnel/App_staff/setReport'); //员工设置汇报对象
Route::get('self/department_staff', 'personnel/App_staff/selfDepartmentStaff'); //获取本人所在部门所有员工
Route::get('staff/staff_sum', 'personnel/App_company/staffSum'); //获取公司成员数量
Route::get('company/base_info', 'company_new/Companys/baseInfo'); //token获取公司基础信息
Route::get('department/staff_Info', 'personnel/App_staff/postCodeGetInfo'); //根据员工post_code获取员工部门岗位账号信息
Route::get('staff/department', 'personnel/App_staff/getStaffAllDepartment'); //获取员工所有部门及子部门（支持uid、staff_uuid、post_code）
Route::post('company/staff_base', 'personnel/Personnel_staff/updateStaffBase'); //修改员工姓名、邮箱、手机号
Route::post('company/deparment/get_map', 'company_new/App_department/getDepartmentByMap');
Route::post('company/post/get_last_map', 'company_new/App_department/getLastPostByMap');
Route::post('personnel/invite/generate', 'personnel/Staff_invite/generate');//预生成员工扫码加入信息
Route::post('personnel/invite/check', 'personnel/Staff_invite/check');//员工扫码加入手机号认证
Route::post('company/honor/save', 'company_new/Company_config/honor_save');//公司荣誉墙配置
Route::get('company/honor/info', 'company_new/Company_config/honor_info');//公司荣誉墙信息
Route::delete('company/honor/del', 'company_new/Company_config/honor_del');//公司荣誉墙删除
Route::post('company/chat/save', 'company_new/Company_config/chat_config');//公司群聊设置
Route::get('company/chat/info', 'company_new/Company_config/chat_config');//获取公司群聊信息
Route::get('staff/manage_staff', 'personnel/Company_staff/getManageStaff'); //获取下属（部门经理+汇报对象+上级）
Route::get('staff/bind_company', 'personnel/Check_staff_bind_company/checkBindCompany');//员工加入公司列表
Route::post('staff/staffList', 'personnel/api_staff/staffList'); //根据uid批量获取员工信息
Route::get('staff/check_leader', 'personnel/Company_staff/checkStaffLeader'); //检查员工是否部门经理、汇报对象、上级
Route::get('user/avatar', 'personnel/User/getAvatar'); //获取员工头像（uid,staffUuid,postCode）
Route::post('staff/transfer_post', 'personnel/Transfer_post/TransferPost'); //转岗/调岗

/**************************************CRM系统接口************************************************************/
Route::get('crm/next_department', 'personnel/Crm_department/department');  //获取下级部门以及本部门下员工列表


/*****************************************展会系统接口 开始*****************************************/
Route::rule('test', 'exhibition/Test/test');
Route::rule('aaa', 'exhibition/Test/aaa');
Route::rule('table', 'exhibition/Test/table');

//分类
Route::rule('type', 'exhibition/Type/http');   //增删改查
Route::get('type/list', 'exhibition/Type/getList');   //无分页查询

//标签
Route::rule('exhibition/tags', 'exhibition/Tags/http');   //增删改查
Route::get('tags/list', 'exhibition/Tags/getList');   //无分页查询
Route::get('tags/getTagGoods', 'product/Tags/getTagGoods');   //某公司某标签下的

//会议
Route::rule('exhibition/meeting', 'exhibition/Meeting/http');   //增删改查

//主办单位
Route::rule('organizer', 'exhibition/Organizer/http');   //增删改查
Route::get('organizer/list', 'exhibition/Organizer/getList');   //无分页查询

//承办单位
Route::rule('undertaker', 'exhibition/Undertaker/http');   //增删改查
Route::get('undertaker/list', 'exhibition/Undertaker/getList');   //无分页查询

//展会预约
Route::rule('exhibition/subscribe', 'exhibition/Subscribe/http');   //增删改查

//展位预定
Route::rule('exhibition/destine', 'exhibition/Destine/http');   //增删改查

//会议参加
Route::rule('exhibition/attend', 'exhibition/Attend/http');   //增删改查

//申请办会
Route::rule('exhibition/apply', 'exhibition/Apply/http');   //增删改查

//会议赞助
Route::rule('exhibition/sponsor', 'exhibition/Sponsor/http');   //增删改查

//讲师入驻
Route::rule('lecturer/enter', 'exhibition/Enter/http');   //增删改查

//讲师邀请
Route::rule('lecturer/invite', 'exhibition/Invite/http');   //增删改查

//行业
Route::rule('industry/event', 'exhibition/Industry/http');   //增删改查
//轮播图片
Route::rule('carousel/event', 'exhibition/Carousel/http');   //增删改查
Route::get('carousel/home', 'exhibition/Carousel/getHome');   //首页展示

//展馆
Route::rule('exhibition/hall', 'exhibition/Hall/http');   //增删改查
Route::get('hall/home', 'exhibition/Hall/getHome');   //首页展示
Route::get('hall/city_hall', 'exhibition/Hall/getHall');   //城市下的展馆列表

//展会
Route::rule('exhibition/event', 'exhibition/Exhibition/http');   //增删改查
Route::rule('exhibition/easy', 'exhibition/Exhibition/easy');   //增删改查
Route::rule('exhibition/home', 'exhibition/Exhibition/getHome');   //首页

//讲师
Route::rule('lecturer/event', 'exhibition/Lecturer/http');   //增删改查
Route::rule('lecturer/easy', 'exhibition/Lecturer/easy');   //简单列表
Route::rule('lecturer/home', 'exhibition/Lecturer/getHome');   //首页

//讲师资讯
Route::rule('lecturer/news', 'exhibition/Lecturer_news/http');   //增删改查

//统计
Route::rule('exhibition/statistics', 'exhibition/Statistics/http');   //增删改查
/*****************************************展会系统接口 结束*****************************************/


/*****************************************仓库管理接口 开始******************************************/
//仓库管理
Route::rule('wms/warehouse', 'wms/Warehouse/router');   //增删改查
Route::rule('wms/warehouse_list', 'wms/Warehouse/select');   //仓库列表
Route::get('wms/warehouselist', 'wms/Warehouse/warehouseList');   //仓库列表(包含仓库管理员信息)

Route::rule('wms/warehouse_manager', 'wms/Warehouse_manager/router');   //仓库管理员接口

Route::get('wms/my_manage_warehouse', 'wms/Warehouse/getMyWarehouse');   //获取本人管理的仓库列表
Route::get('wms/my_charge_warehouse', 'wms/Warehouse/getMyChargeWarehouse');   //获取本人负责的仓库列表
Route::get('wms/warehouse_base', 'wms/Warehouse/getBaseInfo');   //获取仓库基础数据

//仓库与产品
Route::rule('wms/warehouse_product', 'wms/Warehouse_product/router');//增删改查
Route::rule('wms/warehouse_product_list', 'wms/Warehouse_product/select');   //仓库与产品列表
Route::get('wms/warehouse_product_base', 'wms/Warehouse_product/warehouseProductBase');   //仓库产品基础统计信息（订单/库存/未处理）
Route::get('wms/warehouse_product_index', 'wms/Warehouse_product/warehouseProduct');   //仓库产品（包含未发货数量）
Route::rule('wms/warehouse_order', 'wms/Warehouse_order/warehouseOrder');//仓库某订单列表
Route::rule('wms/warehouse_product_order', 'wms/Warehouse_order/warehouseProductOrder');//仓库某产品（含渠道）订单列表
Route::rule('wms/warehouse_order_detail', 'wms/Warehouse_order/orderDetail');//订单详情信息
Route::get('wms/warehouse_order_out_detail', 'wms/Warehouse_order/orderOutDetail');//订单出货/出库详情信息
Route::get('wms/warehouse_wait_in', 'wms/Warehouse_product_in/waitIn');//仓库待收货列表(经销商/终端)
Route::rule('wms/company_shipping', 'wms/Company_shipping/router');   //物流公司(增删改查)
Route::rule('wms/warehouse_product_exist', 'wms/Warehouse_product/warehouseProductDetail');   //仓库产品剩余详情|箱码中剩余盒码详情
/*****************************************仓库管理接口 结束******************************************/

/******************************************产品码 start****************************************************/
Route::rule('code/product_batch', 'productcode/Product_batch/router');  //批次生成产品码
Route::rule('code/code_case', 'productcode/Code_case/router');  //箱码接口
Route::rule('code/code_box', 'productcode/Code_box/router');  //盒码接口
Route::rule('code/scan_validate', 'productcode/Scan_code/check');  //扫码验证产品码有效性以及扫码核销（微信小程序）
Route::rule('code/token_scan_validate', 'productcode/Company_scan_code/check');  //扫码验证产品码有效性(需要授权)
Route::rule('code/cost_config', 'productcode/Cost_company_config/router');  //扫码验证产品码有效性以及扫码核销

Route::rule('code/warehouse_batch', 'wms/Warehouse_batch/router');   //扫码入库前生成入库批次接口
Route::rule('code/warehouse_product_in', 'wms/Warehouse_product_in/router');   //扫码入库对应product_in
Route::rule('code/scan_in', 'wms/Warehouse_scan_in/router');   //厂家扫码入库
Route::rule('code/scan_out', 'wms/Warehouse_scan_out/router');   //厂家扫码出库
Route::rule('code/order_scan_in', 'wms/Warehouse_order_in/router');   //经销商/终端订单扫码入库（经销商/终端一键快速入库）
Route::rule('code/dealer_order_out', 'wms/Warehouse_scan_out/dealerScanOut');   //经销商订单扫码出库
Route::rule('code/warehouse_product_out', 'wms/Warehouse_product_out/router');   //订单扫码出库批次信息对应product_out
Route::rule('code/warehouse_un_shipping', 'wms/Warehouse_product_out/outUnShipping');   //仓库订单出库未设置物流信息批次
Route::rule('code/warehouse_bind_shipping', 'wms/Warehouse_product_out/outBindShipping');   //仓库管理员操作绑定物流单号数据
Route::rule('order/order_analyse', 'wms/Order/orderCount');   //订单分析接口
/******************************************产品码 end******************************************************/


/*********************************费用系统**********************************/
Route::get('company/cost', 'wms/Company_cost/getCost');   //费用统计
Route::get('company/cost_list', 'wms/Company_cost/getList');   //费用列表
Route::get('company/cost_detail', 'wms/Company_cost/getDetail');   //费用列表


/******************************************供应商 start******************************************************/
Route::get('supplier/supplier', 'supplier/Supplier/index');   //供应商列表带分页
Route::get('supplier/identity', 'supplier/Supplier/getIdentity');   //供应商列表带分页
/******************************************供应商 end******************************************************/

/******************************************JSW_CLOUD 系统接口 start******************************************************/
Route::rule('system/shipping', 'system/Shipping/router');   //物流公司接口
Route::rule('system/getAppUuid', 'system/Shipping/getAppUuid');   //物流公司接口
Route::get('system/staff', 'personnel/SystemStaff/staff');   //公司员工(companyUuid\departmentId\child\postCode)
Route::get('system/order_push_manager', 'wms/System/orderPushManager');   //订单推送管理员
Route::get('system/company_info', 'company_new/System/getCompany');   //公司信息
Route::get('system/company_search', 'company_new/System/getAuthenticationList');   //公司搜索列表(无需授权)
/******************************************JSW_CLOUD 系统接口 end******************************************************/


Route::get('logistics/flow', 'logistics/Index/getLogistics');    //产品流向接口


Route::get('dynamic/data', 'reportform/Index/getData');    //动态数据接口
Route::get('sales/report', 'reportform/Index/salesReport');    //销售报表接口

/*******************************应用管理********************************/
Route::get('app_manage/category', 'app_manage/Admin/editCate');    //平台获取应用类别
Route::post('app_manage/category', 'app_manage/Admin/createCate');    //平台-新增应用类别
Route::delete('app_manage/category', 'app_manage/Admin/delCate');    //平台-删除应用类别
Route::post('app_manage/edit_category', 'app_manage/Admin/editCate');    //平台-编辑类别信息
Route::get('app_manage/editApp', 'app_manage/Admin/editApp');    //平台-获取指定应用信息
Route::post('app_manage/editApp', 'app_manage/Admin/editApp');    //平台-编辑应用信息
Route::delete('app_manage/delApp', 'app_manage/Admin/delApp');    //平台-删除应用
Route::post('app_manage/addAlbum', 'app_manage/admin/addAlbum');    //平台-应用添加相册
Route::post('app_manage/updateAlbum', 'app_manage/admin/updateAlbum');    //平台-应用编辑相册(排序)
Route::delete('app_manage/delAlbum', 'app_manage/admin/delAlbum');    //平台-删除应用相片
Route::get('app_manage/album', 'app_manage/admin/album');    //平台-获取应用相册
Route::get('app_manage/application', 'app_manage/Info/application');    //通用-获取全部应用
Route::get('app_manage/info_category', 'app_manage/Info/category');    //通用-获取应用类别
Route::post('company/app', 'company_new/App_manager/add');    //企业-新增应用（自建应用）
Route::post('company/app_edit', 'company_new/App_manager/edit');    //企业-编辑应用（自建应用）
Route::get('company/app_info', 'company_new/App_manager/info');    //企业-获取应用信息（自建应用)
Route::delete('company/app_del', 'company_new/App_manager/del');    //企业-删除应用（自建应用)
Route::post('company/addAlbum', 'company_new/App_manager/addAlbum');    //企业-新增自建应用相册(待测)
Route::post('company/selectApp', 'company_new/App_manager/selectApp');    //企业-购买第三方应用0.1 verison
Route::rule('company/config', 'company_new/Msg/Config');    //公司暂存消息推送配置
Route::rule("app/manage", 'app_application/Application/route');

/*******************************物料分类管理start********************************/
Route::rule('materiel/category_route', 'materiel/Materielcategory/route');//物料分类详情
/*******************************物料分类管理END********************************/

/************************************打卡********************************************/

Route::get('clock/require_clock', 'clock/clock/requireClock');  //个人检查当天是否需要打卡
Route::get('clock/clock_check', 'clock/clock/clockRange');  //个人检查当天打卡
Route::get('clock/check_wifi', 'clock/clock/checkWifi');  //个人是否符合wifi打卡
Route::get('clock/self_record', 'clock/Clock/getList');  //个人查询打卡情况
Route::get('clock/record', 'clock/Clock/clockRecord');  //管理员查看员工打卡信息
Route::get('clock/staff_record', 'clock/Clock/staffRecord');  //管理员查看员工某天打卡情况
Route::post('clock/clock', 'clock/clock/doClock');  //实际打卡操作
Route::rule('clock/rule', 'clock/Rule/route');  //打卡规则
Route::rule('clock/clock_out_rule', 'clock/Clock_out_rule/route');  //外出打卡规则
Route::post('clock/clock_out_record', 'clock/Clock_out_record/clock');  //外出打卡操作
Route::get('clock/clock_out_check', 'clock/Clock_out_record/check');  //外出打卡规则检测
Route::get('clock/clock_out_count', 'clock/Clock_out_rule/getCount');  //外出打卡统计
Route::get('clock/manage_out_record', 'clock/Clock_out_rule/getRecord');  //管理外出打卡记录列表
Route::post('clock/manage_out_audit', 'clock/Clock_out_rule/audit');  //管理员审核外出打卡记录
Route::get('clock/self_out_record', 'clock/Clock_out_record/record');  //个人外出打卡记录获取
Route::get('clock/out_month_count', 'clock/Clock_out_rule/getMonthCount');  //外出打卡月统计
Route::rule('clock/manage_config', 'clock/Clock_manage/route');  //打卡权限配置
Route::rule('clock/manage_check', 'clock/Clock_manage_user/checkRole');  //检查是否打卡管理员
Route::get('clock/manage_staffs', 'clock/Clock_manage_user/manageStaff');  //打卡管理员管理员工范围
Route::rule('clock/plan', 'clock/Plan/route');  //排班接口
Route::rule('clock/audit', 'clock/Clock_record/audit');  //打卡照片|视频审核
Route::post('clock/audit_list', 'clock/Clock_record/auditList');  //打卡照片|视频列表
Route::get('clock/count', 'clock/clock/companyCount');  //打卡数据统计
Route::post('clock/level', 'clock/Leave/create');  //OA员工请假同步
Route::post('clock/attendance_day', 'clock/Attendance/getDays');  //OA员工请假同步
Route::rule('clock/out_category', 'clock/Clock_out_category/route');  //外出打卡分类增删改查
Route::get('clock/count_abnormal', 'clock/Clock_count/abnormal');  //打卡异常分钟数统计
/*******************************打卡记录导出start*******************************/

Route::post('clock/push', 'clock/Create_clock/push');//测试
Route::get('clock/push_create', 'clock/Create_clock/create');//测试
Route::get('clock/export', 'clock/Clock_export/export');
Route::rule('audit/export_excel_audited_task', 'audit/Excel/export_excel_audited_task');
Route::get('clock/export_staff', 'clock/Clock_export/getExportStaff');//个人打卡导出

/*******************************打卡记录导出end*******************************/

/*******************************物料管理start********************************/
Route::rule('materiel/route', 'materiel/materiel/route');//物料详情
/*******************************物料管理end********************************/

/*******************************商家渠道商品start*******************************/
Route::get('wms/company/product_list', 'wms/CompanyProduct/getCompany');
Route::get('wms/custom/product_list', 'wms/CompanyProduct/getCustom');
Route::get('wms/company/type', 'wms/CompanyProduct/getTypeAll');
/*******************************商家渠道商品end*******************************/

/*******************************活动-费用-稽核start*******************************/
Route::get('audit/task/get_list', 'audit/AuditSelect/getList');
Route::get('audit/task/get_show', 'audit/AuditSelect/getShow');
Route::rule('audit/cancelTaskMore', 'audit/Audit/cancelTaskMore');
Route::rule('audit/activityIsExist', 'audit/Audit/activityIsExist');
/*******************************活动-费用-稽核end*******************************/

/*******************************本地产品-范围关联start*******************************/
Route::post('product/goods_range', 'product/Locals/goodsRange');
Route::post('product/cancel_goods_range', 'product/Locals/cancelGoodsRange');
Route::post('product/addGoodsTags', 'product/Tags/addGoodsTags');
Route::post('locals/getGoods', 'product/Locals/getGoods');
Route::post('locals/getGoodsOnline', 'product/Locals/getGoodsOnline');
/*******************************本地产品-范围关联end*******************************/

Route::rule('company/invoice', 'company_new/CompanyInvoice/route');//企业发票抬头
/*******************************合同列表start*******************************/
Route::rule('contract/invok', 'contract/ContractController/route');
Route::rule('contract/config', 'contract/ContractController/config');
/*******************************合同列表end*******************************/
/*******************************订单列表start*******************************/
Route::rule('order/invok', 'crm_order/CrmOrderController/route');
Route::rule('order/config', 'crm_order/CrmOrderController/config');
/*******************************客户列表end*******************************/
/*******************************订单列表start*******************************/
Route::rule('customer/invok', 'customer/CustromerController/route');
Route::rule('customer/config', 'customer/CustromerController/config');
Route::rule('crm/app_type', 'customer/Crm_app_type/route');   //公共分类
Route::rule('crm/app_team', 'customer/Crm_app_team/route');   //团队成员
Route::post('crm/app_team_charge', 'customer/Crm_app_team/setCharge');   //更换负责人
Route::rule('crm/market_activity', 'customer/Market_activity/route');   //市场活动
Route::post('crm/market_activity_status', 'customer/Market_activity/setStatus');   //市场活动更新状态
Route::post('crm/market_activity_lock', 'customer/Market_activity/setLocked');   //市场活动更新状态
Route::rule('crm/sale_clue_pool', 'customer/Crm_sale_clue_pool/route');   //线索池配置
Route::rule('crm/sale_clue', 'customer/Crm_sale_clue/route');   //线索
Route::post('crm/sale_clue_lock', 'customer/Crm_sale_clue/setLocked');   //线索锁定|解锁
Route::post('crm/sale_clue_status', 'customer/Crm_sale_clue/setStatus');   //退回|作废
Route::post('crm/sale_clue_assign', 'customer/Crm_sale_clue/assignClue');   //分配线索
Route::post('crm/sale_clue_follow_up', 'customer/Crm_sale_clue/followUp');   //跟进线索
/*******************************客户列表end*******************************/


/*******************************拜访start*******************************/
Route::rule('visit/list', 'visit/Visit/route');
Route::rule('visit/survey', 'visit/Visit/survey');
/*******************************拜访end*******************************/

/*******************************商圈start-fqx*******************************/
Route::rule('circle/rule', 'circle/Circle/route');//查询云销圈列表
Route::rule('circle/portal', 'circle/CirclePortal/route');//云销圈后台（增删查）
Route::get('circle/getCircleBySource', 'circle/Circle/getCircleBySource');//根据source获取商圈
Route::post('circle/portal_new', 'circle/CirclePortalNews/route');//云销圈后台新闻资讯（增）
Route::rule('circle/collection', 'circle/Collection/route');//云销圈收藏后台（增删查）
Route::rule('circle/collection/hasCollected', 'circle/Collection/hasCollected');//云销圈收藏查询是否收藏
Route::rule('circle/browse', 'circle/Browse/route');//云销圈阅读后台（增查）
Route::rule('circle/field_manage', 'circle/CircleField/route');//云销圈业务数据格式管理接口
Route::get('circle/field', 'circle/CircleField/getField');//云销圈api查询业务数据格式接口
Route::get('circle/recommend', 'circle/Circle/recommend');//云销圈推荐搜索列表
Route::get('circle/get_show', 'circle/Circle/getShow');//云销圈朋友详情
Route::rule('circle/footprint', 'circle/FootprintRecord/route');//云销圈足迹列表
Route::rule('circle/portal_info', 'circle/Circle_portal_info/info');//云销圈详情统计信息（浏览数和收藏数）

Route::get('circle/get_dynamic/[:uid]', 'circle/Circle/getDynamic');//个人动态
Route::get('circle/get_comment/[:threadId]', 'circle/Circle/getComment');//帖子评论
Route::get('circle/collection_count/[:uid]', 'circle/Circle/getCollectionCount');//用户收藏量
Route::rule('circle/circle_count/[:uid]', 'circle/Circle/getCircleCount');//用户动态量
Route::get('circle/profile/[:uid]', 'circle/Circle/getProfile');//用户信息统计
Route::get('circle/get_source', 'circle/CirclePortal/getMySource');//我的来源类型
Route::get('circle/get_collection', 'circle/CirclePortal/getCollection');//我某个来源下的收藏信息
Route::post('collection/set_company', 'circle/Collection/setCompany');//收藏企业
Route::get('collection/get_company', 'circle/Collection/getCompany');//获取收藏
Route::get('comment', 'circle/Comment/route');//评论列表
Route::get('comment/self', 'circle/Comment/getComment');//给我的留言
Route::get('comment/participate', 'circle/Comment/getMyParticipate');//我参与的
Route::get('collection/list', 'circle/Collection/getCollectionList');//我的收藏列列表

Route::get('discuz/home/friend/[:uid]', 'discuz/HomeFriendController/getContent');//我的好友数量
Route::get('person/index', 'person/IndexController/route');//个人信息
Route::get('person/album/[:uid]', 'person/AlbumController/route');//我的相册
Route::get('person/graph/[:uid]', 'person/PersoAutographController/getRead');//我的备注与标签
Route::get('person/tag/[:uid]', 'person/PersonTagController/getRead');//我的签名
Route::get('discuz/getUid', 'discuz/member/getUid');//获取uid
Route::rule('company/flav', 'company_new/CompanyFlav/route');//获取公司收藏
Route::post('contact/register', 'discuz/Contact/findRegister');//查询手机联系人注册信息
Route::get('portal/category', 'discuz/Portal_category/getList');//新闻频道
Route::post('news/publish', 'discuz/Portal/publish');//新闻发布
Route::get('member/getMembers', 'discuz/member/getMembers');//搜索用户
Route::post('member/getMembersById', 'discuz/member/getMembersById');//根据uid批量搜索用户

//Route::get('person/test', 'person/IndexController/checkCate');//验证终端布局算法
Route::get('person/test', 'person/IndexController/getAear');//验证终端布局算法
Route::get('card/self', 'card/Card/selfCard');//个人名片信息
Route::post('card/card', 'card/Card/route');//投递名片


//评论
Route::rule('comment/rule', 'circle/Comment/route');

//关注
Route::rule('circle/follow', 'circle/circle_portal_follow/route'); //关注（post）、取消关注（delete）关注者列表（get）
Route::get('circle/follow/getFansList', 'circle/circle_portal_follow/getFansList'); //获取粉丝列表
Route::get('circle/follow/getContactList', 'circle/circle_portal_follow/getContactList'); //获取联系人列表
Route::get('circle/follow/getCircleList', 'circle/circle_portal_follow/getCircleList'); //关注的商圈列表
Route::get('circle/follow/searchMembers', 'circle/circle_portal_follow/searchMembers'); //搜索用户
//举报
Route::rule('circle/report', 'circle/circle_portal_report/route'); //酒商网-app-举报（增、删、查）
Route::get('circle/report/getReportType', 'circle/circle_portal_report/getReportType'); //举报类型
//屏蔽
Route::rule('circle/shield', 'circle/circle_portal_shield/route'); //酒商网-app-屏蔽（增、删、查）
//话题
Route::rule('circle/topic', 'circle/circle_portal_topic/index'); //酒商网-app-话题（增、删、改、查）

/*******************************商圈end-fqx*******************************/

/********企业员工导入start**********/
Route::post('person/export', 'person/IndexController/export');//企业员工导入excel\xls\cvs
Route::rule('area/route', 'person/AreaController/route');//省市区县
Route::get('area/get_list', 'person/AreaController/getList');//获取省级数据
Route::get('area/read/[:code]', 'person/AreaController/getRead');//获取省级数据
Route::rule('area/getRealArea', 'person/Area_scope/getRealArea');//地址是否在区域范围内
/********企业员工导入end************/

/********终端店铺**********/
Route::rule('address/route', 'person/Address/route');//地址
Route::rule('store/route', 'company_new/CompanyStore/route');//终端店铺（列表，详情）
Route::rule('store/address_uuid', 'company_new/CompanyStore/getStoreAddressUuid');//根据条件获取店铺的地址uuid
Route::rule('address/area_store', 'person/Address/getAreaStore');//获取城市下各个区的店铺分布
Route::rule('store/commpany_store/route', 'company_new/CompanyStore/getStoreUuid');//根据条件获取店铺的uuid

Route::rule('commpany_store/route', 'company_new/CompanyStore/route');//公司店铺
Route::put('commpany_store/set_default', 'company_new/company_store/setDefault');//设置主店铺（默认店铺）
Route::rule('timestamp/get', 'company_new/Timestamp/getTimeStamp');//根据服务器时间戮

/********************************网易云信**********************************************/
Route::rule('yun_xin/route', 'netease/User/route');//更新云信资料信息
Route::rule('yun_xin/system_msg', 'netease/System_msg/route');//发送系统自定义通知
Route::get('yun_xin/team_list', 'netease/Team/teamList');//获取某用户加入的所有群


/*****************************************日程管理********************************************/
Route::get('todo/cate', 'todo/Todo_category/cate');//日程分类列表|详情
Route::get('todo/code', 'todo/Todo_code/code');//日程码表列表|详情
Route::rule('todo/route', 'todo/Todo/route');//日程|会议|任务-》管理（发布|编辑）
Route::rule('todo/comment', 'todo/Todo_comment/route');//评论
Route::put('todo/close', 'todo/Todo/close');//日程开启关闭
Route::put('todo/proportion', 'todo/Todo_record/proportion');//执行人设置进度
Route::put('todo/message_read', 'todo/TodoMessage/read');//查看回执消息
Route::post('todo/do_msg', 'todo/Todo/doMsg');//日程通知消息回调接口
Route::post('todo/meeting_signin', 'todo/Todo/meetingSign');//会议签到
Route::get('todo/scan_meeting_signin', 'todo/TodoMeeting/meetingSign');//会议签到扫码访问地址

/***********************************工作状态**************************************/
Route::get('work_state/list', 'work_state/State/index');//日程分类列表|详情
Route::rule('work_state/staff_set', 'work_state/Staff_work_state_set/route');//员工设置工作状态
Route::post('work_state/staff_vote', 'work_state/Staff_work_state_set/stateVote');//点赞员工状态
Route::get('work_state/college', 'work_state/Staff_work_state_set/college');//同事工作签名列表


/************************************新闻采集发布*******************************************/
Route::rule('gather/route', 'gather/Gather/route');
Route::get('gather/tag', 'gather/Gather_tag/index');  //采集标签列表

/************************************企业互联*******************************************/

Route::rule('company/interconnection_app', 'company_new/Enterprise_interconnection/route');  //配置互联应用
Route::rule('company/interconnection_company', 'company_new/Enterprise_interconnection_company/route');  //配置互联企业|获取列表|详情
//Route::get('company/interconnection_company','company_new/Enterprise_interconnection_company/getInterconnectionCompany');  //获取应用互联企业列表
Route::post('interconnection/status', 'company_new/Enterprise_interconnection_company/setInterconnectionStatus');  //被互联企业处理请求（接受|拒绝）
Route::post('interconnection/range', 'company_new/Enterprise_interconnection_company/setInterconnectionRange');  //被互联企业设置对接人
Route::get('interconnection/next_company', 'company_new/Enterprise_interconnection_company/getSubInterconnection');  //被互联企业设置对接人
Route::get('interconnection/passive_company', 'company_new/Enterprise_interconnection_company/passive');  //我被动成为互联企业列表
Route::get('interconnection/active_company', 'company_new/Enterprise_interconnection_company/active');  //我主动设置互联企业列表
Route::get('interconnection/active_app_company', 'company_new/Enterprise_interconnection_auth/getAppCompany');  //我主动设置互联企业列表（通过应用和类型）
/*******************************************微信************************************************/
Route::post('weixin/logic_record', 'personnel/WeiXin/login');//记录微信小程序最新登录
Route::get('weixin/check_bind', 'personnel/WeiXin/check');//检查微信openid是否绑定公司
Route::post('weixin/follow', 'personnel/WeiXin/follow');//添加、更新粉丝信息
Route::post('weixin/follow_company', 'personnel/WeiXin/followBindCompany');//微信用户绑定企业信息
Route::post('weixin/login_log', 'personnel/WeiXin/loginLog');//保存微信粉丝登录日志
Route::get('weixin/last_login', 'personnel/WeiXin/LastLogin');//微信小程序最后一次登录记录

/*******************************************产品手册************************************************/
Route::get('manual/index', 'manual/manual/index');//获取产品手册列表
Route::post('manual/ad', 'manual/manual/ad');//添加修改手册资料
Route::delete('manual/del', 'manual/manual/del');//删除手册资料
Route::get('manual/index', 'manual/manual/index');//获取产品手册列表
Route::post('manual/ad', 'manual/manual/ad');//添加修改手册资料
Route::delete('manual/del', 'manual/manual/del');//删除手册资料
Route::rule('manual/cate', 'manual/ManualAppCategory/route');//分类
Route::rule('manual/app', 'manual/ManualApp/route');//应用关联分类
Route::get('manual/app_list', 'manual/ManualAppCommon/getList');//应用列表（公共、无需授权）
Route::get('manual/app_manual', 'manual/ManualAppCommon/manualInfo');//应用产品手册（公共、无需授权）


Route::post('weixin/logic_record', 'personnel/WeiXin/login');//记录微信小程序最新登录
Route::get('weixin/check_bind', 'personnel/WeiXin/check');//检查微信openid是否绑定公司
Route::post('weixin/follow', 'personnel/WeiXin/follow');//添加、更新粉丝信息
Route::post('weixin/follow_company', 'personnel/WeiXin/followBindCompany');//微信用户绑定企业信息
/*******************************************呼叫中心************************************************/
Route::post('call_center/app/config', 'call_center/Index/config');//呼叫中心配置
Route::Rule('call_center/app/cate', 'call_center/Index/cate');//呼叫任务类型
Route::Rule('call_center/app/sit', 'call_center/Index/sit');//呼叫坐席
Route::Rule('call_center/app/dctask', 'call_center/Index/Dctask');//呼叫任务


Route::post('call_center/customer_task/import', 'call_center/Index/task_import');//呼叫任务导入

Route::post('call_center/customer_task/asyn', 'call_center/Index/task_asyn');//呼叫任务导入异步执行
Route::post('call_center/customer/import', 'call_center/Index/import');//客户导入
Route::post('call_center/customer/asyn', 'call_center/Index/asyn');//客户导入异步执行
Route::get('call_center/call/call_phone', 'call_center/Call/call_phone');//外呼
Route::get('call_center/call/call_to_call', 'call_center/Call/call_to_call');//双向回呼
Route::get('call_center/call/agentOffWork', 'call_center/Call/agentOffWork');//下线
Route::get('call_center/customer/customer_list', 'call_center/Index/customer_list');//客户列表
Route::get('call_center/app/code', 'call_center/Index/code');//客户列表
Route::post('call_center/app/dataSync', 'call_center/Index/dataSync');//客户列表
Route::get('call_center/app/dataPrec', 'call_center/Index/dataPrec');//客户列表
Route::get('call_center/app/task_customer', 'call_center/Index/task_customer');//任务下面的客户列表
Route::post('call_center/call/calling', 'call_center/Call/calledRecord');//电话拨打
Route::get('call_center/call/desk_talk_list', 'call_center/Call/desk_talk_list');//电话拨打
Route::get('call_center/call/phone_list', 'call_center/Call/phone_list');//电话拨打


Route::get('call_center/call/agentOnWork', 'call_center/Call/agentOnWork');//上线
Route::get('call_center/call/agentReady', 'call_center/Call/agentReady');//就绪
Route::get('call_center/call/transfer', 'call_center/Call/transfer');//转席
Route::Rule('call_center/call/back', 'call_center/Callback/back');//呼入api 回调
Route::get('call_center/task/template/export', 'call_center/Callback/task_template_dowload');//呼叫任务模板导出
Route::get('call_center/customer/template/export', 'call_center/Callback/customer_template_dowload');//企业客户模板导出
Route::delete('call_center/task/call/del', 'call_center/index/task_enterprise_del');//呼叫任务客户删除
Route::delete('call_center/customer/del', 'call_center/index/customer_enterprise_del');//企业客户删除
Route::post('call_center/customer/totask', 'call_center/index/customer_to_task');//企业客户转呼叫任务
Route::get('call_center/customer/app/info', 'call_center/App/info');//app-拨打历史
Route::post('call_center/customer/app/recive', 'call_center/App/recive');//有意向
Route::post('call_center/customer/app/refuse', 'call_center/App/refuse');//无意向
Route::delete('call_center/customer/app/del', 'call_center/app/del');//客户列表
Route::post('call_center/app/call', 'call_center/Index/call');//app电话拨打
Route::get('call_center/app/tag', 'call_center/Index/tag');//app电话拨打
/*******************************************呼叫中心************************************************/


/*******************************************轨迹同步接口************************************************/
Route::rule('trajectory/record', 'count/Trajectory_record/route');//员工业务系统轨迹同步


/*******************************************外部联系人接口************************************************/
Route::get('external_contacts/search', 'external_contacts/external_contacts/search');//查询员工信息
Route::post('external_contacts/add', 'external_contacts/external_contacts/add');//添加
Route::get('external_contacts/getList', 'external_contacts/external_contacts/getList');//获取外部联系人列表
Route::get('external_contacts/getInvitedList', 'external_contacts/external_contacts/getInvitedList');//获取邀请列表
Route::rule('external_contacts/inviteReply', 'external_contacts/external_contacts/inviteReply');//邀请回复
Route::delete('external_contacts/delete', 'external_contacts/external_contacts/delete');//删除
Route::post('external_contacts/queryPersonList', 'external_contacts/external_contacts/queryPersonList');//匹配通讯录员工信息
Route::rule('external_contacts/staff_exclusive_field', 'external_contacts/Staff_Exclusive_Field/index');//后台员工专属对外字段配置(增、删、查)
Route::get('external_contacts/staff_exclusive_field/getFieldValueList', 'external_contacts/Staff_Exclusive_Field/getFieldValueList');//APP员工专属对外字段和值查询
Route::post('external_contacts/staff_exclusive_field/setValue', 'external_contacts/Staff_Exclusive_Field/setValue');//APP员工专属对外字段值设置
/*******************************************外部联系人接口************************************************/


/*******************************************报价单************************************************/
Route::rule('offer_bill', 'quotation/offer_bill/index');//报价单（增、查、改）
Route::post('offer_bill/operate', 'quotation/offer_bill/operate');//报价单（废弃、锁定、解锁、修改负责人）
Route::get('offer_bill/exportExcel', 'quotation/offer_bill/exportExcel');//报价单（导出）
Route::rule('offer_bill_detail', 'quotation/offer_bill_detail/index');//报价单详情（增、查、改）
Route::post('offer_bill_detail/operate', 'quotation/offer_bill_detail/operate');//报价单详情（废弃、锁定、解锁）
Route::get('offer_bill_detail/exportExcel', 'quotation/offer_bill_detail/exportExcel');//报价单详情（导出）
/*******************************************报价单************************************************/

/*******************************************导入************************************************/
Route::post('common_import/import', 'common_import/Import/import'); //导入
Route::get('common_import/downloadTemplate', 'common_import/Import/downloadTemplate'); //导入模板下载
Route::get('common_import/getResult', 'common_import/Import/getResult'); //获取导入结果
/*******************************************导入************************************************/

/*******************************************云销号************************************************/
Route::rule('cloud_sale/portal_article', 'cloud_sale/portal_article/index'); //文章增、删、改、查111
Route::get('cloud_sale/portal_category', 'cloud_sale/portal_category/index'); //获取分类列表111
Route::rule('cloud_sale/review', 'cloud_sale/review/index'); //获取审核列表、审核、审核详情111
Route::get('cloud_sale/portal_article/withdraw', 'cloud_sale/portal_article/withdraw'); //撤回11
Route::get('cloud_sale/portal_article/republish', 'cloud_sale/portal_article/republish'); //重新发布11
Route::get('cloud_sale/review/getRemarks', 'cloud_sale/review/getRemarks'); //审核不通过原因列表11
/*******************************************云销号************************************************/

return [

    '__pattern__' => [
        'name' => '\w+',
    ],
    '[hello]' => [
        ':id' => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
        ':name' => ['index/hello', ['method' => 'post']],
    ],

];
