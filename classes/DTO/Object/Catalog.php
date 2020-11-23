<?php

namespace PrestaShop\Module\PrestashopFacebook\DTO;

class Catalog
{
    /**
     * @var string
     */
    private $id;

    /**
     * Page constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->getId(),
        ];
    }
}
