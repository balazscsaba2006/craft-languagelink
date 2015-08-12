<?php
namespace Craft;

class LanguageLinkPlugin extends BasePlugin
{

	public function getName()
	{
		return 'Language Link';
	}

	public function getVersion()
	{
		return '1.1.0';
	}

	public function getDeveloper()
	{
		return 'Double Secret Agency';
	}

	public function getDeveloperUrl()
	{
		return 'https://github.com/lindseydiloreto/craft-languagelink';
		//return 'http://doublesecretagency.com';
	}

	public function addTwigExtension()
	{
		Craft::import('plugins.languagelink.twigextensions.LanguageLinkTwigExtension');
		return new LanguageLinkTwigExtension();
	}

}
