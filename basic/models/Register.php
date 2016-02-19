<?php
namespace app\models;

use yii\base\Model;

class Register extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'register';
    }
	
	 public function attributeLabels()
    {
        return 
		[
            'nameFirst' => 'First Name',
            'nameLast' 	=> 'Last Name',
            'address1' 	=> 'Address 1',
            'address2' 	=> 'Address 2',
			'city' 		=> 'City',
			'state' 	=> 'State',
			'zip' 		=> 'Zip (5 or 9 Digits)',
			'country' 	=> 'Country (Only US)',
        ];
    }
	
	public function rules()
	{
		return 
		[
			[['nameFirst', 'nameLast', 'address1', 'city', 'state', 'zip', 'country'], 'required'],
			[['nameFirst', 'nameLast', 'address1', 'address2', 'city', 'state', 'zip', 'country'], 'safe'],
			['zip', 'validateZip'],
			['country', 'validateCountry'],

		];
	}
	
	public function validateCountry($attribute, $params)
    {
        if (!in_array($this->$attribute, ['US'])) 
		{
            $this->addError($attribute, 'Country must be "US"');
        }
    }
	
	public function validateZip($attribute, $params)
    {
        if (strlen($this->$attribute) != 5 && strlen($this->$attribute) != 9) 
		{
            $this->addError($attribute, 'Zip length must be 5 of 9');
        }
		if (!is_numeric($this->$attribute)) 
		{
			$this->addError($attribute, 'Zip must be only numbers');
        }
    }
}
?>