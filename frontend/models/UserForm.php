<?php

/**
 * Team:VirusFallFlat
 * Code by 邱一帆 吕明昊
 * Debug人员：吴继强 吕明昊
 * 这是用户的mvc三层的model层.
 * 用户注册：吕明昊
 * 用户登录：邱一帆
**/

namespace frontend\models;

use Yii;
use yii\base\Model;


class UserForm extends Model
{
    public $username;
    public $userpswd;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['enterdate'], 'safe'],
            [['username'], 'string', 'max' => 10],
        ];
    }
    public function getID($username)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct  = "SELECT userid FROM user WHERE username = '".$username."'";
        return (mysqli_query($con,$slct)['userid']);
    }
    public function validatecheck($username, $userpswd)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct  = "SELECT * FROM user WHERE username = '".$username."' AND userpswd = '".$userpswd."'";
        if(mysqli_num_rows(mysqli_query($con, $slct)) == 1)
        {
            return 1;
        }
        return 0;
        /*
         *未知的错误，没找出来。
         */
        /*$slct_name = "SELECT username FROM user";
        $res = mysqli_query($con, $slct_name);
        while($row = mysqli_fetch_array($res))
        {
            if($row['username'] == $username)
            {   
                
                if(mysqli_num_rows(mysqli_query($con, sprintf("SELECT userpswd FROM user WHERE username = '%s'", $username))) == 1)
                {
                    return 1;
                }
                else
                    return 0;
            }
        }*/

    }

    /* 
    ---我是分界线---
     * 以上code by 邱一帆
     * 以下code by 吕明昊
    **/

    public function registercheck($username, $userpswd)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct_name = "SELECT username FROM user";
        $res = mysqli_query($con, $slct_name);
        while($row = mysqli_fetch_array($res))
        {
            if($row['username'] == $username)
            {   
                return 0;
            }
        }
        return 1;
    }

    public function register($username, $userpswd)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $row = mysqli_fetch_array(mysqli_query($con, "SELECT MAX(userid) as maxid FROM user"));

        $id = intval($row['maxid']) + 1;
        $ins = sprintf("INSERT INTO user(username, userpswd, userid) VALUES('%s','%s','%d')", $username, $userpswd, $id);
        if(mysqli_query($con, $ins))
        {
            return 1;
        }
        else
            return 0;
    }
}
