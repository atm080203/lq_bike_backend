<?php

namespace common\models\member;

#use yii\db\ActiveRecord;
use common\behaviors\MerchantBehavior;
#use common\helpers\RegularHelper;
#use common\enums\StatusEnum;

class Order extends \common\models\base\BaseModel
{
    use MerchantBehavior;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%member_order}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['vin'], 'required'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'vin' => '车辆整车编码',
            'member_id' => '用户',
            'bike_info' => '产品合格证信息',
            'addr_id' => '收货地址id',
            'status' => '订单状态',
            'disabled' => '是否删除',
            'id_card_img_front' => '身份证正面',
            'id_card_img_back' => '身份证反面',
            'bike_bill' => '购车发票',
            'bike_whole_img' => '右后方45度整车',
            'bike_vin_img' => '车身上的整车编码',
            'bike_motor_num_img' => '车身上的电机编码',
            'other_one_img' => '其他1图片',
            'other_two_img' => '其他2图片',
            'mark' => '备注'
        ];
    }
}