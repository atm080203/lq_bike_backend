<?php

namespace api\modules\v1\controllers\member;

use Yii;
use api\controllers\UserAuthController;
use common\models\member\Order;

/**
 * 订单
 *
 * Class OrderController
 * @package api\modules\v1\controllers\member
 * @property \yii\db\ActiveRecord $modelClass
 * @author jianyan74 <751393839@qq.com>
 */
class OrderController extends UserAuthController
{
    /**
     * @var Order
     */
    public $modelClass = Order::class;
    protected $authOptional = ['create'];


    public function actionCreate()
    {
        $url = 'http://mv.cqccms.com.cn/incoc/GSViewEbike!viewCocEbike.action';
        $request = Yii::$app->request;
//        $params = $request->post('vinCode');
        $params = array(
            'vinCode' => '779421960173595'
        );
        $data = http_build_query($params, null, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10); //设置curl超时秒数
        $ret = curl_exec($ch);
        if (curl_errno($ch)) {
            curl_close($ch);
            return array(curl_error($ch), curl_errno($ch));
        } else {
            curl_close($ch);
            if (!is_string($ret) || !strlen($ret)) {
                return false;
            }
//            return $ret;
        }
        print_r($ret);die();
    }
}
