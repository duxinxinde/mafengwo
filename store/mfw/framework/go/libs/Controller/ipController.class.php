<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 2018/2/5
 * Time: 3:37 PM
 */

class ipController
{
    public function getip($field=''){
        $ip = file_get_contents('http://pv.sohu.com/cityjson?ie=utf-8');
        preg_match('/{.+}/i', $ip, $m);

        $array = json_decode($m[0]);
        if(is_object($array)) {
            $array = (array)$array;
        } else if(is_array($array)) {
            foreach($array as $key=>$value) {
                $array[$key] = object_array($value);
            }
        }

        $id = $array["cid"];
        $model = initModel('currentCity');
        $name = $model->currentCity($id);
        $list = [$name,$id];
        $this->jo($list);

    }


    public function jo($data){
        echo json_encode($data);
    }




}