<?php
namespace App\contract;

interface Mailer      //存放邮件的容器    邮件容器中有收发函数//   定义发送邮件所需要的方法
{
    function send($append);
    function receive($append);
}