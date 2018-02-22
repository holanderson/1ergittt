<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "objeto".
 *
 * @property integer $id_objeto
 * @property string $nombre_objeto
 * @property string $descripcion_obj
 * @property integer $cantidad_disponible
 * @property integer $estado_id_estado
 * @property integer $categoria_id_categoria
 * @property integer $tipo_categoria_id_tipo_categoria
 *
 * @property Categoria $categoriaIdCategoria
 * @property Estado $estadoIdEstado
 * @property Tipocategoria $tipoCategoriaIdTipoCategoria
 * @property Prestamo[] $prestamos
 */
class Objeto extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'objeto';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_objeto', 'estado_id_estado', 'categoria_id_categoria', 'tipo_categoria_id_tipo_categoria'], 'required'],
            [['cantidad_disponible', 'estado_id_estado', 'categoria_id_categoria', 'tipo_categoria_id_tipo_categoria'], 'integer'],
            [['nombre_objeto', 'descripcion_obj'], 'string', 'max' => 45],
            [['categoria_id_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['categoria_id_categoria' => 'id_categoria']],
            [['estado_id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id_estado' => 'id_estado']],
            [['tipo_categoria_id_tipo_categoria'], 'exist', 'skipOnError' => true, 'targetClass' => Tipocategoria::className(), 'targetAttribute' => ['tipo_categoria_id_tipo_categoria' => 'id_tipo_categoria']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_objeto' => 'Id Objeto',
            'nombre_objeto' => 'Nombre Objeto',
            'descripcion_obj' => 'Descripcion Obj',
            'cantidad_disponible' => 'Cantidad Disponible',
            'estado_id_estado' => 'Estado Id Estado',
            'categoria_id_categoria' => 'Categoria Id Categoria',
            'tipo_categoria_id_tipo_categoria' => 'Tipo Categoria Id Tipo Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoriaIdCategoria()
    {
        return $this->hasOne(Categoria::className(), ['id_categoria' => 'categoria_id_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstadoIdEstado()
    {
        return $this->hasOne(Estado::className(), ['id_estado' => 'estado_id_estado']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoCategoriaIdTipoCategoria()
    {
        return $this->hasOne(Tipocategoria::className(), ['id_tipo_categoria' => 'tipo_categoria_id_tipo_categoria']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamos()
    {
        return $this->hasMany(Prestamo::className(), ['objeto_id_objeto' => 'id_objeto']);
    }
}
