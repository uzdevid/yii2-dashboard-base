<?php

namespace uzdevid\dashboard\base\web;

use uzdevid\abac\AccessControl;

class Controller extends \yii\web\Controller {
    public function behaviors() {
        $behaviors = parent::behaviors();

        if (class_exists(AccessControl::class)) {
            $behaviors['AccessControl'] = [
                'class' => AccessControl::class
            ];
        }

        return $behaviors;
    }
}