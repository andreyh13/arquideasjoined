<?php

/**
 * @file
 * Default theme implementation to format the simplenews newsletter footer.
 *
 * Copy this file in your theme directory to create a custom themed footer.
 * Rename it to simplenews-newsletter-footer--<tid>.tpl.php to override it for a
 * newsletter using the newsletter term's id.
 *
 * Available variables:
 * - $node: newsletter node object
 * - $language: language object
 * - $key: email key [node|test]
 * - $format: newsletter format [plain|html]
 * - $unsubscribe_text: unsubscribe text
 * - $test_message: test message warning message
 *
 * Available tokens:
 * - [simplenews-unsubscribe-url]: unsubscribe url to be used as link
 * for more tokens: see simplenews_token_list()
 *
 * Note that unsubscribe links are broken in case of test send to a non-subscriber.
 *
 * @see template_preprocess_simplenews_newsletter_footer()
 */
 global $base_url;
?>
<?php if ($format == 'html'): ?>
  <?php if ($key == 'test'): ?>
  <table border="0" cellpadding="0" cellspacing="0" width="580">
    <tr>
      <td style="height: 50px;">&nbsp;</td>
    </tr>
  </table>
  <table  align="center" width="580" cellpadding="10" style="background: #FF3F3F; font-family: Helvetica, Arial, sans-serif; font-size: 16px;">
    <tr>
      <td style="color: #fff; font-size: 18px; text-align:center">
        <?php print $test_message ?>
      </td>
    </tr>
  </table>
  <?php endif ?>
  <table border="0" cellpadding="10" cellspacing="0" width="580">
    <tr>
      <td style="height: 50px;">&nbsp;</td>
    </tr>
    <tr>
      <td>
        <a href="http://www.facebook.com/pages/arquideas/108110022544971" title="Facebook"><img src="<?php print $base_url . '/'. path_to_theme();?>/images/social/icon-facebook.png" alt="Facebook" /></a>
        <a href="http://twitter.com/arquideasnews" title="Twitter"><img src="<?php print $base_url . '/'. path_to_theme();?>/images/social/icon-twitter.png" alt="Twitter" /></a>
        <a href="http://pinterest.com/arquideas/" title="Pinterest"><img src="<?php print $base_url . '/'. path_to_theme();?>/images/social/icon-pinterest.png" alt="Pinterest" /></a>
        <a href="mailto:example@example.com" title="E-mail"><img src="<?php print $base_url . '/'. path_to_theme();?>/images/social/icon-email.png" alt="E-mail" /></a>
      </td>
    </tr>
    <tr>
      <td style="height: 50px;">&nbsp;</td>
    </tr>
  </table>
  <table border="0" cellpadding="10" cellspacing="0" width="580" style="font-family: Helvetica, Arial, sans-serif; font-size: 16px;" id="newsletter-footer">
    <tr>
      <td align="center" valign="middle"  style="border-top: 1px solid #000000;">
        <a href="http://www.nivaria.com" title="Nivaria"><img src="<?php print $base_url . '/'. path_to_theme();?>/logo-small.png" alt="Nivaria" /></a>
      </td>
    </tr>
    <tr>
      <td align="center" style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; font-size: 12px; font-weight:bold;">
        <?php print l(t('Privacy policy',array(),$language->language),'node/220'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <?php print l(t('Contact',array(),$language->language),'node/282'); ?>
      </td>
    </tr>
  </table>
<?php else: ?>
<?php print l(t('Privacy policy',array(),$language->language),'node/220'); ?> | <a href="[simplenews-unsubscribe-url]"><?php print $unsubscribe_text ?></a> | <?php print l(t('Contact',array(),$language->language),'node/282'); ?>

<?php if ($key == 'test'): ?>
  <?php print $test_message ?>
<?php endif ?>

-- <?php print $unsubscribe_text ?>: [simplenews-unsubscribe-url]
<?php endif ?>