<?php

namespace Drupal\drush9_example\Commands;

use Drush\Commands\DrushCommands;

/**
 * A Drush commandfile.
 *
 * In addition to this file, you need a drush.services.yml
 * in root of your module, and a composer.json file that provides the name
 * of the services file to use.
 */
class Drush9ExampleCommands extends DrushCommands {
  /**
   * Echos back hello with the argument provided.
   *
   * @param $name
   *   Argument provided to the drush command.
   *
   * @command drush9_example:hello
   * @aliases d9-hello
   */
  public function hello($name) {
    $this->output()->writeln('Hello ' . $name . '!');
  }

}
