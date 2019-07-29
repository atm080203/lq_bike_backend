<?php

namespace addons\RfSignShoppingDay;

use addons\RfSignShoppingDay\common\components\Bootstrap;

/**
 * Class Addon
 * @package addons\RfSignShoppingDay */
class AddonConfig
{
    /**
     * 基础信息
     *
     * @var array
     */
    public $info = [
        'name' => 'RfSignShoppingDay',
        'title' => '购物节',
        'brief_introduction' => '购物节签到抽奖',
        'description' => '购物节签到活动，每日可签到抽奖一次, 随机获取奖品',
        'author' => '简言',
        'version' => '1.0.0',
    ];

    /**
    * 应用配置
    *
    * 例如：菜单设置/权限设置/快捷入口
    *
    * @var array
    */
    public $appsConfig = [
        'backend' => 'common/config/backend.php',
        'frontend' => 'common/config/frontend.php',
        'wechat' => 'common/config/wechat.php',
        'api' => 'common/config/api.php',
    ];

    /**
    * 引导文件
    *
    * 设置后系统会在执行插件控制器前执行
    *
    * @var Bootstrap
    */
    public $bootstrap = '';

    /**
     * 参数配置开启
     *
     * @var bool
     */
    public $isSetting = true;

    /**
     * 钩子开启
     *
     * @var bool
     */
    public $isHook = false;

    /**
     * 规则管理开启
     *
     * @var bool
     */
    public $isRule = false;

    /**
     * 类别
     *
     * @var string
     * [
     *      'plug'      => "功能插件",
     *      'business'  => "主要业务",
     *      'customer'  => "客户关系",
     *      'activity'  => "营销及活动",
     *      'services'  => "常用服务及工具",
     *      'biz'       => "行业解决方案",
     *      'h5game'    => "H5游戏",
     *      'other'     => "其他",
     * ]
     */
    public $group = 'activity';

    /**
     * 微信接收消息类别
     *
     * @var array
     * 例如 : ['image','voice','video','shortvideo']
     */
    public $wechatMessage = [];

    /**
     * 保存在当前模块的根目录下面
     *
     * 例如 $install = 'Install';
     * 安装类
     * @var string
     */
    public $install = 'Install';
    
    /**
     * 卸载SQL类
     *
     * @var string
     */
    public $uninstall = 'UnInstall';
    
    /**
     * 更新SQL类
     *
     * @var string
     */
    public $upgrade = 'Upgrade';
}
            