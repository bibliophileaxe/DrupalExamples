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
   * @param string $name
   *   Argument provided to the drush command.
   *
   * @command drush9_example:hello
   * @aliases d9-hello
   * @options arr An option that takes multiple values.
   * @options msg Whether or not an extra message should be displayed to the user.
   * @usage drush9_example:hello akanksha --msg
   *   Display 'Hello Akanksha!' and a message.
   */
  public function hello($name, $options = ['msg' => FALSE]) {
    if ($options['msg']) {
      $this->output()->writeln('Hello ' . $name . '! This is your first Drush 9 command.');
    }
    else {
      $this->output()->writeln('Hello ' . $name . '!');
    }
  }

}
