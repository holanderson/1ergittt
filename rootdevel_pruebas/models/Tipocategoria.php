<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipocategoria".
 *
 * @property integer $id_tipo_categoria
 * @property string $nombre_tcat
 * @property string $desc_tcat
 * @property integer $categoria_id_categoria
 *
 * @property Objeto[] $objetos
 * @property Categoria $categoriaIdCategoria
 */
class Tipocategoria extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipocategoria';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_tcat', 'categoria_id_categoria'], 'required'],
            [['categoria_id_categoria'], 'integer'],
            [['nombre_tcat', 'desc_tcat'], 'string', 'max' => 45],
            [['categoria_id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_id_categoria' => 'id_categoria']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_categoria' => 'Id Tipo Categoria',
            'nombre_tcat' => 'Nombre Tcat',
            'desc_tcat' => 'Desc Tcat',
            'categoria_id_categoria' => 'Categoria Id Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getObjetos()
    {
        return $this->hasMany(Objeto::className(), ['tipo_categoria_id_tipo_categoria' => 'id_tipo_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriaIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'categoria_id_categoria']);
    }
}
