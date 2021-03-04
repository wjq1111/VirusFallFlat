<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * 吕明昊个人作业展示
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '吕明昊的个人作业';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
	<script>
		function hw1_show()
		{
			var x = document.getElementsByName("hw1");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="block";
			}
		}

		function hw2_show()
		{
			var x = document.getElementsByName("hw2");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="block";
			}
		}

		function hw3_show()
		{
			var x = document.getElementsByName("hw3");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="block";
			}
		}

		function hw1_hide()
		{
			var x = document.getElementsByName("hw1");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="none";
			}
			document.body.scrollTop = document.documentElement.scrollTop = 0;
		}

		function hw2_hide()
		{
			var x = document.getElementsByName("hw2");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="none";
			}
			document.body.scrollTop = document.documentElement.scrollTop = 0;
		}

		function hw3_hide()
		{
			var x = document.getElementsByName("hw3");
			for(var i = 0; i < x.length; i++)
			{
				x[i].style.display="none";
			}
			document.body.scrollTop = document.documentElement.scrollTop = 0;
		}
	</script>


	<h1>学号：1811401 姓名：吕明昊 专业：物联网工程</h1>
	<p>点击标题可以查看详情</p>
	<div style="font-family: KaiTi;font-size: 15px">
		<h1 onclick="hw1_show()" style="color: blue">
			第一次作业
		</h1>

		<p name="hw1" style="display: none;font-size: 20px">
			1.get请求和post请求<br/>
		</p>
		<p name="hw1" style="display: none">
			Get请求采用了百度搜索框，而Post在登录百度账号时找到。
		</p>
		<img name="hw1" onclick="openpic()" style="display: none" 
		src="/virusfallflat/frontend/images/lmh/getandpost1.png" width="600px" height="400px">
		<img name="hw1" style="display: none" 
		src="/virusfallflat/frontend/images/lmh/getandpost2.png" width="600px" height="400px">

		<p name="hw1" style="display: none;font-size: 20px">
			2.一些jQuery语句<br/>
		</p>
		<p name="hw1" style="display: none">
			使用了很多语句来调戏百度的页面，具体实现请下载观看。
		</p>
		<p name="hw1" style="display: none;font-size: 20px">
			3.Chrome浏览器插件<br/>
		</p>
		<p name="hw1" style="display: none">
			插件功能：使用百度时减少广告出现<br/>
			但是其实只屏蔽了搜索结果的广告，右边栏没有管。<br/>
			具体实装功能可以下载安装试用。
		</p>

		<button onclick="hw1_hide()" name="hw1" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>




	<div style="font-family: KaiTi">
		<h1 onclick="hw2_show()" style="color: blue">
			第二次作业
		</h1>

		<p name="hw2" style="display: none;font-size: 20px">
			1.首先下载axure软件<br/>
		</p>

		<p name="hw2" style="display: none;font-size: 20px">
			2.设计一个页面 效果如下<br/>
		</p>
		<img name="hw2" style="display: none" 
		src="/virusfallflat/frontend/images/lmh/axure.png" width="600px" height="400px">

		<p name="hw2" style="display: none">
		此外其实还设计了在长按时会随着鼠标移动的操作，<br/>
		是move to [[Cursor.X]]之类的用法，但效果总是不理想因此舍弃了。<br/>
		选取的团队模板为乜鹏老师在课上展示过的魔改模板。
		</p>

		<button onclick="hw2_hide()" name="hw2" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>



	<div style="font-family: KaiTi">
		<h1 onclick="hw3_show()" style="color: blue">
			第三次作业
		</h1>

		<p name="hw3" style="display: none;font-size: 20px">
			1.官网下载wordpress包，放入xampp/htdocs中<br/>
		</p>

		<p name="hw3" style="display: none;font-size: 20px">
			2.输入url:localhost/wordpress(/wp-admin/setup-config.php)进行注册<br/>
		</p>
		<p name="hw3" style="display: none">
			效果及随意改变布局的结果均在文档中有写。<br/>
		</p>
		<button onclick="hw3_hide()" name="hw3" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>
	
	<br/><br/>
	<a href="/virusfallflat/data/personal/作业1(1811401_吕明昊).zip" download="作业1(1811401_吕明昊)" >点击此处下载第一次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业2(1811401_吕明昊).zip" download="作业2(1811401_吕明昊)" >点击此处下载第二次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业3(1811401_吕明昊).zip" download="作业3(1811401_吕明昊)" >点击此处下载第三次作业<br/></a>

</div>