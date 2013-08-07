<?php
/**
 * Launch stages
 */
class Stages
{
    private static $_stage = 0;

    public static $characters = array(
        0 => 'admin',
        1 => 'client',
        2 => 'designer',
        3 => 'courier',
        4 => 'painter',
        5 => 'marketer',
        6 => 'guard',
        7 => 'secretary',
        8 => 'manager',
        9 => 'artdirector',
        10 => 'typographe',
        11 => 'granny'
    );

    public static function init()
    {
        self::$_stage = Yii::app()->params['currentStage'];
    }

    public static function getRandomLogo($assetsUrl)
    {
        $randomLogoId = rand(0, self::$_stage);
        return CHtml::image($assetsUrl . "/images/logos/logo_" . $randomLogoId . ".png", '', array('class' => 'logo'));
    }

    public static function getStage() {
        return self::$_stage;
    }
}