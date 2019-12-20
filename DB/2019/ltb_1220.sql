-- 添加用户证件信息
ALTER TABLE `lq_bike`.`lq_member`
  ADD COLUMN `credential_type` TINYINT(1) DEFAULT 1  NULL   COMMENT '证件类型（1:身份证 2护照 3港澳通行证 4军官证）' AFTER `updated_at`,
  ADD COLUMN `credential_num` VARCHAR(20) NULL   COMMENT '证件编号' AFTER `credential_type`;


-- 添加用户订单表
CREATE TABLE `lq_bike`.`lq_order`( `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '电动自行车id', `vin` VARCHAR(20) NOT NULL COMMENT '车辆整车编码', `bike_info` TEXT NOT NULL COMMENT '产品合格证信息', `member_id` INT(11) NOT NULL COMMENT '用户id', `addr_id` INT(11) NOT NULL COMMENT '收货地址id', `status` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '订单状态（-1：已失效，0:未完成，1：已完成，2：未发货，3：已发货）', `disabled` TINYINT(1) NOT NULL DEFAULT 0 COMMENT '是否删除（0:未删除1:已删除）', PRIMARY KEY (`id`), INDEX (`member_id`) );


-- 修改订单
ALTER TABLE `lq_bike`.`lq_order`
  ADD COLUMN `id_card_img_front` VARCHAR(150) NULL   COMMENT '身份证正面' AFTER `disabled`,
  ADD COLUMN `id_card_img_back` VARCHAR(150) NULL   COMMENT '身份证反面' AFTER `id_card_img_front`,
  ADD COLUMN `bike_bill` VARCHAR(150) NULL   COMMENT '购车发票' AFTER `id_card_img_back`,
  ADD COLUMN `bike_whole_img` VARCHAR(150) NULL   COMMENT '右后方45度整车' AFTER `bike_bill`,
  ADD COLUMN `bike_vin_img` VARCHAR(150) NULL   COMMENT '车身上的整车编码' AFTER `bike_whole_img`,
  ADD COLUMN `bike_motor_num_img` VARCHAR(150) NULL   COMMENT '车身上的电机编码' AFTER `bike_vin_img`,
  ADD COLUMN `other_one_img` VARCHAR(150) NULL   COMMENT '其他1图片' AFTER `bike_motor_num_img`,
  ADD COLUMN `other_two_img` VARCHAR(150) NULL   COMMENT '其他2图片' AFTER `other_one_img`,
  ADD COLUMN `mark` TEXT NULL   COMMENT '备注' AFTER `other_two_img`;


RENAME TABLE `lq_bike`.`lq_order` TO `lq_bike`.`lq_member_order`;


