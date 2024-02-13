<?php

namespace Drupal\watchdog_prune\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listen to the dblog route.
 */
class DbLogRouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  public function alterRoutes(RouteCollection $collection) {
    // Don't allow an administrator to truncate the watchdog table.
    if ($route = $collection->get('dblog.confirm')) {
      $route->setRequirement('_access', 'FALSE');
    }
  }

}
