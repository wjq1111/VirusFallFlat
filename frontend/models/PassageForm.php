<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强 吕明昊
 * Debug人员：吴继强 吕明昊
 * PassageForm 功能很多，详细信息可以查看下面注释
**/


namespace frontend\models;

use Yii;
use yii\base\Model;


class PassageForm extends Model
{
    public $passageid;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['passageid', 'likecount', 'clickcount'], 'integer'],
            [['article'], 'string', 'max' => 10000],
            [['reflink'], 'string', 'max' => 100],
            [['type'], 'string', 'max' => 255],
            [['passagetime'], 'datetime'],
        ];
    }
    /**
     * Code by 吕明昊
    **/
    public function getID($username)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct  = "SELECT userid FROM user WHERE username = '".$username."'";
        return (mysqli_fetch_array(mysqli_query($con,$slct))['userid']);
    }
    /**
     * Code by 吴继强
     * 这是删除文章的mvc三层的model层.
    **/
    public function delPassage($passageid)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $select = "SELECT passageid FROM passage WHERE passageid = '".$passageid."'";
        if(mysqli_num_rows(mysqli_query($con, $select)) == 1)
        {
            $delComment = "DELETE FROM comment WHERE passageid = '".$passageid."'";
            mysqli_query($con, $delComment);
            $delete = "DELETE FROM passage WHERE passageid = '".$passageid."'";
            mysqli_query($con, $delete);
            return 1;
        }
        return 0;
        
    }
    /**
     * Code by 吴继强
     * 这是展示文章的mvc三层的model层.
    **/
    public function showPassage()
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct = "SELECT * FROM passage ORDER BY passagetime DESC, passageid ASC";
        $res = mysqli_query($con, $slct);
        return $res;
    }
    /**
     * Code by 吕明昊
     * 这是喜欢文章的mvc三层的model层.
    **/
    public function like($passageid)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct  = "SELECT userid FROM user WHERE username = '".$_COOKIE['user']."'";
        $userid = mysqli_fetch_array(mysqli_query($con,$slct))['userid'];
        $slct  = "SELECT * FROM passagelike WHERE userid = '".$userid."' AND passageid = '".$passageid."'";
        if(mysqli_num_rows(mysqli_query($con, $slct)) == 0)
        {   
            $likes = "INSERT INTO passagelike(userid, passageid) VALUES ('".$userid."','".$passageid."')";
            mysqli_query($con, $likes);
            $like = "SELECT * FROM passagelike WHERE passageid='".$passageid."'";
            $likecount = mysqli_num_rows(mysqli_query($con, $like));
            return mysqli_query($con, "UPDATE passage SET likecount='".$likecount."' WHERE passageid='".$passageid."'");
        }
        return 0;
    }
}