<?php

namespace app\controllers;

use Yii;
use app\models\Prostorija;
use app\models\ProstorijaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * NovaProstorijaController implements the CRUD actions for Prostorija model.
 */
class SoapController extends Controller
{


    /**
     * Returns a list of behaviors that this component should behave as.
     *
     * @return array
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout', 'signup'],
                'rules' => [
                    [
                        'allow' => true,
                    ],
                ],
            ],
        ];
    }

public function actions()
{
    return [
        'servis' => ['class' => 'mongosoft\soapserver\Action'],
    ];
}

/**
* Vraca trenutnu temperaturu u navedenom gradu
*
* @param string $grad Ime grada
* @return string
* @soap
*/
public function getTemperatura($grad)
{
    return 'Temperatura u gradu ' . $grad . ' je 23C.';
}

}
