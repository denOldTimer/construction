<!DOCTYPE html>
<html lang="<?php echo $scLang; ?>"  prefix="og: http://ogp.me/ns#">
<head>
  <meta charset="<?php echo $scMetaCharset; ?>">
  <meta name="google-site-verification" content="<?php echo $scMetaGoogleSiteVerification; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="Description" content="<?php echo $scMetaDescription; ?>">
  <meta name="Keywords" content="<?php echo $scMetaKeywords; ?>">
  <meta name="Copyright" content="<?php echo $scMetaCopyright; ?>">
  <!--Facebook-->
  <meta property="og:site_name" content="<?php echo $scMetaOgSiteName; ?>">
  <meta property="og:url" content="<?php echo $scMetaOgUrl; ?>">
  <meta property="og:type" content="<?php echo $scMetaOgType; ?>">
  <meta property="og:title" content="<?php echo $scMetaOgTitle; ?> | Widepack.be">
  <meta property="og:description" content="<?php echo $scMetaOgDescription; ?>">
  <!--Next image => SGV file is best scalable-->
  <meta property="og:image" content="<?php echo $scMetaOgImage; ?>.logo.svg">
  <!--Twitter meta-->
  <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:description" content="<?php echo $scMetaDescription; ?>"/>
  <meta name="twitter:title" content="<?php echo $scMetaOgTitle; ?> | Widepack.be"/>
  <meta name="twitter:site" content="<?php echo $scTwitterSite; ?>"/>
  <meta name="twitter:domain" content="<?php echo $scTwitterDomain ?>"/>
  <meta name="twitter:image" content="<?php echo $scMetaOgImage; ?>.logo.png"/>
  <meta name="twitter:creator" content="<?php echo $scTwitterSite; ?>"/>
  <!--Pintrest meta-->
  <meta name="p:domain_verify" content="<?php echo $scPintrestKey; ?>"/>
  <!--Favicon meta-->
  <link rel="apple-touch-icon" sizes="57x57" href="/public/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/public/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/public/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/public/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/public/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/public/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/public/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/public/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/public/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/public/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/public/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/public/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/public/favicon/favicon-16x16.png">
  <link rel="manifest" href="/public/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/public/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">

  <title><?php echo $scTitle; ?> | Widepack.be</title>

  <!--css-->
  <link rel="stylesheet" href="/public/css/app.css">
  <link rel="stylesheet" href="/public/css/<?php echo $scController ?>.css">
</head>
