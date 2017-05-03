<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<table width="100%"  border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td background="images/fe.jpg" height="23" align="center"><div style="text-transform:uppercase; color: #534741; font-size:20">ХИТЫ продаж</div>
        </td>
    </tr>
<?php foreach ($topsales as $topsale): ?>
        <tr>
            <td height="101" valign="top" border="1" style="border-collapse: collapse; border: 1px solid black;">
                <table width='100%' border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width='100%'>
                            <table width="100%" border="0" cellspacing="0" cellpadding="2">
                                <tr>
                                    <td width="80" height="93" align="right"><a href='
                                        <?=
                                        Url::to(['product',
                                            'pid' => Html::encode("{$topsale->ProductID}"),
                                            'cid' => Html::encode("{$topsale->CategoryID}")
                                        ]);
                                        ?>'><img src='<?= Html::encode("{$topsale->ProductSmallImage}"); ?>' alt='<?= Html::encode("{$topsale->ProductName}"); ?>' title='<?= Html::encode("{$topsale->ProductName}"); ?>' width='78' border='0'></a>
                                    </td>
                                    <td valign="bottom" >&nbsp;&nbsp;<span><?= Html::encode("{$topsale->ProductName}"); ?></span><br>
                                        &nbsp;&nbsp;<span>Цена: <?= Html::encode("{$topsale->ProductPrice}"); ?> грн.</span>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
<?php endforeach; ?>
</table>