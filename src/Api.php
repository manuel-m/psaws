<?php
/**
 * Created by PhpStorm.
 * User: dr
 * Date: 30/04/16
 * Time: 14:33
 */

namespace Psaws;


class Api
{
public function metas(){
    $j = array(
        "name" => "psaws",
        "version" => "0.1",
    );
    echo json_encode($j);


}

}