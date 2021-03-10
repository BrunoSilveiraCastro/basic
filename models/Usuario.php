<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%usuario}}".
 *
 * @property int $usuario_id
 * @property string|null $nome_completo
 * @property string|null $nome_usuario
 * @property string|null $email
 * @property string|null $senha
 * @property string|null $token
 * @property string|null $criacao
 *
 * @property Curso[] $cursos
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%usuario}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['criacao'], 'safe'],
            [['nome_completo'], 'string', 'max' => 150],
            [['nome_usuario', 'senha'], 'string', 'max' => 40],
            [['email', 'token'], 'string', 'max' => 120],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'nome_completo' => 'Nome Completo',
            'nome_usuario' => 'Nome Usuario',
            'email' => 'Email',
            'senha' => 'Senha',
            'token' => 'Token',
            'criacao' => 'Criacao',
        ];
    }

    /**
     * Gets query for [[Cursos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCursos()
    {
        return $this->hasMany(Curso::className(), ['usuario_id' => 'usuario_id']);
    }
}
