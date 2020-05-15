<?php
namespace Page\Acceptance;

class LoginPage
{
    // include url of current page

    public static $pageTitle='Log in to your account';
    public static $logo='//img[@src="/assets/image/logo/logo.svg"]';
    public static $bannerTitle='//h1[@class="login-banner-title"]';
    public static $bannerDescription='//p[@class="login-banner-description"]';
    public static $appStoreLink='//img[@alt="App Store"]';
    public static $googleplaylink='//img[@alt="Google Play"]';
    public static $logInLabel='//div[@class="panel-title"]';
    public static $emailPhoneNumberLabel='//label[@for="userIdentifier"]';
    public static $emailPhoneNumberFormatLabel='//p[@class="help-block"]';
    public static $noAccountLabel='//div[@class="text-center"]/span[1]';
    public static $registerNowLink='//span[@class="text-capitalize"]/a';
    public static $privacyPolicyLink='//ul[@class="list-inline"]/li[1]/a';
    public static $serviceAgreementsLink='//ul[@class="list-inline"]/li[2]/a';
    public static $recommendationsLink='//ul[@class="list-inline"]/li[3]/a';
    public static $liveChatLink='//a[@class="livechatlink"]';
    public static $language1='//ul[@class="list-inline text-capitalize"]/li[1]/a';
    public static $language2='//ul[@class="list-inline text-capitalize"]/li[2]/a';
    public static $language3='//ul[@class="list-inline text-capitalize"]/li[3]/a';
    public static $language4='//ul[@class="list-inline text-capitalize"]/li[4]/a';
    public static $language5='//ul[@class="list-inline text-capitalize"]/li[5]/a';
    public static $expandLink='//i[@class="fa fa-plus"]';
    public static $modalLanguage1='//ul[@class="list-spacious text-capitalize"]/li[1]/a';
    public static $modalLanguage2='//ul[@class="list-spacious text-capitalize"]/li[2]/a';
    public static $modalLanguage3='//ul[@class="list-spacious text-capitalize"]/li[3]/a';
    public static $modalLanguage4='//ul[@class="list-spacious text-capitalize"]/li[4]/a';
    public static $modalLanguage5='//ul[@class="list-spacious text-capitalize"]/li[5]/a';
    public static $modalLanguage6='//ul[@class="list-spacious text-capitalize"]/li[6]/a';
    public static $modalLanguage7='//ul[@class="list-spacious text-capitalize"]/li[7]/a';
    public static $modalLanguage8='//ul[@class="list-spacious text-capitalize"]/li[8]/a';
    public static $modalLanguage9='//ul[@class="list-spacious text-capitalize"]/li[9]/a';
    public static $closeModal='//button[@class="close"]';
    public static $phoneNumberEmail='//input[@id="userIdentifier"]';
    public static $loginButton='//button[@type="submit"]';
    public static $invalidUser='//div[@class="alert alert-danger"]';
    public static $accountRegistration='//span[@id="registration-h1"]';
    /**
     * Declare UI map for this page here. CSS or XPath allowed.
     * public static $usernameField = '#username';
     * public static $formSubmitButton = "#mainForm input[type=submit]";
     */

    /**
     * Basic route example for your current URL
     * You can append any additional parameter to URL
     * and use it in tests like: Page\Edit::route('/123-post');
     */
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
