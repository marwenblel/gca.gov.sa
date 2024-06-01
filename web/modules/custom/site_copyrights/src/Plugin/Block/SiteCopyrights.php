<?php
namespace Drupal\site_copyrights\Plugin\Block;

use Drupal\Core\Block\BlockBase;
/**
 * Provides a 'Site Copyrights' Block.
 *
 * @Block(
 *   id = "site_copyrights",
 *   admin_label = @Translation("Site Copyrights"),
 * )
 */
class SiteCopyrights extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        $current_year = date("Y");
        return [
            '#markup' => '<p>'. t("All rights reserved to the General Auditing Office"). ' '. htmlspecialchars($current_year) . '</p>',
            '#allowed_tags' => ['p'],
        ];

    }
}
