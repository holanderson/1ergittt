<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Tipousuario".
 *
 * @property integer $id_Tipousuario
 * @property string $rol
 *
 * @property Usuario[] $usuarios
 */
class Tipousuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Tipousuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rol'], 'required'],
            [['rol'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Tipousuario' => 'Id  Tipousuario',
            'rol' => 'Rol',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['id_tipousuario' => 'id_Tipousuario']);
    }
}
