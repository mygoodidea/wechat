<?php
namespace Overtrue\Wechat;

class Alias
{
    protected static $aliases = [
               'WechatAuth'            => 'Overtrue\\Wechat\\Auth',
               'WechatCard'            => 'Overtrue\\Wechat\\Card',
               'WechatException'       => 'Overtrue\\Wechat\\Exception',
               'WechatGroup'           => 'Overtrue\\Wechat\\Group',
               'WechatImage'           => 'Overtrue\\Wechat\\Image',
               'WechatJs'              => 'Overtrue\\Wechat\\Js',
               'WechatMedia'           => 'Overtrue\\Wechat\\Media',
               'WechatMenu'            => 'Overtrue\\Wechat\\Menu',
               'WechatMenuItem'        => 'Overtrue\\Wechat\\MenuItem',
               'WechatMessage'         => 'Overtrue\\Wechat\\Message',
               'WechatBaseMessage'     => 'Overtrue\\Wechat\\Messages\\BaseMessage',
               'WechatImageMessage'    => 'Overtrue\\Wechat\\Messages\\Image',
               'WechatLinkMessage'     => 'Overtrue\\Wechat\\Messages\\Link',
               'WechatLocationMessage' => 'Overtrue\\Wechat\\Messages\\Location',
               'WechatMusicMessage'    => 'Overtrue\\Wechat\\Messages\\Music',
               'WechatNewsMessage'     => 'Overtrue\\Wechat\\Messages\\News',
               'WechatNewsMessageItem' => 'Overtrue\\Wechat\\Messages\\NewsItem',
               'WechatTextMessage'     => 'Overtrue\\Wechat\\Messages\\Text',
               'WechatTransferMessage' => 'Overtrue\\Wechat\\Messages\\Transfer',
               'WechatVideoMessage'    => 'Overtrue\\Wechat\\Messages\\Video',
               'WechatVoiceMessage'    => 'Overtrue\\Wechat\\Messages\\Voice',
               'WechatQRCode'          => 'Overtrue\\Wechat\\QRCode',
               'WechatServer'          => 'Overtrue\\Wechat\\Server',
               'WechatStaff'           => 'Overtrue\\Wechat\\Staff',
               'WechatStore'           => 'Overtrue\\Wechat\\Store',
               'WechatUrl'             => 'Overtrue\\Wechat\\Url',
               'WechatUser'            => 'Overtrue\\Wechat\\User',
    ];

    /**
     * 是否已经注册过
     *
     * @var boolean
     */
    protected static $registered = false;

    /**
     * 注册别名
     *
     * @return void
     */
    public static function register()
    {
        if (!self::$registered) {
            foreach (self::$aliases as $alias => $class) {
                class_alias($class, $alias);
            }

            self::$registered = true;
        }
    }
}