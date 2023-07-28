<?php

class Person
{
    // Classの中では、変数をプロパティと呼ぶ。
    public $cname;

    // Classの中では、関数をmethodと呼ぶ。

    public function __construct($cname)
    {
        $this ->cname=$cname;
    }

    public function sayHello()
    {
        echo'こんにちは '. $this->cname.' さん。';
    }
    
}

// インスタンス化する
// $person = new Person($result['name']);
// $person -> sayHello();
