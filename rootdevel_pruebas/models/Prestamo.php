<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prestamo".
 *
 * @property integer $id_prestamo
 * @property integer $numero
 * @property string $fecha_prestamo
 * @property string $fecha_devolucion
 * @property integer $cantidad_solicitada
 * @property integer $persona_id_persona
 * @property integer $objeto_id_objeto
 * @property integer $estado_id_estado
 *
 * @property Estado $estadoIdEstado
 * @property Objeto $objetoIdObjeto
 * @property Persona $personaIdPersona
 */
class Prestamo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prestamo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prestamo', 'persona_id_persona', 'objeto_id_objeto', 'estado_id_estado'], 'required'],
            [['id_prestamo', 'numero', 'cantidad_solicitada', 'persona_id_persona', 'objeto_id_objeto', 'estado_id_estado'], 'integer'],
            [['fecha_prestamo', 'fecha_devolucion'], 'string', 'max' => 45],
            [['estado_id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['estado_id_estado' => 'id_estado']],
            [['objeto_id_objeto'], 'exist', 'skipOnError' => true, 'targetClass' => Objeto::className(), 'targetAttribute' => ['objeto_id_objeto' => 'id_objeto']],
            [['persona_id_persona'], 'exist', 'skipOnError' => true, 'targetClass' => Persona::className(), 'targetAttribute' => ['persona_id_persona' => 'id_persona']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_prestamo' => 'Id Prestamo',
            'numero' => 'Numero',
            'fecha_prestamo' => 'Fecha Prestamo',
            'fecha_devolucion' => 'Fecha Devolucion',
            'cantidad_solicitada' => 'Cantidad Solicitada',
            'persona_id_persona' => 'Persona Id Persona',
            'objeto_id_objeto' => 'Objeto Id Objeto',
            'estado_id_estado' => 'Estado Id Estado',
        ];
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
    public function getObjetoIdObjeto()
    {
        return $this->hasOne(Objeto::className(), ['id_objeto' => 'objeto_id_objeto']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPersonaIdPersona()
    {
        return $this->hasOne(Persona::className(), ['id_persona' => 'persona_id_persona']);
    }
}
