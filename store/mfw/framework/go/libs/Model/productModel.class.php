<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 2018/2/5
 * Time: 6:15 PM
 */

class productModel
{
    function currentProduct($pid){
        $sql = "select * from products WHERE pid = '$pid'";
        $query = DB::query($sql);
        $singleton = DB::fetch_singleton($query);
        $maincontent = $singleton["maincontent"];
        $paymentcontent = $singleton["paymentcontent"];
        $mentioncontent = $singleton["mentioncontent"];
        unset($singleton["maincontent"]);
        unset($singleton["paymentcontent"]);
        unset($singleton["mentioncontent"]);
        $cid = $singleton['startid'];
        $sql1 = "select * from cities WHERE cityid = '$cid' || provinceid = '$cid';";
        $query1 = DB::query($sql1);
        $item1 = DB::fetch_singleton($query1);
        array_push($singleton,$maincontent,$paymentcontent,$mentioncontent);
        $singleton['cname'] = $item1["city"]==""?$item1["province"]:$item1["city"];
        return $singleton==""?0:$singleton;
    }

    function currentPart($part){
        $sql = "select * from products WHERE part = '$part'";
        $query = DB::query($sql);
        $products = DB::fetch_All($query);
        return $products==""?0:$products;
    }

    function queryByCityName($name1,$name2){
        $sql = "select * from cities where province like '%{$name1}%' OR city like '%{$name1}%';";
        $query = DB::query($sql);
        $singleton = DB::fetch_singleton($query);
        $startid = $singleton['city']==""?$singleton["provinceid"]:$singleton["cityid"];
        $sql2 = "select * from cities where province like '%{$name2}%' OR city like '%{$name2}%';";
        $query2 = DB::query($sql2);
        $singleton2 = DB::fetch_singleton($query2);
        $endid = $singleton2['city']==""?$singleton2["provinceid"]:$singleton2["cityid"];
        $sql1 = "select * from products WHERE startid = '$startid' OR endid = '$endid'";
        $query1 = DB::query($sql1);
        $datas = DB::fetch_All($query1);
        return isset($datas)?$datas:"";
    }

}