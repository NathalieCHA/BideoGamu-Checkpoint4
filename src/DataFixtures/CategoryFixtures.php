<?php

namespace App\DataFixtures;

use App\Entity\Category;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CategoryFixtures extends Fixture
{
    public const CATEGORY = [
        'Action-adventure',
        'RPG',
        'Rythm',
        'Point&Click',
        'Puzzle'

    ];

     public function load(ObjectManager $manager)
    {
        foreach (self::CATEGORY as $key => $categoryName) {
            $category = new Category();
            $category->setName($categoryName);
            $manager->persist($category);
            $this->addReference('category_' . $key, $category);
        }
        $manager->flush();
    }
}
