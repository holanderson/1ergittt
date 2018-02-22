<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id_persona
 * @property string $nombre_persona
 * @property string $apellido_persona
 * @property string $celular
 * @property string $direccion
 * @property integer $tipo_documento_id_idtipo_documento
 * @property integer $numero_doc_id
 *
 * @property Tipodocumentoid $tipoDocumentoIdIdtipoDocumento
 * @property Prestamo[] $prestamos
 */
class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_persona', 'apellido_persona', 'celular', 'direccion', 'tipo_documento_id_idtipo_documento'], 'required'],
            [['tipo_documento_id_idtipo_documento', 'numero_doc_id'], 'integer'],
            [['nombre_persona', 'apellido_persona', 'celular', 'direccion'], 'string', 'max' => 45],
            [['numero_doc_id'], 'unique'],
            [['tipo_documento_id_idtipo_documento'], 'exist', 'skipOnError' => true, 'targetClass' => Tipodocumentoid::className(), 'targetAttribute' => ['tipo_documento_id_idtipo_documento' => 'idtipo_documento']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_persona' => 'Id Persona',
            'nombre_persona' => 'Nombre Persona',
            'apellido_persona' => 'Apellido Persona',
            'celular' => 'Celular',
            'direccion' => 'Direccion',
            'tipo_documento_id_idtipo_documento' => 'Tipo Documento Id Idtipo Documento',
            'numero_doc_id' => 'Numero Doc ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoDocumentoIdIdtipoDocumento()
    {
        return $this->hasOne(Tipodocumentoid::className(), ['idtipo_documento' => 'tipo_documento_id_idtipo_documento']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestamos()
    {
        return $this->hasMany(Prestamo::className(), ['persona_id_persona' => 'id_persona']);
    }
}
