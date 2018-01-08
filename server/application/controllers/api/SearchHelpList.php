<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchHelpList extends CI_Controller {
    public function index() {
      $str = '[
    {
"latitude": 23.099794,
"longitude": 113.324520,
"posDes": "上海市人民广场",
"picUrl": "../../images/bg01.jpg",
"userId": "阿大",
"userUrl": "../../images/img01.jpg",
"srvDistance": 2,
"srvTitle": "求帮忙去快递",
"srvDesc": "如题，求帮忙去快递如题，求帮忙去快递如题，求帮忙去快递如题，求帮忙去快递如题，求帮忙去快递如题，求帮忙去快递如题，求帮忙去快递~谢谢啦",
"srvCost": 500,
"taskId": "00001"
}
]';
        // json_decode($str, false);
echo $str;
return;
    }
}
