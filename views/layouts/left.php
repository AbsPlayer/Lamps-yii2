<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<table width="197"  border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td background="images/s1.jpg" width="197" height="22" style="padding-left:20; text-transform:uppercase">Светильники</td>
    </tr>
<?php foreach ($categories as $category): ?>
        <tr>
            <td height="22" background="images/g1.jpg" style="background-repeat:no-repeat "><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="16%" align="right" valign="top"><img src="images/a1.jpg" width="11" height="12"></td>
                        <td width="84%"><a href="<?= Url::to(['category',
                                                                'cid' => Html::encode("{$category->CategoryID}")]);
                                                                ?>" style="color:#362F2D;text-decoration:none "><?= Html::encode("{$category->CategoryName}"); ?></a></td>
                    </tr>
                </table>
            </td>
        </tr>
<?php endforeach; ?>
    <tr>
        <td height="22" valign="center" background="images/s1.jpg" style="background-repeat:no-repeat; padding-left:20; text-transform:uppercase">Сопутствующие товары</td>
    </tr>
<?php foreach ($categories_acc as $category_acc): ?>
        <tr>
            <td height="22" background="images/g1.jpg" style="background-repeat:no-repeat "><table width="100%"  border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td width="16%" align="right" valign="top"><img src="images/a1.jpg" width="11" height="12"></td>
                        <td width="84%"><a href="<?= Url::to(['category',
                                                                'cid' => Html::encode("{$category_acc->CategoryID}")]); ?>" style="color:#362F2D;text-decoration:none "><?= Html::encode("{$category_acc->CategoryName}") ?></a></td>
                    </tr>
                </table></td>
        </tr>
<?php endforeach; ?>
    <tr>
        <td height="4" valign="top" style="background-repeat:no-repeat "><img src="images/spacer.gif" width="1" height="4"></td>
    </tr>
    <tr>
        <td background="images/banner.jpg" style="background-repeat:no-repeat" align="center" height="92">
            Контакты:<br>5-555-555-55-55<br>1-111-111-11-11<br><a href="mailto:lamps_don@ukr.net">lamps_don@ukr.net</a>
        </td>
    </tr>
    <tr>
        <td align="center" height="52">
            <!-- HotLog -->

            <script type="text/javascript" language="javascript">
                hotlog_js = "1.0";
                hotlog_r = "" + Math.random() + "&s=494675&im=134&r=" + escape(document.referrer) + "&pg=" +
                        escape(window.location.href);
                document.cookie = "hotlog=1; path=/";
                hotlog_r += "&c=" + (document.cookie ? "Y" : "N");
            </script>
            <script type="text/javascript" language="javascript1.1">
                hotlog_js = "1.1";
                hotlog_r += "&j=" + (navigator.javaEnabled() ? "Y" : "N")
            </script>
            <script type="text/javascript" language="javascript1.2">
                hotlog_js = "1.2";
                hotlog_r += "&wh=" + screen.width + 'x' + screen.height + "&px=" +
                        (((navigator.appName.substring(0, 3) == "Mic")) ?
                                screen.colorDepth : screen.pixelDepth)</script>
            <script type="text/javascript" language="javascript1.3">hotlog_js = "1.3"</script>
            <script type="text/javascript" language="javascript">hotlog_r += "&js=" + hotlog_js;
                document.write("<a href='http://click.hotlog.ru/?494675' target='_top'><img " +
                        " src='http://hit25.hotlog.ru/cgi-bin/hotlog/count?" +
                        hotlog_r + "&' border=0 width=88 height=31 alt=HotLog><\/a>")
            </script>
            <noscript>
            <a href="http://click.hotlog.ru/?494675" target="_top">
                <img src="http://hit25.hotlog.ru/cgi-bin/hotlog/count?s=494675&amp;im=134" border="0"
                     width="88" height="31" alt="HotLog"></a>
            </noscript>

            <!-- /SpyLOG  -->
        </td>
    </tr>
    <tr>
        <td align="center" height="52">
            <!-- SpyLOG -->
            <script src="http://tools.spylog.ru/counter_cv.js" id="spylog_code" type="text/javascript" counter="1027615" part="" track_links="ext" page_level="0">
            </script>
            <noscript>
            <a href="http://u10276.15.spylog.com/cnt?cid=1027615&f=3&p=0" target="_blank">
                <img src="http://u10276.15.spylog.com/cnt?cid=1027615&p=0" alt="SpyLOG" border="0" width="88" height="31"></a>
            </noscript>
            <!--/ SpyLOG -->
        </td>
    </tr>
</table>