<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * Debug人员：吕明昊 吴继强
 * 因为要展示文章、展示评论和发表评论，用了1个mvc架构
 * 显示折线图代码量很大
**/

	use frontend\models\DataForm;
	use frontend\models\CommentForm;
	use frontend\models\PassageForm;
	$res_passage = PassageForm::showPassage();
	$res = DataForm::getData();
$this->title = '用户展示';
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
#right{ position:absolute; top:100px; left:50%; height:100%}
</style>
<script type="text/javascript">
	function func(id)
	{
		document.cookie="passageid="+String(id);
	}
	function func2(id)
	{
		document.cookie="likeid="+String(id);
	}
</script>
<div id="left">
<?php
	if(isset($_COOKIE["user"]))
	{
		echo "<h1>欢迎，".$_COOKIE["user"]."</h1>";
	}

	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['china_infected']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的
	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>国内病例</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(207, 0, 207); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #007FFF" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #007FFF" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #007FFF" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #007FFF" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #007FFF" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #007FFF" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #007FFF" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>
<?php
	
	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['china_cured']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的

	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>国内治愈</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(0, 255, 0); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #00FF00" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #00FF00" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #00FF00" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #00FF00" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #00FF00" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #00FF00" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #00FF00" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>
<?php
	
	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['china_death']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的
	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>国内死亡</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(0, 0, 0); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #000000" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #000000" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #000000" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #000000" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #000000" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #000000" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #000000" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>

<table border='1'><tr><td>所有文章</td></tr></table>
<table border='1' cellpadding='10'>
                <tr>
                <th>文章编号</th>
                <th>文章题目</th>
                <th>文章链接</th>
                <th>发表时间</th>
                <th>操作</th>
                <th>喜欢</th>
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
                <td><a href='/virusfallflat/frontend/web/index.php?r=site/addcomment' onclick = 'func(".$row['passageid'].")'>发表评论</a></td><td><a href='/virusfallflat/frontend/web/index.php?r=site/like' onclick = 'func2(".$row['passageid'].")'>喜欢此文章</a></td>
                </tr>";
            $passageComment = CommentForm::passageComment($row['passageid']);
            if($passageComment instanceof mysqli_result)
            {
                if(mysqli_num_rows($passageComment) > 0)
                    echo "<tr><td>评论人编号</td><td colspan='4'>评论内容</td><td>评论时间</td></tr>";
                while($comment = mysqli_fetch_array($passageComment))
                {
                    echo "<tr>
                        <td>".$comment['userid']."</td>
                        <td colspan='4'>".$comment['discuss']."</td>
                        <td>".$comment['time']."</td></tr>";
                }
            }
        }
    }
?>
</table>
</div>
<div id="right">
<?php
	echo "<h1>今天是".date("Y-m-d H:i:s",time())."</h1>";
	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['country_infected']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的
	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>海外病例</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(207, 207, 0); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #FF0000" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #FF0000" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #FF0000" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #FF0000" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #FF0000" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #FF0000" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #FF0000" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>
<?php
	
	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['country_cured']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的
	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>海外治愈</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(0, 255, 100); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #00FF7F" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>
