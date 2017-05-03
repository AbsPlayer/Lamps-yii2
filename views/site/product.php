<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Люстры и светильники';
$this->params['topsales'] = $topsales;
$this->params['categories'] = $categories;
$this->params['categories_acc'] = $categories_acc;

?>

<table width="370" border="0" cellspacing="1" cellpadding="1">
    <tr>
        <td>
            <img src='<?= Html::encode("{$product->ProductBigImage}"); ?>' width='360'>
        </td>
    </tr>
    <tr>
        <td align='left'>
            <strong>Наименование: </strong> <?= Html::encode("{$product->ProductName}"); ?>
        </td>
    </tr>
    <tr>
        <td align='left'>
            <strong>Описание:</strong> <?= Html::encode("{$product->ProductInfo}") ?>
        </td>
    </tr>
    <tr>
        <td align='center'>
            <strong><font size=+2><?= Html::encode("{$product->ProductPrice}") ?> грн.</font></strong>
        </td>
    </tr>
</table>
<table width="370" border="0" cellspacing="1" cellpadding="1">
    <tr>
        <td>
            <?php foreach ($products_in_cat as $product_in_cat): ?>
                <a href='<?= Url::to([  'product',
                                        'pid' => Html::encode("{$product_in_cat->ProductID}"),
                                        'cid' => Html::encode("{$product_in_cat->CategoryID}"),
                                        ]); ?>' style='text-decoration:none'><strong>
                        <?= Html::encode("{$product_in_cat->ProductName}") ?>
                    </strong></a> |
            <?php endforeach; ?>
        </td>
    </tr>
</table>