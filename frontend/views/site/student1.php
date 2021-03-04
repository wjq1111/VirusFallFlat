<?php

/**
 * Team:VirusFallFlat
 * Code by 吴继强
 * 吴继强个人作业展示
**/

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = '吴继强的个人作业';
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


	<h1>学号：1811439 姓名：吴继强 专业：计算机科学与技术</h1>
	<p>点击标题可以查看详情</p>
	<div style="font-family: KaiTi;font-size: 15px">
		<h1 onclick="hw1_show()" style="color: blue">
			第一次作业
		</h1>

		<p name="hw1" style="display: none;font-size: 20px">
			1.get请求和post请求<br/>
		</p>
		<p name="hw1" style="display: none">
			以登录qq邮箱为例(https://mail.qq.com)，打开F12的Network，输入账号密码后可以看到get和post请求。<br/>
		</p>
		<img name="hw1" onclick="openpic()" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/getandpost1.jpg" width="600px" height="400px">
		<img name="hw1" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/getandpost2.jpg" width="600px" height="400px">

		<p name="hw1" style="display: none;font-size: 20px">
			2.一些jQuery语句<br/>
		</p>
		<p name="hw1" style="display: none">
			以www.baidu.com为例，打开Console，检查输入框的元素，发现class=s_ipt。<br/>
			使用jquery查询语句，查询到输入框的元素，而后给输入框赋值。
		</p>
		<img name="hw1" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/jquery.jpg" width="600px" height="400px">

		<p name="hw1" style="display: none;font-size: 20px">
			3.Chrome浏览器插件<br/>
		</p>
		<p name="hw1" style="display: none">
			插件功能：使用百度时有效减少广告出现<br/>
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
		src="/virusfallflat/frontend/images/wjq/axure.png" width="600px" height="400px">

		<p name="hw2" style="display: none">
		左上角是标题，“互联网数据库开发的网页模板”，然后有登录和注册按钮。<br/>
		下面可以展示几篇文章，附加上链接，然后还有喜欢与否的按钮。<br/>
		最后是其余内容不能查看的字样，因为没有登录的用户不能查看全部信息。<br/>
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
			2.输入url:localhost/wordpress/wp-admin/setup-config.php进行注册<br/>
		</p>
		<p name="hw3" style="display: none">
			效果如图：<br/>
		</p>
		<img name="hw3" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/wordpress1.png" width="600px" height="400px">
		<img name="hw3" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/wordpress2.png" width="600px" height="400px">
		<img name="hw3" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/wordpress3.png" width="500px" height="500px">
		<img name="hw3" style="display: none" 
		src="/virusfallflat/frontend/images/wjq/wordpress4.png" width="600px" height="400px">

		<button onclick="hw3_hide()" name="hw3" style="font-family: none;color: black;display: none">隐藏文字
		</button>
		
	</div>
	
	<br/><br/>
	<a href="/virusfallflat/data/personal/作业1(1811439_吴继强).zip" download="作业1(1811439_吴继强)" >点击此处下载第一次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业2(1811439_吴继强).zip" download="作业2(1811439_吴继强)" >点击此处下载第二次作业<br/></a>

	<a href="/virusfallflat/data/personal/作业3(1811439_吴继强).zip" download="作业3(1811439_吴继强)" >点击此处下载第三次作业<br/></a>

</div>