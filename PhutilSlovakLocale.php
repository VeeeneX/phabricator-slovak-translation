<?php

/**
 * Serious, legitimate Slovak locale.
 */
final class PhutilSlovakLocale extends PhutilLocale
{

  public function getLocaleCode()
  {
    return 'sk_SK';
  }

  public function getLocaleName()
  {
    return pht('Slovak');
  }

  public function getFallbackLocaleCode()
  {
    return 'en_US';
  }
}
