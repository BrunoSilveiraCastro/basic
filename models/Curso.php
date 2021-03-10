<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%curso}}".
 *
 * @property int $curso_id
 * @property int $id
 * @property int $usuario_id
 * @property string|null $titulo
 * @property string|null $descricao
 * @property string|null $tipo
 * @property string|null $requerimentos
 * @property string|null $media_salarial
 * @property string|null $cidade
 * @property string|null $endereco
 * @property string|null $email_contato
 * @property string|null $telefone_contato
 * @property int|null $publicacao_id
 * @property string|null $data_curso
 *
 * @property Categoria $id0
 * @property Usuario $usuario
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%curso}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'usuario_id'], 'required'],
            [['id', 'usuario_id', 'publicacao_id'], 'default', 'value' => null],
            [['id', 'usuario_id', 'publicacao_id'], 'integer'],
            [['descricao'], 'string'],
            [['data_curso'], 'safe'],
            [['titulo', 'tipo', 'requerimentos', 'media_salarial'], 'string', 'max' => 120],
            [['cidade'], 'string', 'max' => 70],
            [['endereco'], 'string', 'max' => 110],
            [['email_contato', 'telefone_contato'], 'string', 'max' => 130],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => Categoria::className(), 'targetAttribute' => ['id' => 'id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'curso_id' => 'Curso ID',
            'id' => 'ID',
            'usuario_id' => 'Usuario ID',
            'titulo' => 'Titulo',
            'descricao' => 'Descricao',
            'tipo' => 'Tipo',
            'requerimentos' => 'Requerimentos',
            'media_salarial' => 'Media Salarial',
            'cidade' => 'Cidade',
            'endereco' => 'Endereco',
            'email_contato' => 'Email Contato',
            'telefone_contato' => 'Telefone Contato',
            'publicacao_id' => 'Publicacao ID',
            'data_curso' => 'Data Curso',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(Categoria::className(), ['id' => 'id']);
    }

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::className(), ['usuario_id' => 'usuario_id']);
    }
}
