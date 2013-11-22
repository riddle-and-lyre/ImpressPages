<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>
<footer class="clearfix">
    <div class="col_12">
        <?php echo ipSlot('Ip.string', array('id' => 'themeName', 'tag' => 'p', 'default' => _s('Theme "Blank"', 'theme-Blank'), 'class' => 'left')) ?>
        <?php
        $_slogan = sprintf(__('Drag & drop with %s', 'theme-Blank'), '<a href="http://www.impresspages.org">' . __('ImpressPages CMS', 'theme-Blank') . '</a>');
        ?>
        <?php echo ipSlot('Ip.text', array ('id' => 'slogan', 'tag' => 'div', 'default' => $_slogan, 'class' => 'right')); ?>
    </div>
</footer>
</div>
<?php
    ipAddJQuery();
    //TODOX incompatible with new jquery ipAddThemeAsset('colorbox/jquery.colorbox.js');
    //ipAddThemeAsset('site.js');
    ipPrintJavascript();
?>

//TODOX remove this test image
<?php echo ipSlot('Ip.image', array(
        'id' => 'test2',
        'default' => 'http://cdn.impresspages.org/ip_themes/impresspages/img/impresspages_cms_logo.png',
        'width' => 200,
        'height' => 300,
        'class' => 'super'

    )); ?>
</body>
</html>
