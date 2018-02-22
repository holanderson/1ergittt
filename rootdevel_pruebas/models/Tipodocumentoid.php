<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipodocumentoid".
 *
 * @property integer $idtipo_documento
 * @property string $tip_documento
 *
 * @property Persona[] $personas
 */
class Tipodocumentoid extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipodocumentoid';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tip_documento'], 'required'],
            [['tip_documento'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idtipo_documento' => 'Idtipo Documento',
            'tip_documento' => 'Tip Documento',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonas()
    {
        return $this->hasMany(Persona::className(), ['tipo_documento_id_idtipo_documento' => 'idtipo_documento']);
    }
}
