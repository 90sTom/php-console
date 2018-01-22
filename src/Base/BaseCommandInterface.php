<?php
/**
 * Created by PhpStorm.
 * User: inhere
 * Date: 2017-12-18
 * Time: 18:57
 */

namespace Inhere\Console\Base;

use Inhere\Console\IO\InputDefinition;

/**
 * Interface BaseCommandInterface
 * @package Inhere\Console\Base
 */
interface BaseCommandInterface
{
    const OK = 0;

    const DISABLED = 1;
    const ENABLED = 2;

    // name -> {name}
    const ANNOTATION_VAR = '{%s}'; // '{$%s}';

    /**
     * run command
     * @param string $command
     * @return int
     */
    public function run($command = '');

    /**
     * @return InputDefinition
     */
    public function getDefinition();

    /**
     * @return AbstractApplication
     */
    public function getApp(): AbstractApplication;

    /**
     * @return string
     */
    public static function getName(): string;

    /**
     * @return string
     */
    public static function getDescription();
}
