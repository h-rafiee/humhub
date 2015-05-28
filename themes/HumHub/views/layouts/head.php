<?php $ver = HVersion::VERSION; ?>

<!-- start: CSS -->

<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/datepicker.css?ver=<?php echo $ver; ?>" rel="stylesheet">

<?php
    if(Yii::app()->language=="fa_ir"){
?>

<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme.rtl.css?ver=<?php echo $ver; ?>" rel="stylesheet">
<?php
    }else{
?>
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/theme.css?ver=<?php echo $ver; ?>" rel="stylesheet">
<?php
    }
?>


<link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/flatelements.css?ver=<?php echo $ver; ?>" rel="stylesheet">
<link href="<?php echo Yii::app()->theme->baseUrl; ?>/font/open_sans/open-sans.css" rel="stylesheet">
<!-- end: CSS -->

