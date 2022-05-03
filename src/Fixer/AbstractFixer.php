<?php
namespace ShockedPlot7560\cs\Fixer;

abstract class AbstractFixer extends \PhpCsFixer\AbstractFixer {

    /**
     * {@inheritdoc}
     */
    public function getName(): string {
        return sprintf('ShockedPlot7560/%s', parent::getName());
    }

}
