<?php

use Page\Acceptance\LoginPage;

class LoginPageCest
{
    // tests
    public function checkPageTitle(AcceptanceTester $I)
    {
        $I->wantToTest("Page Title");
        $I->amOnPage('/');
        $I->canSeeInTitle(LoginPage::$pageTitle);
    }

    public function checkAllLinks(AcceptanceTester $I)
    {
        $I->wantToTest("All links in the Login Page");
        $I->canSeeElement(LoginPage::$privacyPolicyLink);
        $I->canSeeElement(LoginPage::$serviceAgreementsLink);
        $I->canSeeElement(LoginPage::$recommendationsLink);
        $I->canSeeElement(LoginPage::$liveChatLink);
        $I->canSeeElement(LoginPage::$language1);
        $I->canSeeElement(LoginPage::$language2);
        $I->canSeeElement(LoginPage::$language3);
        $I->canSeeElement(LoginPage::$language4);
        $I->canSeeElement(LoginPage::$language5);
    }

    public function checkLinksinModal(AcceptanceTester $I)
    {
        $I->wantToTest("All links in the Modal");
        $I->canSeeElement(LoginPage::$expandLink);
        $I->click(LoginPage::$expandLink);
        $I->wait(5);
        $I->canSeeElement(LoginPage::$modalLanguage1);
        $I->canSeeElement(LoginPage::$modalLanguage2);
        $I->canSeeElement(LoginPage::$modalLanguage3);
        $I->canSeeElement(LoginPage::$modalLanguage4);
        $I->canSeeElement(LoginPage::$modalLanguage5);
        $I->canSeeElement(LoginPage::$modalLanguage6);
        $I->canSeeElement(LoginPage::$modalLanguage7);
        $I->canSeeElement(LoginPage::$modalLanguage8);
        $I->canSeeElement(LoginPage::$modalLanguage9);
        $I->canSeeElement(LoginPage::$closeModal);
        $I->click(LoginPage::$closeModal);
    }

    public function checkAllLabels(AcceptanceTester $I)
    {
        $I->wantToTest("All labels in the Login Page");
        $I->canSeeElement(LoginPage::$logInLabel);
        $I->canSeeElement(LoginPage::$emailPhoneNumberLabel);
        $I->canSeeElement(LoginPage::$emailPhoneNumberFormatLabel);
        $I->canSeeElement(LoginPage::$noAccountLabel);
    }
    public function checkAllImagesAndBanner(AcceptanceTester $I)
    {
        $I->wantToTest("All images and banners in the Login Page");
        $I->canSeeElement(LoginPage::$logo);
        $I->canSeeElement(LoginPage::$bannerTitle);
        $I->canSeeElement(LoginPage::$bannerDescription);
    }
    public function checkAppStoreLinks(AcceptanceTester $I)
    {
        $I->wantToTest("External App store links");
        $I->canSeeElement(LoginPage::$appStoreLink);
        $I->canSeeElement(LoginPage::$googleplaylink);

    }
    public function InputFieldsTest(AcceptanceTester $I)
    {   $I->wantToTest("Email/Phone Number field and Log in button");
        $I->canSeeElement(LoginPage::$phoneNumberEmail);
        $I->canSeeElement(LoginPage::$loginButton);
    }

    public function InvalidEmailTest(AcceptanceTester $I)
    {
        $I->wantToTest("Login with invalid email");
        $I->fillField(LoginPage::$phoneNumberEmail,$_ENV['EMAIL_ID']);
        $I->click(LoginPage::$loginButton);
        $I->waitForElement(LoginPage::$invalidUser,20);
        $I->canSeeElement(LoginPage::$invalidUser);
    }

    public function InvalidPhoneNumberTest(AcceptanceTester $I)
    {
        $I->wantToTest("Login with invalid phone number");
        $I->clearField(LoginPage::$phoneNumberEmail);
        $I->fillField(LoginPage::$phoneNumberEmail,$_ENV['PHONE_NUMBER']);
        $I->click(LoginPage::$loginButton);
        $I->waitForElement(LoginPage::$invalidUser,20);
        $I->canSeeElement(LoginPage::$invalidUser);
    }
    public function checkRegistration(AcceptanceTester $I)
    {
        $I->canSeeElement(LoginPage::$registerNowLink);
        $I->click(LoginPage::$registerNowLink);
        $I->canSeeElement(LoginPage::$accountRegistration);
    }
}
