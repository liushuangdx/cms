<?php
/**
 * 后台整体架构控制器
 * 13-5-8 下午9:33 
 */
class IndexController extends Controller{
    /**
     * @return array action filters
     */
    public function filters()
    {
        return array(
                'accessControl', // perform access control for CRUD operations
                'postOnly + delete', // we only allow deletion via POST request
        );
    }
    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                        'actions'=>array('index','form','login'),
                        'users'=>array('*'),
                ),
                array('deny',  // deny all users
                        'users'=>array('*'),
                ),
        );
    }
    
    public function actionIndex(){
        $this ->render('index');
    }
    
    public function actionForm(){
        $this ->render('form');
    }
    
    public function actionLogin(){
        $this ->renderPartial('login');
    }
    
}