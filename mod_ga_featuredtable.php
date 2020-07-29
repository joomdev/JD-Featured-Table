<?php
/*------------------------------------------------------------------------
# mod_ga_featuredtable - JD Featured Table for Joomla 3.x v1.9.3
# ------------------------------------------------------------------------
# author    JoomDev (Formerly GraphicAholic)
# copyright Copyright (C) 2020 Joomdev, Inc. All rights reserved.
# @license - GNU General Public License version 2 or later
# Websites: https://www.joomdev.com
-------------------------------------------------------------------------*/
// No direct access
defined('_JEXEC') or die('Restricted access');
$LiveSite = JURI::base();
$document = JFactory::getDocument();
$useOverrides = $params->get('useOverrides');
if ($useOverrides=="1") {
$document->addStyleSheet(JURI::root().'modules/mod_ga_featuredtable/css/ga_featuredtableOverride.css');
}else{
$document->addStyleSheet(JURI::root().'modules/mod_ga_featuredtable/css/ga_featuredtable.css');
}
$enableColumnOne		= $params->get('enableColumnOne');
$enableColumnTwo		= $params->get('enableColumnTwo');
$enableColumnThree	= $params->get('enableColumnThree');
$enableColumnFour		= $params->get('enableColumnFour');
$enableColumnFive		= $params->get('enableColumnFive');
$enableColumnSix		= $params->get('enableColumnSix');
$featuredColumnOne		= $params->get('featuredColumnOne');
if($featuredColumnOne == "0") $featuredColumnOne = "";
if($featuredColumnOne == "1") $featuredColumnOne = "ga-current";
$featuredColumnTwo		= $params->get('featuredColumnTwo');
if($featuredColumnTwo == "0") $featuredColumnTwo = "";
if($featuredColumnTwo == "1") $featuredColumnTwo = "ga-current";
$featuredColumnThree		= $params->get('featuredColumnThree');
if($featuredColumnThree == "0") $featuredColumnThree = "";
if($featuredColumnThree == "1") $featuredColumnThree = "ga-current";
$featuredColumnFour		= $params->get('featuredColumnFour');
if($featuredColumnFour == "0") $featuredColumnFour = "";
if($featuredColumnFour == "1") $featuredColumnFour = "ga-current";
$featuredColumnFive		= $params->get('featuredColumnFive');
if($featuredColumnFive == "0") $featuredColumnFive = "";
if($featuredColumnFive == "1") $featuredColumnFive = "ga-current";
$featuredColumnSix		= $params->get('featuredColumnSix');
if($featuredColumnSix == "0") $featuredColumnSix = "";
if($featuredColumnSix == "1") $featuredColumnSix = "ga-current";
$enableColumnOneRowOneTooltip		= $params->get('enableColumnOneRowOneTooltip');
if($enableColumnOneRowOneTooltip == "0") $enableColumnOneRowOneTooltip = "";
if($enableColumnOneRowOneTooltip == "1") $enableColumnOneRowOneTooltip = "ga-has-tooltip";
$enableColumnOneRowTwoTooltip		= $params->get('enableColumnOneRowTwoTooltip');
if($enableColumnOneRowTwoTooltip == "0") $enableColumnOneRowTwoTooltip = "";
if($enableColumnOneRowTwoTooltip == "1") $enableColumnOneRowTwoTooltip = "ga-has-tooltip";
$enableColumnOneRowThreeTooltip		= $params->get('enableColumnOneRowThreeTooltip');
if($enableColumnOneRowThreeTooltip == "0") $enableColumnOneRowThreeTooltip = "";
if($enableColumnOneRowThreeTooltip == "1") $enableColumnOneRowThreeTooltip = "ga-has-tooltip";
$enableColumnOneRowFourTooltip		= $params->get('enableColumnOneRowFourTooltip');
if($enableColumnOneRowFourTooltip == "0") $enableColumnOneRowFourTooltip = "";
if($enableColumnOneRowFourTooltip == "1") $enableColumnOneRowFourTooltip = "ga-has-tooltip";
$enableColumnOneRowFiveTooltip		= $params->get('enableColumnOneRowFiveTooltip');
if($enableColumnOneRowFiveTooltip == "0") $enableColumnOneRowFiveTooltip = "";
if($enableColumnOneRowFiveTooltip == "1") $enableColumnOneRowFiveTooltip = "ga-has-tooltip";
$enableColumnTwoRowOneTooltip		= $params->get('enableColumnTwoRowOneTooltip');
if($enableColumnTwoRowOneTooltip == "0") $enableColumnTwoRowOneTooltip = "";
if($enableColumnTwoRowOneTooltip == "1") $enableColumnTwoRowOneTooltip = "ga-has-tooltip";
$enableColumnTwoRowTwoTooltip		= $params->get('enableColumnTwoRowTwoTooltip');
if($enableColumnTwoRowTwoTooltip == "0") $enableColumnTwoRowTwoTooltip = "";
if($enableColumnTwoRowTwoTooltip == "1") $enableColumnTwoRowTwoTooltip = "ga-has-tooltip";
$enableColumnTwoRowThreeTooltip		= $params->get('enableColumnTwoRowThreeTooltip');
if($enableColumnTwoRowThreeTooltip == "0") $enableColumnTwoRowThreeTooltip = "";
if($enableColumnTwoRowThreeTooltip == "1") $enableColumnTwoRowThreeTooltip = "ga-has-tooltip";
$enableColumnTwoRowFourTooltip		= $params->get('enableColumnTwoRowFourTooltip');
if($enableColumnTwoRowFourTooltip == "0") $enableColumnTwoRowFourTooltip = "";
if($enableColumnTwoRowFourTooltip == "1") $enableColumnTwoRowFourTooltip = "ga-has-tooltip";
$enableColumnTwoRowFiveTooltip		= $params->get('enableColumnTwoRowFiveTooltip');
if($enableColumnTwoRowFiveTooltip == "0") $enableColumnTwoRowFiveTooltip = "";
if($enableColumnTwoRowFiveTooltip == "1") $enableColumnTwoRowFiveTooltip = "ga-has-tooltip";
$enableColumnThreeRowOneTooltip		= $params->get('enableColumnThreeRowOneTooltip');
if($enableColumnThreeRowOneTooltip == "0") $enableColumnThreeRowOneTooltip = "";
if($enableColumnThreeRowOneTooltip == "1") $enableColumnThreeRowOneTooltip = "ga-has-tooltip";
$enableColumnThreeRowTwoTooltip		= $params->get('enableColumnThreeRowTwoTooltip');
if($enableColumnThreeRowTwoTooltip == "0") $enableColumnThreeRowTwoTooltip = "";
if($enableColumnThreeRowTwoTooltip == "1") $enableColumnThreeRowTwoTooltip = "ga-has-tooltip";
$enableColumnThreeRowThreeTooltip		= $params->get('enableColumnThreeRowThreeTooltip');
if($enableColumnThreeRowThreeTooltip == "0") $enableColumnThreeRowThreeTooltip = "";
if($enableColumnThreeRowThreeTooltip == "1") $enableColumnThreeRowThreeTooltip = "ga-has-tooltip";
$enableColumnThreeRowFourTooltip		= $params->get('enableColumnThreeRowFourTooltip');
if($enableColumnThreeRowFourTooltip == "0") $enableColumnThreeRowFourTooltip = "";
if($enableColumnThreeRowFourTooltip == "1") $enableColumnThreeRowFourTooltip = "ga-has-tooltip";
$enableColumnThreeRowFiveTooltip		= $params->get('enableColumnThreeRowFiveTooltip');
if($enableColumnThreeRowFiveTooltip == "0") $enableColumnThreeRowFiveTooltip = "";
if($enableColumnThreeRowFiveTooltip == "1") $enableColumnThreeRowFiveTooltip = "ga-has-tooltip";
$enableColumnFourRowOneTooltip		= $params->get('enableColumnFourRowOneTooltip');
if($enableColumnFourRowOneTooltip == "0") $enableColumnFourRowOneTooltip = "";
if($enableColumnFourRowOneTooltip == "1") $enableColumnFourRowOneTooltip = "ga-has-tooltip";
$enableColumnFourRowTwoTooltip		= $params->get('enableColumnFourRowTwoTooltip');
if($enableColumnFourRowTwoTooltip == "0") $enableColumnFourRowTwoTooltip = "";
if($enableColumnFourRowTwoTooltip == "1") $enableColumnFourRowTwoTooltip = "ga-has-tooltip";
$enableColumnFourRowThreeTooltip		= $params->get('enableColumnFourRowThreeTooltip');
if($enableColumnFourRowThreeTooltip == "0") $enableColumnFourRowThreeTooltip = "";
if($enableColumnFourRowThreeTooltip == "1") $enableColumnFourRowThreeTooltip = "ga-has-tooltip";
$enableColumnFourRowFourTooltip		= $params->get('enableColumnFourRowFourTooltip');
if($enableColumnFourRowFourTooltip == "0") $enableColumnFourRowFourTooltip = "";
if($enableColumnFourRowFourTooltip == "1") $enableColumnFourRowFourTooltip = "ga-has-tooltip";
$enableColumnFourRowFiveTooltip		= $params->get('enableColumnFourRowFiveTooltip');
if($enableColumnFourRowFiveTooltip == "0") $enableColumnFourRowFiveTooltip = "";
if($enableColumnFourRowFiveTooltip == "1") $enableColumnFourRowFiveTooltip = "ga-has-tooltip";
$enableColumnFiveRowOneTooltip		= $params->get('enableColumnFiveRowOneTooltip');
if($enableColumnFiveRowOneTooltip == "0") $enableColumnFiveRowOneTooltip = "";
if($enableColumnFiveRowOneTooltip == "1") $enableColumnFiveRowOneTooltip = "ga-has-tooltip";
$enableColumnFiveRowTwoTooltip		= $params->get('enableColumnFiveRowTwoTooltip');
if($enableColumnFiveRowTwoTooltip == "0") $enableColumnFiveRowTwoTooltip = "";
if($enableColumnFiveRowTwoTooltip == "1") $enableColumnFiveRowTwoTooltip = "ga-has-tooltip";
$enableColumnFiveRowThreeTooltip		= $params->get('enableColumnFiveRowThreeTooltip');
if($enableColumnFiveRowThreeTooltip == "0") $enableColumnFiveRowThreeTooltip = "";
if($enableColumnFiveRowThreeTooltip == "1") $enableColumnFiveRowThreeTooltip = "ga-has-tooltip";
$enableColumnFiveRowFourTooltip		= $params->get('enableColumnFiveRowFourTooltip');
if($enableColumnFiveRowFourTooltip == "0") $enableColumnFiveRowFourTooltip = "";
if($enableColumnFiveRowFourTooltip == "1") $enableColumnFiveRowFourTooltip = "ga-has-tooltip";
$enableColumnFiveRowFiveTooltip		= $params->get('enableColumnFiveRowFiveTooltip');
if($enableColumnFiveRowFiveTooltip == "0") $enableColumnFiveRowFiveTooltip = "";
if($enableColumnFiveRowFiveTooltip == "1") $enableColumnFiveRowFiveTooltip = "ga-has-tooltip";
$enableColumnSixRowOneTooltip		= $params->get('enableColumnSixRowOneTooltip');
if($enableColumnSixRowOneTooltip == "0") $enableColumnSixRowOneTooltip = "";
if($enableColumnSixRowOneTooltip == "1") $enableColumnSixRowOneTooltip = "ga-has-tooltip";
$enableColumnSixRowTwoTooltip		= $params->get('enableColumnSixRowTwoTooltip');
if($enableColumnSixRowTwoTooltip == "0") $enableColumnSixRowTwoTooltip = "";
if($enableColumnSixRowTwoTooltip == "1") $enableColumnSixRowTwoTooltip = "ga-has-tooltip";
$enableColumnSixRowThreeTooltip		= $params->get('enableColumnSixRowThreeTooltip');
if($enableColumnSixRowThreeTooltip == "0") $enableColumnSixRowThreeTooltip = "";
if($enableColumnSixRowThreeTooltip == "1") $enableColumnSixRowThreeTooltip = "ga-has-tooltip";
$enableColumnSixRowFourTooltip		= $params->get('enableColumnSixRowFourTooltip');
if($enableColumnSixRowFourTooltip == "0") $enableColumnSixRowFourTooltip = "";
if($enableColumnSixRowFourTooltip == "1") $enableColumnSixRowFourTooltip = "ga-has-tooltip";
$enableColumnSixRowFiveTooltip		= $params->get('enableColumnSixRowFiveTooltip');
if($enableColumnSixRowFiveTooltip == "0") $enableColumnSixRowFiveTooltip = "";
if($enableColumnSixRowFiveTooltip == "1") $enableColumnSixRowFiveTooltip = "ga-has-tooltip";
$coinHilite		= $params->get('coinHilite');
?>

