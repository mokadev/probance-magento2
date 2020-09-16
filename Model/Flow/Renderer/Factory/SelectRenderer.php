<?php

namespace Walkwizus\Probance\Model\Flow\Renderer\Factory;

use Magento\Eav\Model\Entity\Attribute\AbstractAttribute;
use Magento\Framework\Api\CustomAttributesDataInterface;
use Walkwizus\Probance\Model\Flow\Renderer\RendererInterface;

class SelectRenderer implements RendererInterface
{
    /**
     * @param CustomAttributesDataInterface $entity
     * @param AbstractAttribute $attribute
     * @return mixed|string
     */
    public function render(CustomAttributesDataInterface $entity, AbstractAttribute $attribute)
    {
        if ($entity->getData($attribute->getAttributeCode())) {
            return $entity->getAttributeText($attribute->getAttributeCode());
        }

        return '';
    }
}