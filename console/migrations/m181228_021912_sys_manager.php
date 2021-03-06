<?php

use yii\db\Migration;

class m181228_021912_sys_manager extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%sys_manager}}', [
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'username' => 'varchar(20) NOT NULL DEFAULT \'\' COMMENT \'帐号\'',
            'password_hash' => 'varchar(255) NOT NULL DEFAULT \'\' COMMENT \'密码\'',
            'auth_key' => 'varchar(32) NOT NULL DEFAULT \'\' COMMENT \'授权令牌\'',
            'password_reset_token' => 'varchar(255) NULL DEFAULT \'\' COMMENT \'密码重置令牌\'',
            'type' => 'tinyint(1) NULL DEFAULT \'1\' COMMENT \'1:普通管理员;10超级管理员\'',
            'realname' => 'varchar(10) NULL DEFAULT \'\' COMMENT \'真实姓名\'',
            'head_portrait' => 'char(255) NULL DEFAULT \'\'',
            'sex' => 'tinyint(1) NULL DEFAULT \'1\' COMMENT \'性别[1:男;2:女]\'',
            'qq' => 'varchar(20) NULL DEFAULT \'\' COMMENT \'qq\'',
            'email' => 'varchar(60) NULL DEFAULT \'\' COMMENT \'邮箱\'',
            'birthday' => 'date NULL COMMENT \'生日\'',
            'provinces' => 'int(11) NULL DEFAULT \'0\' COMMENT \'省\'',
            'city' => 'int(11) NULL DEFAULT \'0\' COMMENT \'城市\'',
            'area' => 'int(11) NULL DEFAULT \'0\' COMMENT \'地区\'',
            'address' => 'varchar(100) NULL DEFAULT \'\' COMMENT \'默认地址\'',
            'tel' => 'varchar(20) NULL DEFAULT \'\' COMMENT \'家庭号码\'',
            'mobile' => 'varchar(20) NULL DEFAULT \'\' COMMENT \'手机号码\'',
            'visit_count' => 'smallint(5) unsigned NULL DEFAULT \'0\' COMMENT \'访问次数\'',
            'last_time' => 'int(10) NULL DEFAULT \'0\' COMMENT \'最后一次登陆时间\'',
            'last_ip' => 'varchar(16) NULL DEFAULT \'\' COMMENT \'最后一次登陆ip\'',
            'role' => 'smallint(6) NULL DEFAULT \'10\' COMMENT \'权限\'',
            'status' => 'smallint(6) NOT NULL DEFAULT \'1\' COMMENT \'状态\'',
            'created_at' => 'int(11) NOT NULL DEFAULT \'0\' COMMENT \'创建时间\'',
            'updated_at' => 'int(11) NULL DEFAULT \'0\' COMMENT \'修改时间\'',
            'PRIMARY KEY (`id`)'
        ], "ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COMMENT='系统_后台管理员表'");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%sys_manager}}',['id'=>'1','username'=>'admin','password_hash'=>'$2y$13$xmXSTDWVHNyWm4F0XNqQe.rDfY.rCKr/iZtfZYPOAMjdTVP2BJWtW','auth_key'=>'z6lrwixmdNF4VqtkXw6z-3vMZdSdngm2','password_reset_token'=>'','type'=>'10','realname'=>'简言','head_portrait'=>'','sex'=>'1','qq'=>'','email'=>'','birthday'=>'2017-02-25','provinces'=>'330000','city'=>'330200','area'=>'330203','address'=>'大潮街道666号','tel'=>'','mobile'=>'','visit_count'=>'0','last_time'=>'1545959014','last_ip'=>'127.0.0.1','role'=>'10','status'=>'1','created_at'=>'1449114934','updated_at'=>'1545959015']);
        $this->insert('{{%sys_manager}}',['id'=>'2','username'=>'test','password_hash'=>'$2y$13$EaGMOaqz7F4L2jctAP8PHOdKgVWBfNLlPsmSnKlYNIoRVJjxPs4VS','auth_key'=>'cfW5L93qPKIXIPh-h-WfatyZVywbzPzm','password_reset_token'=>'','type'=>'1','realname'=>'','head_portrait'=>'','sex'=>'1','qq'=>'','email'=>'','birthday'=>NULL,'provinces'=>NULL,'city'=>NULL,'area'=>NULL,'address'=>'','tel'=>'','mobile'=>'','visit_count'=>'0','last_time'=>'1545795269','last_ip'=>'127.0.0.1','role'=>'10','status'=>'1','created_at'=>'1545031927','updated_at'=>'1545795269']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%sys_manager}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

