<?php

/**
 * Team:VirusFallFlat
 * 界面设计：吴继强
 * 代码编写：吕明昊
 * Debug人员： 吴继强 吕明昊
**/
use frontend\models\PassageForm;
$res_passage = PassageForm::showPassage();
$this->title = '互联网数据库开发';
$this->params['breadcrumbs'][] = '病毒一败涂地 Virus Fall Flat';
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
<div class="site-index" >
	<h1 style="text-align:center">欢迎，Guest！</h1>
	<h2 style="text-align:center">您还未登陆，无法浏览全部信息</h2>
	<center>
	<a href="/virusfallflat/frontend/web/index.php?r=site/register">
    	<button>立即注册</button>
	</a>
	<a href="/virusfallflat/frontend/web/index.php?r=site/login">
    	<button>立即登录</button>
	</a>
   	<a href="/virusfallflat/frontend/web/index.php?r=site/admin" style="color: #FF0000;">
    	<button>管理员登录</button>
	</a>
	</center>
	<br/><br/>

<table border='1'><tr><td>部分文章</td></tr></table>
<table border='1' cellpadding='10'>
                <tr>
                <th>文章编号</th>
                <th>文章题目</th>
                <th>文章链接</th>
                <th>发表时间</th>
                <!--th>文章类型</th-->
                <!--th>操作</th>-->
                </tr>
<?php
    if($res_passage instanceof mysqli_result)
    {
    	$i = 0;
       while($row = mysqli_fetch_array($res_passage))
       {
       		if($i > 1)
       		{
       			break;
       		}
            echo "<tr>
                <td>".$row['passageid']."</td>
                <td>".substr($row['article'], 0, 100)."..."."</td>";
            echo "<td><a href='".$row['reflink']."'>".substr($row['reflink'], 0, 20)."..."."</a></td>";
            echo "<td>".$row['passagetime']."</td>
                </tr>";
        	$i = $i + 1;
    	}
    }
?>
</table>
<h1>...</h1>
<br/>
<p style="font-size: 50px; font-family: KaiTi">登录后才可查看详细内容喔~</p>

