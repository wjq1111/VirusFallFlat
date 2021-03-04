<?php

/**
 * Team:VirusFallFlat
 * Code by 吕明昊
 * Debug人员：吕明昊
 * 获得usershow的数据
**/

namespace frontend\models;

use Yii;
use yii\base\Model;


class DataForm extends Model
{
	public function getData()
	{
		$con = mysqli_connect('localhost', 'root', '', 'virusfallflat');
		$res = ["china_cured" => mysqli_query($con, "SELECT * FROM china_cured"),
				"china_death" => mysqli_query($con, "SELECT * FROM china_death"),
				"china_infected" => mysqli_query($con, "SELECT * FROM china_infected"),
				"country_cured" => mysqli_query($con, "SELECT * FROM country_cured"),
				"country_death" => mysqli_query($con, "SELECT * FROM country_death"),
				"country_infected" => mysqli_query($con, "SELECT * FROM country_infected")];
		return $res;
	}
}