<!--[if IE 6]>
<html id="ie6" lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="en-US">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="en-US">
<!--<![endif]-->
<meta charset="UTF-8" />

<?php if ($useOverrides=="1"): ?>
<style type="text/css">
	.ga-1col .ga-col-wrap { width:<?php echo $params->get('oneColumnOverride') ?> !important; }
	.ga-2cols .ga-col-wrap { width:<?php echo $params->get('twoColumnOverride') ?> !important; }
	.ga-3cols .ga-col-wrap { width:<?php echo $params->get('threeColumnOverride') ?> !important; }
	.ga-4cols .ga-col-wrap { width:<?php echo $params->get('fourColumnOverride') ?> !important; }
	.ga-5cols .ga-col-wrap { width:<?php echo $params->get('fiveColumnOverride') ?> !important; }
	.ga-6cols .ga-col-wrap { width:<?php echo $params->get('sixColumnOverride') ?> !important; }
</style>
<?php endif ; ?>

<div class="entry-content">
<div class="ga ga-clearfix ga-space-<?php echo $params->get('columnSpacing') ?>p ga-enlarge-current <?php echo $params->get('NumberOfColumns') ?>" style="margin-bottom:<?php echo $params->get('bottomMargin') ?>px">
<?php if ($enableColumnOne == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnOne ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnOneLocation') ?> ga-<?php echo $params->get('ColumnOneRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('columnOneTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceOneHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('columnOnePrice') ?><small><?php echo $params->get('columnOneTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('columnOnePrice') ?><small><?php echo $params->get('columnOneTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceOneHilite')  == "0") { ?>
<div><?php echo $params->get('columnOnePrice') ?><small><?php echo $params->get('columnOneTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('columnOneRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnOneRowOneTooltip ?> <?php echo $params->get('C1R1hi') ?>"><?php echo $params->get('columnOneRowOnedata') ?>
<?php if ($params->get('enableColumnOneRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnOneRowOneTooltip') ?></span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnOneRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnOneRowTwoTooltip ?> <?php echo $params->get('C1R2hi') ?>"><?php echo $params->get('columnOneRowTwodata') ?>
<?php if ($params->get('enableColumnOneRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnOneRowTwoTooltip') ?></span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnOneRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnOneRowThreeTooltip ?> <?php echo $params->get('C1R3hi') ?>"><?php echo $params->get('columnOneRowThreedata') ?>
<?php if ($params->get('enableColumnOneRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnOneRowThreeTooltip') ?></span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnOneRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnOneRowFourTooltip ?> <?php echo $params->get('C1R4hi') ?>"><?php echo $params->get('columnOneRowFourdata') ?>
<?php if ($params->get('enableColumnOneRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnOneRowFourTooltip') ?></span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnOneRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnOneRowFiveTooltip ?> <?php echo $params->get('C1R5hi') ?>"><?php echo $params->get('columnOneRowFivedata') ?>
<?php if ($params->get('enableColumnOneRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnOneRowFiveTooltip') ?></span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('columnOneButtondata')  != "") { ?>
<a href="<?php echo $params->get('columnOneURL') ?>" class="<?php echo $params->get('buttonOneEffect') ?> ga-btn-medium" target="<?php echo $params->get('columnOneWindow') ?>"><?php echo $params->get('columnOneButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<?php if ($enableColumnTwo == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnTwo ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnTwoLocation') ?> ga-<?php echo $params->get('ColumnTwoRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('columnTwoTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceTwoHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('columnTwoPrice') ?><small><?php echo $params->get('columnTwoTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('columnTwoPrice') ?><small><?php echo $params->get('columnTwoTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceTwoHilite')  == "0") { ?>
<div><?php echo $params->get('columnTwoPrice') ?><small><?php echo $params->get('columnTwoTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('columnTwoRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnTwoRowOneTooltip ?> <?php echo $params->get('C2R1hi') ?>"><?php echo $params->get('columnTwoRowOnedata') ?>
<?php if ($params->get('enableColumnTwoRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnTwoRowOneTooltip') ?>
</span><?php } ?>
</li><?php } ?>
<?php if ($params->get('columnTwoRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnTwoRowTwoTooltip ?>  <?php echo $params->get('C2R2hi') ?>"><?php echo $params->get('columnTwoRowTwodata') ?>
<?php if ($params->get('enableColumnTwoRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnTwoRowTwoTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnTwoRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnTwoRowThreeTooltip ?> <?php echo $params->get('C2R3hi') ?>"><?php echo $params->get('columnTwoRowThreedata') ?>
<?php if ($params->get('enableColumnTwoRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnTwoRowThreeTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnTwoRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnTwoRowFourTooltip ?>  <?php echo $params->get('C2R4hi') ?>"><?php echo $params->get('columnTwoRowFourdata') ?>
<?php if ($params->get('enableColumnTwoRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnTwoRowFourTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnTwoRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnTwoRowFiveTooltip ?> <?php echo $params->get('C2R5hi') ?>"><?php echo $params->get('columnTwoRowFivedata') ?>
<?php if ($params->get('enableColumnTwoRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnTwoRowFiveTooltip') ?>
</span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('columnTwoButtondata')  != "") { ?>
<a href="<?php echo $params->get('columnTwoURL') ?>" class="<?php echo $params->get('buttonTwoEffect') ?> ga-btn-medium" target="<?php echo $params->get('columnTwoWindow') ?>"><?php echo $params->get('columnTwoButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<?php if ($enableColumnThree == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnThree ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnThreeLocation') ?> ga-<?php echo $params->get('ColumnThreeRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('columnThreeTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceThreeHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('columnThreePrice') ?><small><?php echo $params->get('columnThreeTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('columnThreePrice') ?><small><?php echo $params->get('columnThreeTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceThreeHilite')  == "0") { ?>
<div><?php echo $params->get('columnThreePrice') ?><small><?php echo $params->get('columnThreeTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('columnThreeRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnThreeRowOneTooltip ?> <?php echo $params->get('C3R1hi') ?>"><?php echo $params->get('columnThreeRowOnedata') ?>
<?php if ($params->get('enableColumnThreeRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnThreeRowOneTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnThreeRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnThreeRowTwoTooltip ?> <?php echo $params->get('C3R2hi') ?>"><?php echo $params->get('columnThreeRowTwodata') ?>
<?php if ($params->get('enableColumnThreeRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnThreeRowTwoTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnThreeRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnThreeRowThreeTooltip ?> <?php echo $params->get('C3R3hi') ?>"><?php echo $params->get('columnThreeRowThreedata') ?>
<?php if ($params->get('enableColumnThreeRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnThreeRowThreeTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnThreeRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnThreeRowFourTooltip ?> <?php echo $params->get('C3R4hi') ?>"><?php echo $params->get('columnThreeRowFourdata') ?>
<?php if ($params->get('enableColumnThreeRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnThreeRowFourTooltip') ?>
</span><?php } ?>
<?php } ?></li>

<?php if ($params->get('columnThreeRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnThreeRowFiveTooltip ?> <?php echo $params->get('C3R5hi') ?>"><?php echo $params->get('columnThreeRowFivedata') ?>
<?php if ($params->get('enableColumnThreeRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnThreeRowFiveTooltip') ?>
</span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('columnThreeButtondata')  != "") { ?>
<a href="<?php echo $params->get('columnThreeURL') ?>" class="<?php echo $params->get('buttonThreeEffect') ?> ga-btn-medium" target="<?php echo $params->get('columnThreeWindow') ?>"><?php echo $params->get('columnThreeButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<?php if ($enableColumnFour == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnFour ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnFourLocation') ?> ga-<?php echo $params->get('ColumnFourRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('columnFourTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceFourHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('columnFourPrice') ?><small><?php echo $params->get('columnFourTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('columnFourPrice') ?><small><?php echo $params->get('columnFourTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceFourHilite')  == "0") { ?>
<div><?php echo $params->get('columnFourPrice') ?><small><?php echo $params->get('columnFourTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('columnFourRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnFourRowOneTooltip ?> <?php echo $params->get('C4R1hi') ?>"><?php echo $params->get('columnFourRowOnedata') ?>
<?php if ($params->get('enableColumnFourRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFourRowOneTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFourRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnFourRowTwoTooltip ?> <?php echo $params->get('C4R2hi') ?>"><?php echo $params->get('columnFourRowTwodata') ?>
<?php if ($params->get('enableColumnFourRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFourRowTwoTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFourRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnFourRowThreeTooltip ?> <?php echo $params->get('C4R3hi') ?>"><?php echo $params->get('columnFourRowThreedata') ?>
<?php if ($params->get('enableColumnFourRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFourRowThreeTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFourRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnFourRowFourTooltip ?> <?php echo $params->get('C4R4hi') ?>"><?php echo $params->get('columnFourRowFourdata') ?>
<?php if ($params->get('enableColumnFourRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFourRowFourTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFourRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnFourRowFiveTooltip ?> <?php echo $params->get('C4R5hi') ?>"><?php echo $params->get('columnFourRowFivedata') ?>
<?php if ($params->get('enableColumnFourRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFourRowFiveTooltip') ?>
</span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('columnFourButtondata')  != "") { ?>
<a href="<?php echo $params->get('columnFourURL') ?>" class="<?php echo $params->get('buttonFourEffect') ?> ga-btn-medium" target="<?php echo $params->get('columnFourWindow') ?>"><?php echo $params->get('columnFourButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<?php if ($enableColumnFive == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnFive ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnFiveLocation') ?> ga-<?php echo $params->get('ColumnFiveRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('columnFiveTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceFiveHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('columnFivePrice') ?><small><?php echo $params->get('columnFiveTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('columnFivePrice') ?><small><?php echo $params->get('columnFiveTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceFiveHilite')  == "0") { ?>
<div><?php echo $params->get('columnFivePrice') ?><small><?php echo $params->get('columnFiveTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('columnFiveRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnFiveRowOneTooltip ?> <?php echo $params->get('C5R1hi') ?>"><?php echo $params->get('columnFiveRowOnedata') ?>
<?php if ($params->get('enableColumnFiveRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFiveRowOneTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFiveRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnFiveRowTwoTooltip ?> <?php echo $params->get('C5R2hi') ?>"><?php echo $params->get('columnFiveRowTwodata') ?>
<?php if ($params->get('enableColumnFiveRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFiveRowTwoTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFiveRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnFiveRowThreeTooltip ?> <?php echo $params->get('C5R3hi') ?>"><?php echo $params->get('columnFiveRowThreedata') ?>
<?php if ($params->get('enableColumnFiveRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFiveRowThreeTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFiveRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnFiveRowFourTooltip ?> <?php echo $params->get('C5R4hi') ?>"><?php echo $params->get('columnFiveRowFourdata') ?>
<?php if ($params->get('enableColumnFiveRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFiveRowFourTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('columnFiveRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnFiveRowFiveTooltip ?> <?php echo $params->get('C5R5hi') ?>"><?php echo $params->get('columnFiveRowFivedata') ?>
<?php if ($params->get('enableColumnFiveRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('columnFiveRowFiveTooltip') ?>
</span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('columnFiveButtondata')  != "") { ?>
<a href="<?php echo $params->get('columnFiveURL') ?>" class="<?php echo $params->get('buttonFiveEffect') ?> ga-btn-medium" target="<?php echo $params->get('columnFiveWindow') ?>"><?php echo $params->get('columnFiveButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<?php if ($enableColumnSix == "1") : ?>
<div class="ga-col-wrap <?php echo $featuredColumnSix ?>">
<div class="ga-col <?php echo $params->get('FeatureTableStyle') ?> ga-<?php echo $params->get('dropShadowEffect') ?>">
<div class="ga-ribbon-<?php echo $params->get('ColumnSixLocation') ?> ga-<?php echo $params->get('ColumnSixRibbon') ?>"></div>
<div class="ga-header">
<div class="ga-header-top">
<?php echo $params->get('ColumnSixTitle') ?>
<div class="ga-coin-wrap">
<?php if ($params->get('priceSixHilite')  == "1") { ?>
<div class="ga-coinf">
<div><?php echo $params->get('ColumnSixPrice') ?><small><?php echo $params->get('ColumnSixTag') ?></small></div>
</div>
<div class="ga-coinb">
<div><?php echo $params->get('ColumnSixPrice') ?><small><?php echo $params->get('ColumnSixTag') ?></small></div>
</div>
<?php } ?>
<?php if ($params->get('priceSixHilite')  == "0") { ?>
<div><?php echo $params->get('ColumnSixPrice') ?><small><?php echo $params->get('ColumnSixTag') ?></small></div>
<?php } ?>
</div>
</div>
<div class="ga-header-bottom"></div>
</div>
<ul class="ga-body">
<?php if ($params->get('ColumnSixRowOnedata')  != "") { ?>
<li class="<?php echo $enableColumnSixRowOneTooltip ?> <?php echo $params->get('C6R1hi') ?>"><?php echo $params->get('ColumnSixRowOnedata') ?>
<?php if ($params->get('enableColumnSixRowOneTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('ColumnSixRowOneTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('ColumnSixRowTwodata')  != "") { ?>
<li class="<?php echo $enableColumnSixRowTwoTooltip ?> <?php echo $params->get('C6R2hi') ?>"><?php echo $params->get('ColumnSixRowTwodata') ?>
<?php if ($params->get('enableColumnSixRowTwoTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('ColumnSixRowTwoTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('ColumnSixRowThreedata')  != "") { ?>
<li class="<?php echo $enableColumnSixRowThreeTooltip ?> <?php echo $params->get('C6R3hi') ?>"><?php echo $params->get('ColumnSixRowThreedata') ?>
<?php if ($params->get('enableColumnSixRowThreeTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('ColumnSixRowThreeTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('ColumnSixRowFourdata')  != "") { ?>
<li class="<?php echo $enableColumnSixRowFourTooltip ?> <?php echo $params->get('C6R4hi') ?>"><?php echo $params->get('ColumnSixRowFourdata') ?>
<?php if ($params->get('enableColumnSixRowFourTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('ColumnSixRowFourTooltip') ?>
</span><?php } ?>
<?php } ?></li>
<?php if ($params->get('ColumnSixRowFivedata')  != "") { ?>
<li class="<?php echo $enableColumnSixRowFiveTooltip ?> <?php echo $params->get('C6R5hi') ?>"><?php echo $params->get('ColumnSixRowFivedata') ?>
<?php if ($params->get('enableColumnSixRowFiveTooltip')  == "1") { ?>
<span class="ga-tooltip"style="width:<?php echo $params->get('tooltipSize') ?>px; background:<?php echo $params->get('tooltipBackgroundColor') ?>; border-color:<?php echo $params->get('tooltipBackgroundColor') ?>; color:<?php echo $params->get('tooltipTextColor') ?>" ><?php echo $params->get('ColumnSixRowFiveTooltip') ?>
</span><?php } ?>
<?php } ?></li>
</ul>
<div class="ga-footer">
<?php if ($params->get('ColumnSixButtondata')  != "") { ?>
<a href="<?php echo $params->get('ColumnSixURL') ?>" class="<?php echo $params->get('buttonSixEffect') ?> ga-btn-medium" target="<?php echo $params->get('ColumnSixWindow') ?>"><?php echo $params->get('ColumnSixButtondata') ?><?php } ?></a>
</div>
</div>
</div>
<?php endif ; ?>
<link rel='stylesheet' id='ga_featuredtableExtraCSS'  href='<?php echo $LiveSite ?>modules/mod_ga_featuredtable/css/ga_featuredtableExtraCSS.css?ver=1.3' type='text/css' media='all' />