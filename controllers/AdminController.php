<?php

namespace humhub\modules\note\controllers;

class AdminController extends \humhub\modules\admin\components\Controller
{

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'acl' => [
                'class' => \humhub\components\behaviors\AccessControl::className(),
                'adminOnly' => true
            ]
        ];
    }

    /**
     * Render admin only page
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

}

