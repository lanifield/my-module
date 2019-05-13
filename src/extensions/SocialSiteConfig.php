<?php
/**
 * Add fields for social links to site settings.
 *
 * A list of option fields for popular social media and networking sites.
 *
 * @category   SiteConfigExtension
 * @package    Signify
 * @subpackage Social
 * @author     Lani Field <lani.field@signify.co.nz>
 * @license    https://github.com/lanifield/my-module/blob/master/LICENSE BSD-3-Clause
 * @link       https://github.com/lanifield/my-module
 */

namespace Signify\Social;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

/**
 * @see SilverStripe\SiteConfig
 */
class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'BaiduTiebaLink' => 'Varchar',
        'DeviantArtLink' => 'Varchar',
        'FacebookLink'   => 'Varchar',
        'FlickrLink'     => 'Varchar',
        'InstagramLink'  => 'Varchar',
        'LineLink'       => 'Varchar',
        'LinkedInLink'   => 'Varchar',
        'MeetupLink'     => 'Varchar',
        'MessengerLink'  => 'Varchar',
        'MyspaceLink'    => 'Varchar',
        'PinterestLink'  => 'Varchar',
        'QQLink'         => 'Varchar',
        'QuoraLink'      => 'Varchar',
        'QzoneLink'      => 'Varchar',
        'RedditLink'     => 'Varchar',
        'RenrenLink'     => 'Varchar',
        'SinaWeiboLink'  => 'Varchar',
        'SoundCloudLink' => 'Varchar',
        'TikTokLink'     => 'Varchar',
        'TumblrLink'     => 'Varchar',
        'TwitterLink'    => 'Varchar',
        'VimeoLink'      => 'Varchar',
        'WeChatLink'     => 'Varchar',
        'WhatsAppLink'   => 'Varchar',
        'YouTubeLink'    => 'Varchar',
        'YelpLink'       => 'Varchar',
    ];

    /**
     * Updates the list of fields in the Settings section under a Social tab.
     *
     * @param FieldList $fields The SiteConfig CMS Fields
     *
     * @return void
     */
    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldsToTab(
            'Root.Social', array(
                TextField::create('BaiduTiebaLink'),
                TextField::create('DeviantArtLink', 'DeviantArt Link'),
                TextField::create('FacebookLink'),
                TextField::create('FlickrLink'),
                TextField::create('InstagramLink'),
                TextField::create('LineLink'),
                TextField::create('LinkedInLink', 'LinkedIn Link'),
                TextField::create('MeetupLink'),
                TextField::create('MessengerLink'),
                TextField::create('MyspaceLink'),
                TextField::create('PinterestLink'),
                TextField::create('QQLink', 'QQ Link'),
                TextField::create('QuoraLink'),
                TextField::create('QzoneLink'),
                TextField::create('RedditLink'),
                TextField::create('RenrenLink'),
                TextField::create('SinaWeiboLink'),
                TextField::create('SoundCloudLink', 'SoundCloud Link'),
                TextField::create('TikTokLink'),
                TextField::create('TumblrLink'),
                TextField::create('TwitterLink'),
                TextField::create('VimeoLink'),
                TextField::create('WeChatLink', 'WeChat Link'),
                TextField::create('WhatsAppLink', 'WhatsApp Link'),
                TextField::create('YelpLink'),
                TextField::create('YouTubeLink', 'YouTube Link'),
            )
        );
    }
}
