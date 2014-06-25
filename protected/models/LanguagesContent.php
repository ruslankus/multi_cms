<?php

/**
 * This is the model class for table "languages_content".
 *
 * The followings are the available columns in table 'languages_content':
 * @property integer $language_id
 * @property integer $language
 * @property string $label
 * @property string $prefix
 *
 * The followings are the available model relations:
 * @property Languages $language0
 */
class LanguagesContent extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'languages_content';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('language_id, language, label, prefix', 'required'),
			array('language_id, language', 'numerical', 'integerOnly'=>true),
			array('label', 'length', 'max'=>50),
			array('prefix', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('language_id, language, label, prefix', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'language0' => array(self::BELONGS_TO, 'Languages', 'language'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'language_id' => 'Language',
			'language' => 'Language',
			'label' => 'Label',
			'prefix' => 'Prefix',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('language_id',$this->language_id);
		$criteria->compare('language',$this->language);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('prefix',$this->prefix,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return LanguagesContent the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
