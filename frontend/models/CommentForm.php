<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强
 * Debug人员：吴继强 吕明昊
 * 里面包括了展示评论，按文章展示评论，删除评论，添加评论的函数
**/
namespace frontend\models;

use Yii;
use yii\base\Model;


class CommentForm extends Model
{
    public $discuss;
    public $passageid;
    public $userid;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['passageid', 'userid'], 'integer'],
            [['discuss'], 'string', 'max' => 200],
            [['userid'], 'exist', 'skipOnError' => true, 'targetClass' => UserForm::className(), 'targetAttribute' => ['userid' => 'userid']],
            [['passageid'], 'exist', 'skipOnError' => true, 'targetClass' => PassageForm::className(), 'targetAttribute' => ['passageid' => 'passageid']],
        ];
    }

    public function addComment($passageid, $userid, $discuss)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $insert = "INSERT INTO comment(passageid, userid, discuss, time) VALUES ('".$passageid."','".$userid."','".$discuss."','".date("Y-m-d H:i:s",time())."')";
        return mysqli_query($con, $insert);
    }
    public function delComment($discuss)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $delete = "DELETE FROM comment WHERE discuss='".$discuss."'";
        return mysqli_query($con, $delete);
    }
    public function passageComment($passageid)
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct = "SELECT * FROM comment WHERE passageid='".$passageid."'";
        $res = mysqli_query($con, $slct);
        return $res;
    }
    public function showComment()
    {
        $con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
        $slct = "SELECT * FROM comment ORDER BY time DESC";
        $res = mysqli_query($con, $slct);
        return $res;
    }
}