<?php

namespace uzdevid\dashboard\base\web;

use uzdevid\abac\AccessControl;

class Controller extends \yii\web\Controller {
    public function behaviors() {
        $behaviors = parent::behaviors();

        $behaviors['access'] = [
            'class' => \yii\filters\AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];

        if (class_exists(AccessControl::class)) {
            $behaviors['AccessControl'] = [
                'class' => AccessControl::class
            ];
        }

        return $behaviors;
    }
}