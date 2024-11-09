<?php
/**
 * Краткое описание вашего файла.
 * php version 8.2
 *
 * @category YourCategory
 * @package  YourPackage
 * @author   Your Name <your.email@example.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://link-to-your-documentation.com
 */
namespace Hexlet\Php\Runner;
/**
 * Запускает выполнение программы.
 *
 * @return void
 */
function run()
{
    $collection = collect(
        ['taylor', 'abigail', 'ivan']
    )->map(
        function ($name) {
            return strtoupper($name);
        }
    );

        return $collection;
}
