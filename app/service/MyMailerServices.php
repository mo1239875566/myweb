<?php

namespace App\Service;   // 让类具有唯一性
use App\contract\Mailer;   //使用容器
class MyMailerServices implements Mailer {      //提供邮件服务的提供者实现邮件服务，须要到容器中拿
    function send($append){
        dd("send mail".$append);
    }
    function receive($append){
        dd("receive mail".$append);
    }
    function test(){
        dd("test test");
    }
}