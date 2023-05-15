<?php

namespace uzdevid\dashboard\base\db;

use uzdevid\dashboard\modify\log\behaviors\ModifyLogBehavior;

class ActiveRecord extends \yii\db\ActiveRecord {
    public function behaviors(): array {
        $behaviors = parent::behaviors();

        if (class_exists(ModifyLogBehavior::class)) {
            $behaviors['ModifyLogBehavior'] = [
                'class' => ModifyLogBehavior::class,
                'afterInsert' => true,
                'afterDelete' => true,
                'afterUpdate' => true,
                'attributes' => $this->attributes(),
            ];
        }

        return $behaviors;
    }
}