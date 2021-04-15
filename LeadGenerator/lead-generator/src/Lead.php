<?php

namespace LeadGenerator;

/**
 * Class Lead
 * @package LeadGenerator\models
 */
class Lead
{
    public static array $CATEGORIES = [
        'Buy auto',
        'Buy house',
        'Get loan',
        'Cleaning',
        'Learning',
        'Car wash',
        'Repair smth',
        'Barbershop',
        'Car insurance',
        'Life insurance'
    ];

    /**
     * @var int
     */
    public int $id;

    /**
     * @var string
     */
    public string $categoryName;

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id) : void
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCategoryName() : string
    {
        return $this->categoryName;
    }

    /**
     * @param string $categoryName
     */
    public function setCategoryName(string $categoryName) : void
    {
        $this->categoryName = $categoryName;
    }

}
