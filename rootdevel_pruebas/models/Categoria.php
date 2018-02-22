<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categoria".
 *
 * @property integer $id_categoria
 * @property string $nombre_cat
 * @property string $desc_cat
 *
 * @property Objeto[] $objetos
 * @property Tipocategoria[] $tipocategorias
 */
class Categoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_cat'], 'required'],
            [['nombre_cat', 'desc_cat'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_categoria' => 'Id Categoria',
            'nombre_cat' => 'Nombre Cat',
            'desc_cat' => 'Desc Cat',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjetos()
    {
        return $this->hasMany(Objeto::className(), ['categoria_id_categoria' => 'id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipocategorias()
    {
        return $this->hasMany(Tipocategoria::className(), ['categoria_id_categoria' => 'id_categoria']);
    }
}
