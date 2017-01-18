<?php
namespace EzSystems\LandingPageBlockTemplateBundle\Block;

use EzSystems\LandingPageFieldTypeBundle\Exception\InvalidBlockAttributeException;
use EzSystems\LandingPageFieldTypeBundle\FieldType\LandingPage\Model\AbstractConfigurableBlockType;
use EzSystems\LandingPageFieldTypeBundle\FieldType\LandingPage\Model\BlockValue;

/**
 * Template block
 * Template for Landing Page Field Type Block.
 */
class TemplateBlock extends AbstractConfigurableBlockType
{
    /**
     * Returns the parameters to the template.
     * To retrieve block attributes call $blockValue->getAttributes()
     *
     * {@inheritdoc}
     */
    public function getTemplateParameters(BlockValue $blockValue)
    {
        return [
            'block' => json_encode($blockValue->getAttributes())
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function checkAttributesStructure(array $attributes)
    {
        if (!isset($attributes['templateContent'])) {
            throw new InvalidBlockAttributeException(
                $this->getBlockDefinition()->getName(),
                'templateContent',
                'Content must be set.'
            );
        }
    }
}
