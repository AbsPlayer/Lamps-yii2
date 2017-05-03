<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>

        <table width="100%" height="100%"  border="0" cellpadding="0" cellspacing="0">
            <tr valign="top">
                <td>&nbsp;</td>
                <td width="750"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top"><img src="images/cvbg.jpg" width="749" height="14"></td>
                        </tr>
                    </table>      <table width="100%" height="87"  border="0" cellpadding="0" cellspacing="0">
                        <tr>
                            <td width="26%" height="87" valign="top"><a href='<?= Url::home(); ?>' title='На главную страницу сайта'><img src="images/logo.jpg" width="197" height="87" border="0"></a></td>
                            <td width="73%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td height="87"><img src="images/spacer.gif" width="4" height="1"></td>
                                        <td width="100%" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td width="41%" height="25"><img src="images/spacer.gif" width="148" height="1"></td>
                                                    <td width="59%">&nbsp;</td>
                                                </tr>
                                            </table>
                                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td><img src="images/hr.jpg" width="360" height="18"></td>
                                                </tr>
                                            </table>
                                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td background="images/hr2.jpg"><img src="images/hr2.jpg" width="100%" height="4"></td>
                                                </tr>
                                            </table>
                                            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                <tr>
                                                    <td height="39" valign="top" bgcolor="DDDCD9"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                            <tr>
                                                                <td width="53%" height="39"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                            <td width="22%" align="right"><img src="images/map1.jpg" width="19" height="14"></td>
                                                                            <td width="78%"><strong><div style="text-transform:uppercase; color: #534741;"><a href="<?= Url::home(); ?>" style="color:#534741" title='На главную страницу сайта'>В начало</a></div>
                                                                                </strong></td>
                                                                        </tr>
                                                                    </table></td>
                                                                <td width="47%"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                                                                        <tr>
                                                                          <td width="22%" align="right"><!--<img src="images/dsf.jpg" width="19" height="14"></td>
                                                                          <td width="78%"><strong>
                                                                            <div style="text-transform:uppercase; color: #534741;"><a href="#" style="color:#534741" title='Список торговых марок. Пока не работает!'>Торговые марки</a></div>

                                                                          </strong>-->&nbsp;</td>
                                                                        </tr>
                                                                    </table></td>
                                                            </tr>
                                                        </table></td>
                                                </tr>
                                            </table></td>
                                        <td><img src="images/spacer.gif" width="4" height="1"></td>
                                    </tr>
                                </table></td>
                            <td width="1%" valign="top" background="images/cfg.jpg" style="background-repeat:no-repeat">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                    <tr>
                                        <td><img src="images/spacer.gif" width="183" height="1"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top"><img src="images/spacer.gif" width="1" height="3"></td>
                        </tr>
                    </table>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="21%" height="449" valign="top">

                                <?=
                                $this->render('left', [
                                    'categories' => $this->context->data['categories'],
                                    'categories_acc' => $this->context->data['categories_acc'],
                                ]);
                                ?>

                            </td>
                            <td width="46%" valign="top">

                                <?= $content ?>

                            </td>
                            <td width="33%" valign="top">

                                <?=
                                $this->render('topsale', [
                                    'topsales' => $this->context->data['topsales'],
                                ]);
                                ?>

                            </td>
                        </tr>
                    </table>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td valign="top"><img src="images/da.jpg" width="749" height="12"></td>
                        </tr>
                    </table>
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td height="37">&nbsp;&nbsp;<!--<a href="#">О нас</a> | -->Copyright &copy; <?= date('Y') ?> <strong>me.</strong></td>
                        </tr>
                    </table></td>
                <td>&nbsp;</td>
            </tr>
        </table>

        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>