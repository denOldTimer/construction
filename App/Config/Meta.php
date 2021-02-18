<?php
namespace App\Config;

class Meta
{
    public static function getMeta() {
        $meta = array(
            'scMetaCharset'                 =>   'UTF-8',
            'scMetaGoogleSiteVerification'  =>   '------ Google Verification Code -------',
            'scMetaDescription'             =>   'Your Solution in Industrial Packaging',
            'scMetaKeywords'                =>   'Widepack, Packaging, Industrial, Belgium, Europe',
            'scMetaCopyright'               =>   'widepack.be',
            'scMetaOgSiteName'              =>   'Widepack',
            'scMetaOgUrl'                   =>   'http://widepack.be',
            'scMetaOgType'                  =>   'Website',
            'scMetaOgTitle'                 =>    'Home',
            'scMetaOgDescription'           =>    'Your Solution in Industrial Packaging',
            'scMetaOgImage'                 =>    'http://widepack.be/public/img/',
            'scTwitterSite'                 =>    '@YourTwitterHandle',
            'scTwitterDomain'               =>    'Widepack',
            'scPintrestKey'                 =>    '------ Pintrest Verification Code -------'
        );



        return $meta;
    }



}
?>