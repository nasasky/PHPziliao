<?php
 	//载入基本类和饼图类
 	require_once ('jpgraph/jpgraph.php');
 	require_once ('jpgraph/jpgraph_pie.php');
 	require_once ('jpgraph/jpgraph_pie3d.php');
 	//初始数据,$browser表示浏览器，$percent则对应各浏览器的百分比
 	$browser = array('IE','Chrome','Firefox','Safari','other');
 	$percent = array(58,18,16,6,2);
 	//实例化PieGraph对象
 	$graph = new PieGraph(400,300);
 	//设置标题
 	$graph->title->Set("浏览器市场份额一览图"); //设置标题内容
 	$graph->title->SetFont(FF_SIMSUN,FS_BOLD,18); //设置字体类型为中文黑体
 	$graph->title->SetColor("blue"); //设置字体颜色为蓝色
 	$p1 = new PiePlot3D($percent);//实例化PiePlot3D对象
 	$p1->ExplodeSlice(1); //设置第2块（即Chrome）从饼图中分离出来
 	$p1->SetSize(0.4); //设置饼图的大小
 	$p1->SetCenter(0.45,0.42); //设置饼图中心所处位置
 	$p1->SetLegends($browser); //设置说明文字
 	$graph->Add($p1); //将饼图添加到$graph上
 	$graph->Stroke(); //输出
?>
