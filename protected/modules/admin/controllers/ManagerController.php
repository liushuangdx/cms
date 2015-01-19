<?php
/**
 * 后台管理员登录控制器
 * 13-5-8 下午9:03 
 */
class ManagerController extends Controller{
    
    public $layout='application.modules.admin.views.layouts.mycolumn';
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
                array('allow',  // allow all users to perform 'index' and 'view' actions
                        'actions'=>array('login','logout'),
                        'users'=>array('*'),
                ),
                array('allow', // allow authenticated user to perform 'create' and 'update' actions
                        'actions'=>array('index','view','create','update','admin','delete'),
                        'users'=>array('@'),
                ),
                array('deny',  // deny all users
                        'users'=>array('*'),
                ),
        );
    }
    
    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view',array(
                'model'=>$this->loadModel($id),
        ));
    }
    
    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model=new Manager;
    
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
    
        if(isset($_POST['Manager']))
        {
            $model->attributes=$_POST['Manager'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->manager_id));
        }
    
        $this->render('create',array(
                'model'=>$model,
        ));
    }
    
    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model=$this->loadModel($id);
    
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
    
        if(isset($_POST['Manager']))
        {
            $model->attributes=$_POST['Manager'];
            if($model->save())
                $this->redirect(array('view','id'=>$model->manager_id));
        }
    
        $this->render('update',array(
                'model'=>$model,
        ));
    }
    
    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();
    
        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if(!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }
    
    /**
     * Lists all models.
     */
    public function actionIndex()
    {
        $dataProvider=new CActiveDataProvider('Manager');
        $this->render('index',array(
                'dataProvider'=>$dataProvider,
        ));
    }
    
    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model=new Manager('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Manager']))
            $model->attributes=$_GET['Manager'];
    
        $this->render('admin',array(
                'model'=>$model,
        ));
    }
    
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Manager the loaded model
     * @throws CHttpException
     */
    public function loadModel($id)
    {
        $model=Manager::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }
    
    /**
     * Performs the AJAX validation.
     * @param Manager $model the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if(isset($_POST['ajax']) && $_POST['ajax']==='manager-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    /*
     * 实现用户登录
     */
    public function actionLogin(){
        $login_model = new LoginForm();
        
        if(isset($_POST['LoginForm'])){
            $login_model->attributes = $_POST['LoginForm'];
            
            //用户名和密码(包括真实性)判断validate，持久化session信息login
            if($login_model->validate() &&  $login_model->login())
                $this->redirect('./index.php?r=admin/index/index');
        }
        
        //调用模板
        $this ->renderPartial('login',array('login_model'=>$login_model));
    }
    
    /*
     * 管理员退出系统
     */
    public function actionLogout(){
        //删除session变量
        Yii::app()->session->clear();
        
        //删除服务器session信息
        Yii::app()->session->destroy();
        
        //页面重定向到登录页面
        $this -> redirect('./index.php?r=admin/manager/login');
    }
    
}