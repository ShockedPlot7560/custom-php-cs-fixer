<?php
declare(strict_types=1);

namespace ShockedPlot7560\cs;

use ArrayIterator;
use IteratorAggregate;
use PhpCsFixer\Finder;
use PhpCsFixer\Fixer\FixerInterface;
use ReflectionClass;
use Traversable;

class Fixers implements IteratorAggregate {

    public function getIterator(): Traversable {
        $finder = new Finder();
        $finder->in(__DIR__ . '/Fixer')->name('*.php');
        $classes = [];
        foreach ($finder as $file) {
            $class = '\\ShockedPlot7560\\cs' . str_replace('/', '\\', mb_substr($file->getPathname(), mb_strlen(__DIR__), -4));
            if (!class_exists($class)) {
                continue;
            }

            /** @noinspection PhpUnhandledExceptionInspection */
            $rfl = new ReflectionClass($class);
            if (!$rfl->implementsInterface(FixerInterface::class) || $rfl->isAbstract()) {
                continue;
            }

            $classes[] = $class;
        }

        return new ArrayIterator(array_map(function($class) {
            return new $class();
        }, $classes));
    }

}
