<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property integer $id_Usuario
 * @property string $nombre_usuario
 * @property string $pass
 * @property string $nombre
 * @property string $apellido
 * @property string $email
 * @property integer $id_tipousuario
 *
 * @property Tipousuario $idTipousuario
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_usuario', 'pass', 'nombre', 'apellido', 'email', 'id_tipousuario'], 'required'],
            [['id_tipousuario'], 'integer'],
            [['nombre_usuario', 'pass', 'nombre', 'apellido', 'email'], 'string', 'max' => 45],
            [['nombre_usuario'], 'unique'],
            [['email'], 'unique'],
            [['id_tipousuario'], 'exist', 'skipOnError' => true, 'targetClass' => Tipousuario::className(), 'targetAttribute' => ['id_tipousuario' => 'id_Tipousuario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_Usuario' => 'Id  Usuario',
            'nombre_usuario' => 'Nombre Usuario',
            'pass' => 'Pass',
            'nombre' => 'Nombre',
            'apellido' => 'Apellido',
            'email' => 'Email',
            'id_tipousuario' => 'Id Tipousuario',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipousuario()
    {
        return $this->hasOne(Tipousuario::className(), ['id_Tipousuario' => 'id_tipousuario']);
    }
}
