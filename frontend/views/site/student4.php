<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * 邱一帆个人作业展示
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '邱一帆的个人作业';
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


	<h1>学号：1811501 姓名：邱一帆 专业：计算机科学与技术</h1>
	<p>点击标题可以查看详情</p>
	<div style="font-family: KaiTi;font-size: 15px">
		<h1 onclick="hw1_show()" style="color: blue">
			第一次作业
		</h1>

		<p name="hw1" style="display: none;font-size: 20px">
			1.get请求和post请求<br/>
		</p>
		<p name="hw1" style="display: none">
			在bilibili的主页上寻找了相应的get和post请求。
		</p>
		<img name="hw1" onclick="openpic()" style="display: none" 
		src="/virusfallflat/frontend/images/qyf/getandpost1.png" width="600px" height="400px">
		<img name="hw1" style="display: none" 
		src="/virusfallflat/frontend/images/qyf/getandpost2.png" width="600px" height="400px">

		<p name="hw1" style="display: none;font-size: 20px">
			2.一些jQuery语句<br/>
		</p>
		<p name="hw1" style="display: none">
			对偶书的页面进行了多种jquery操作。
		<p name="hw1" style="display: none;font-size: 20px">
			3.Chrome浏览器插件<br/>
		</p>
		<p name="hw1" style="display: none">
			插件功能：选中文字时右键增加百度搜索选项。
		</p>

		<button onclick="hw1_hide()" name="hw1" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>




	<div style="font-family: KaiTi">
		<h1 onclick="hw2_show()" style="color: blue">
			第二次作业
		</h1>

		<p name="hw2" style="display: none;font-size: 20px">
			设计的页面及选取的前后台模板请在下载后查看。
		</p>

		<button onclick="hw2_hide()" name="hw2" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>



	<div style="font-family: KaiTi">
		<h1 onclick="hw3_show()" style="color: blue">
			第三次作业
		</h1>

		<p name="hw3" style="display: none;font-size: 20px">
			下载wordpress后，将其放入文件夹内，随后输入http://localhost/wordpress即可进行安装。<br/>
			安装过程在压缩包内。
		</p>
		<button onclick="hw3_hide()" name="hw3" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>
	
	<br/><br/>
	<a href="/virusfallflat/data/personal/作业1(1811501_邱一帆).zip" download="作业1(1811501_邱一帆)" >点击此处下载第一次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业2(1811501_邱一帆).zip" download="作业2(1811501_邱一帆)" >点击此处下载第二次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业3(1811501_邱一帆).zip" download="作业3(1811501_邱一帆)" >点击此处下载第三次作业<br/></a>

</div>