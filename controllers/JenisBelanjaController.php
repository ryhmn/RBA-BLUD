<?php

namespace app\controllers;

use app\models\JenisBelanja;
use app\models\JenisBelanjaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * JenisBelanjaController implements the CRUD actions for JenisBelanja model.
 */
class JenisBelanjaController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all JenisBelanja models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new JenisBelanjaSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single JenisBelanja model.
     * @param int $jenis_belanja_id Jenis Belanja ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($jenis_belanja_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($jenis_belanja_id),
        ]);
    }

    /**
     * Creates a new JenisBelanja model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new JenisBelanja();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'jenis_belanja_id' => $model->jenis_belanja_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing JenisBelanja model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $jenis_belanja_id Jenis Belanja ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($jenis_belanja_id)
    {
        $model = $this->findModel($jenis_belanja_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'jenis_belanja_id' => $model->jenis_belanja_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing JenisBelanja model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $jenis_belanja_id Jenis Belanja ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($jenis_belanja_id)
    {
        $this->findModel($jenis_belanja_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the JenisBelanja model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $jenis_belanja_id Jenis Belanja ID
     * @return JenisBelanja the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($jenis_belanja_id)
    {
        if (($model = JenisBelanja::findOne(['jenis_belanja_id' => $jenis_belanja_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
