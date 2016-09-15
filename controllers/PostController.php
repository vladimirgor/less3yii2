<?php
/**
 * Created by PhpStorm.
 * User: Владимир
 * Date: 13.09.2016
 * Time: 22:05
 */

namespace app\controllers;


class PostController extends AppController {

    public function actionIndex($name='Guest'){
        $hello = 'Hello, world!';
        $hi = 'Hi!';
        //return $this->render('index',['var'=>$hello, 'hi'=>$hi]);
        return $this->render('index',compact('hello','hi','name'));
    }
    public function actionTest(){
    return $this->render('test');
    }
    public function actionHello(){
        return $this->render('hello');
    }
}