<?php
	
	$T200606 = 0;
	$T200607 = 0;
	$T200608 = 0;
	$T200609 = 0;
	$T200610 = 0;
	$T200611 = 0;
	$T200612 = 0;
	while($row = mysqli_fetch_array($res['country_death']))
	{
		$T200606 += $row['T200606'];
		$T200607 += $row['T200607'];
		$T200608 += $row['T200608'];
		$T200609 += $row['T200609'];
		$T200610 += $row['T200610'];
		$T200611 += $row['T200611'];
		$T200612 += $row['T200612'];
	}
	$init = $T200606;
	$final = $T200612;
	if($init == $final) 
		{
			$final = $init + 50;
			$init = $final - 100;
		}
	#因为疫情数据总是递增的而不会减少，故可以放心大胆地将第一天认为是最小的，最后一天认为是最大的
	$p1 = $init/4 + $final*3/4;
	$p2 = $init/2 + $final/2;
	$p3 = $init*3/4 + $final/4;
	$T200606_pos = (1-($T200606-$init) / ($final - $init)) * 140;
	$T200606_tran = "'translate(27.18, ".$T200606_pos.")'";
	$T200607_pos = (1-($T200607-$init) / ($final - $init)) * 140;
	$T200607_tran = "'translate(81.55, ".$T200607_pos.")'";
	$T200608_pos = (1-($T200608-$init) / ($final - $init)) * 140;
	$T200608_tran = "'translate(135.91, ".$T200608_pos.")'";
	$T200609_pos = (1-($T200609-$init) / ($final - $init)) * 140;
	$T200609_tran = "'translate(190.27, ".$T200609_pos.")'";
	$T200610_pos = (1-($T200610-$init) / ($final - $init)) * 140;
	$T200610_tran = "'translate(244.64, ".$T200610_pos.")'";
	$T200611_pos = (1-($T200611-$init) / ($final - $init)) * 140;
	$T200611_tran = "'translate(299, ".$T200611_pos.")'";
	$T200612_pos = (1-($T200612-$init) / ($final - $init)) * 140;
	$T200612_tran = "'translate(353.36, ".$T200612_pos.")'";
	$str_Cinf = "'M27.18,".$T200606_pos."L81.55,".$T200607_pos."L135.91,".$T200608_pos."L190.27,".$T200609_pos."L244.64,".$T200610_pos."L299,".$T200611_pos."L353.36,".$T200612_pos."'";
?>
<h2>海外死亡</h2>
<svg class="chart" width="430" height="190">
	<defs></defs>
	<g class="line-chart" transform="translate(60, 20)">
		<g class="y axis" transform="">
			<g transform="translate(0, 140)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $init?></text>
			</g>
			<g transform="translate(0, 105)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p3?></text>
			</g>
			<g transform="translate(0, 70)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p2?></text>
			</g>
			<g transform="translate(0, 34.999999999999986)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $p1?></text>
			</g>
			<g transform="translate(0, 0)" stroke-opacity="1">
				<line class="line-horizontal " x1="-6" x2="604" y1="0" y2="0" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="-10" y="0" dy="3px" font-size="10px" text-anchor="end"><?php echo $final?></text>
			</g>
		</g>
		<g class="x axis" transform="">
			<g transform="translate(27.18, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.6</text>
			</g>
			<g transform="translate(81.55, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.7</text>
			</g>
			<g transform="translate(135.91, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.8</text>
			</g>
			<g transform="translate(190.27, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.9</text>
			</g>
			<g transform="translate(244.64, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.10</text>
			</g>
			<g transform="translate(299, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.11</text>
			</g>
			<g transform="translate(353.36, 0)">
				<line class="line-vertical " x1="0" x2="0" y1="146" y2="-6" style="stroke: rgb(218, 218, 218);">
				</line>
				<text x="0" y="150" dy="10px" font-size="10px" text-anchor="middle">6.12</text>
			</g>
		</g>
		<g class="dataset-units dataset-line dataset-0" transform="">
			<path class="line-graph-path" d=<?php echo $str_Cinf; ?> style="stroke: rgb(127, 127, 127); fill: none;">
			</path>
			<g data-point-index="0" transform=<?php echo $T200606_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="0" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200606?></text>
			</g>
			<g data-point-index="1" transform=<?php echo $T200607_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="1" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200607?></text>
			</g>
			<g data-point-index="2" transform=<?php echo $T200608_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="2" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200608?></text>
			</g>
			<g data-point-index="3" transform=<?php echo $T200609_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="3" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200609?></text>
			</g>
			<g data-point-index="4" transform=<?php echo $T200610_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="4" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200610?></text>
			</g>
			<g data-point-index="5" transform=<?php echo $T200611_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="5" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200611?></text>
			</g>
			<g data-point-index="6" transform=<?php echo $T200612_tran;?>>
				<circle style="fill: #7F7F7F" data-point-index="6" cx="0" cy="0" r="8"></circle>
				<text class="data-point-value" x="0" y="0" dy="-13px" font-size="10px" text-anchor="middle"><?php echo $T200612?></text>
			</g>
		</g>
	</g>
</svg>
</div>