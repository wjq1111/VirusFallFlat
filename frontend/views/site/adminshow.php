<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强
 * Debug人员：吴继强 吕明昊
 * 因为要展示文章、删除文章和展示评论和删除评论，用了2个mvc架构
**/

use frontend\models\CommentForm;
use frontend\models\PassageForm;
$res_passage = PassageForm::showPassage();
$res_comment = CommentForm::showComment();
$this->title = '管理员管理';
$this->params['breadcrumbs'][] = $this->title;

?>
<style type="text/css">
            table
            {
                border-collapse: collapse;
                text-align: center;
                table-layout: fixed;
                width: 100%;
            }
            table td, table th
            {
                border: 1px solid #cad9ea;
                color: #666;
                height: 30px;
                text-align: center;
            }
            table thead th
            {
                background-color: #CCE8EB;
                width: 40%;
            }
            table tr:nth-child(odd)
            {
                background: #fff;
            }
            table tr:nth-child(even)
            {
                background: #F5FAFA;
            }
</style>
<style>
#left{ position:absolute; top:100px; left:0; width:70%; height:100%}
#right{ position:absolute; top:100px; left:70%; height:100%}
</style>
<body>
<div id="left">
<table border='1'><tr><td>所有文章</td></tr></table>
<table border='1' cellpadding='10'>
                <tr>
                <th>文章编号</th>
                <th>文章题目</th>
                <th>文章链接</th>
                <th>发表时间</th>
                <th>文章类型</th>
                <!--<th>操作</th>-->
                </tr>
<?php
    if($res_passage instanceof mysqli_result)
    {
       while($row = mysqli_fetch_array($res_passage))
       {
            echo "<tr>
                <td>".$row['passageid']."</td>
                <td>".substr($row['article'], 0, 100)."..."."</td>";
            echo "<td><a href='".$row['reflink']."'>".substr($row['reflink'], 0, 20)."..."."</a></td>";
            echo "<td>".$row['passagetime']."</td>
                <td>".$row['type']."</td>
                </tr>";
            /*
             * 展示用户评论
            **/
            $passageComment = CommentForm::passageComment($row['passageid']);
            if($passageComment instanceof mysqli_result)
            {
                if(mysqli_num_rows($passageComment) > 0)
                    echo "<tr><td>评论人编号</td><td colspan='3'>评论内容</td><td>评论时间</td></tr>";
                while($comment = mysqli_fetch_array($passageComment))
                {
                    echo "<tr>
                        <td>".$comment['userid']."</td>
                        <td colspan='3'>".$comment['discuss']."</td>
                        <td>".$comment['time']."</td></tr>";
                }
            }
        }
    }
?>
</table>

<!-- 删除文章的mvc架构-->
<a href="/virusfallflat/frontend/web/index.php?r=site/passagedelete">删除文章</a>
</div>
<div id="right">
<table border='1'><tr><td>最近发表的评论</td></tr></table>
<table border='1' cellpadding='10'>
                <tr>
                <th>文章编号</th>
                <th>用户</th>
                <th>内容</th>
                <th>发表时间</th>
                <th>操作</th>
                </tr>
<?php
    if($res_comment instanceof mysqli_result)
    {
	   while($row = mysqli_fetch_array($res_comment))
	   {
		  echo "  <tr>
                    <td>".$row['passageid']."</td>
                    <td>".$row['userid']."</td>
                    <td>".$row['discuss']."</td>
                    <td>".$row['time']."</td>
                    <td><a href='/virusfallflat/frontend/web/index.php?r=site/delcomment')'>删除</a>
                    </tr>";
                    /*
                     * 内包含删除评论的mvc架构
                    **/
        }
    }
?>
</table>
</div>
</body>