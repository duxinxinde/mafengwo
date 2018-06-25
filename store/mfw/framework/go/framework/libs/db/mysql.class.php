<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 08/01/2018
 * Time: 11:54 PM
 */
class mysql{
    public $link;
    //定义统一的查询link;用于mysqli的查询操作
    public function err($error){
        die("当前的这条指令有错，具体是：".$error);
        //统一定义报错格式;并执行die语句终止函数
    }

    public function connect($config){
//       $dbconfig = $config['dbconfig'];
       $username = $config['username'];
       $password = $config['password'];
       $host = $config['host'];
       $dbname = $config['dbname'];
       $port = $config['port'];
       $charset = $config['charset'];
       //将config中关于数据库的信息赋给相对应变量
       if ($this->link = mysqli_connect($host,$username,$password,$dbname)){
            mysqli_query($this->link,'SET NAMES '.$charset);
       }
       //若为mysql类中$link赋值成功，执行设置数据库编码操作（全局变量$link同时也发生变化）
       else{
           $this->err(mysqli_error($this->link));
           return;
       }
       //否则执行mysqli_error()函数输出错误详细信息
    }

    public function query($sql){
        $link = $this->link;
       if(!($query = mysqli_query($link,$sql))){
           //判断$query是否查询成功 类似于swift里的 if let a = b { ... }
           $this->err(mysqli_error($link));
           return;
           //如果失败报错并返回
       }
       else{
           return $query;
           //否则查询成功返回整条指令
       }
    }

    public function fetch_All($query){
        while (($item=mysqli_fetch_assoc($query)) != false){
                $list[] = $item;
                //数组中不断添加查找到的元素
        }
        return isset($list)?$list:"";
        //如果遍历到结果，则返回，否则返回三目运算符最右侧空String
    }

    public function fetch_singleton($query){
        $item = mysqli_fetch_assoc($query);
        return isset($item)?$item:"";
        //单例查找 和上边差不多
    }

    public function insert($table,$arr){
        //对insert进数据库的封装
        foreach ($arr as $k => $v){
            $keyArr[] = "`".$k."`";
            //数据库对单引号敏感，这里使用键盘左上角的引号
            $valArr[] = "'".$v."'";
            //这里使用implode将数组转换为字符串
            $keys = implode(",",$keyArr);
            $vals = implode(",",$valArr);
        }
        $sql = "insert into ".$table." (".$keys.") values (".$vals.")";
//        echo $sql;
        $this->query($sql);
    }

    public function update($table,$arr,$where){
        foreach ($arr as $k=>$v){
            $keyAndValueArr[] =  "`".$k."`=`".$v."`";
        }
        $keyAndValues = implode(",",$keyAndValueArr);
        $sql = "update ".$table." set ".$keyAndValues." where ".$where;
        $this->query($sql);
    }

    public function del($table,$where){
        $sql = "delete from ".$table." where ".$where;
        $this->query($sql);
    }



}