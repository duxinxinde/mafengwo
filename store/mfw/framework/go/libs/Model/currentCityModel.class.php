<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 2018/2/5
 * Time: 4:03 PM
 */

class currentCityModel
{
    function currentCity($cid){
        $sql = "select * from cities WHERE cityid = '$cid' || provinceid = '$cid';";
        $query = DB::query($sql);
        $item = DB::fetch_singleton($query);
        return $item==''?"北京":mb_substr($item["city"],0,mb_strlen($item['city'],'utf8')-1,"utf-8");
    }

}