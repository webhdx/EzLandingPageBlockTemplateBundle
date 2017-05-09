<?php
namespace EzSystems\LandingPageBlockTemplateBundle\Block;

use EzSystems\LandingPageFieldTypeBundle\FieldType\LandingPage\Model\ConfigurableBlockType;
use EzSystems\LandingPageFieldTypeBundle\FieldType\LandingPage\Model\BlockValue;

/**
 * Simple implementation of a Landing Page block.
 */
class FancyBlock extends ConfigurableBlockType
{
    /**
     * @param \EzSystems\LandingPageFieldTypeBundle\FieldType\LandingPage\Model\BlockValue $blockValue
     *
     * @return array
     */
    public function getTemplateParameters(BlockValue $blockValue)
    {
        $attributes = $blockValue->getAttributes();

        $attributes['name'] .= ' (altered from the service)';

        return $attributes;
    }
}
