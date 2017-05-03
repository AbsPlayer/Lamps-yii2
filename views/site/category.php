<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Люстры и светильники';

?>

<?php if ($products_in_cat == NULL): ?>


              <table width="370" border="0" cellspacing="1" cellpadding="1"><tr>
                    <td align='center' valign='center'>
                      <strong><font size=+2>В данной категории пока нет товаров!</font></strong>
                    </td>
              </tr></table>
<?php endif; ?>

<table width="120" border="0" cellspacing="1" cellpadding="1">


<?php
//1.Следующие строки кода добавлены по сравнению с lamps-old
    $index = 0;
    $row_close = false;
    $count_columns = 3; // количество столбцов при отображении товаров в категории
?>

<?php foreach ($products_in_cat as $product_in_cat):
    if ($index % $count_columns == 0)
        {
            echo("<tr>");
        }
?>
        <td width='120' height='81' background='images/product_back.jpg' style='background-repeat:no-repeat'>
            <table width="120" border="0" cellspacing="0" cellpadding="0">
                <tr>
                <td width='80' align='center' valign='center'><a href='<?= Url::to([    'product',
                                                                                        'pid' => Html::encode("{$product_in_cat->ProductID}"),
                                                                                        'cid' => Html::encode("{$product_in_cat->CategoryID}")
                                                                                        ]); ?>'><img src='<?= Html::encode("{$product_in_cat->ProductSmallImage}"); ?>' border='0' alt='{$row['ProductName']}' title='<?= Html::encode("{$product_in_cat->ProductName}") ?>'></a>
                    </td>
                    <td width='40' valign='bottom'><strong><?= Html::encode("{$product_in_cat->ProductPrice}") ?> грн.</strong>
                    </td>
                </tr>
            </table>
        </td>
<?php
    $index ++;
    $row_close = false;
?>

<?php endforeach; ?>

<?php
//2.Следующие строки кода добавлены по сравнению с lamps-old
        if ($index % $count_columns == 0)
        {
            echo("</tr>");
            $row_close = true;
        }
        for ($i = $count_columns - 1; $i>0; $i--)
            {
            if ($index == $i)
                {
                for ($j=0; $j>=$count_columns - $i; $j++)
                    {
                        echo("<td width='120'><img src='images/spacer120.gif'></td>");
                    }
                }
            }

        if ($row_close)
        {
            echo("</tr>");
        }
?>

</table>