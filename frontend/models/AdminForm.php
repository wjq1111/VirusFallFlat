<?php

/**
 * Team:VirusFallFlat
 * Code by 李世阳
 * Debug人员：吕明昊 吴继强
 * 这是管理员登录的mvc三层的model层.
**/

namespace frontend\models;

use Yii;
use yii\base\Model;


class AdminForm extends Model
{
    public $admin_name;
    public $admin_password;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['admin_name', 'admin_password'], 'required'],
        ];
    }
    public function validatecheck($admin_name, $admin_password)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct  = "SELECT * FROM admin WHERE admin_name = '".$admin_name."' AND admin_password = '".$admin_password."'";
        if(mysqli_num_rows(mysqli_query($con, $slct)) == 1)
        {
            return 1;
        }
        return 0;
    }
}
