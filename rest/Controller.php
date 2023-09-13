<?php

namespace uzdevid\dashboard\base\rest;

use uzdevid\abac\AccessControl;

class Controller extends \yii\rest\Controller {
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