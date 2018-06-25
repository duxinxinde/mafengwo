<?php
/**
 * Created by PhpStorm.
 * User: snowjujube
 * Date: 2018/2/5
 * Time: 6:14 PM
 */

class currentProductController
{
    function query(){
        $model = initModel('product');
        $data = $model->currentProduct($_GET['pid']);
        $this->jo($data);
    }

    function queryWanted(){
        $model = initModel('product');
        $datas = $model->queryByCityName(isset($_GET["name1"])?$_GET["name1"]:"",isset($_GET["name2"])?$_GET["name2"]:"");
        $this->jo($datas);
    }

    function queryPart(){
        $model = initModel('product');
        $data = $model->currentPart($_GET['part']);
        $this->jo($data);
    }

    public function jo($data){
        echo json_encode($data);
    }


}