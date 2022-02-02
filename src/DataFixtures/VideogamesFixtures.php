<?php

namespace App\DataFixtures;

use App\Entity\Videogames;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\Validator\Constraints\Date;

class VideogamesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $videogames = new videogames();
        $videogames->setCategory($this->getReference('category_0'));
        $videogames->setName("The Legend of Zelda: Majora's Mask");
        $videogames->setDescription("The Legend of Zelda: Majora's Mask is set in Termina, a land parallel to Hyrule,[14][15] the main setting of most Zelda games.
        Termina is a world that is trapped within a perpetual three day limbo, between the time when Link first enters Termina at the beginning of Majora's Mask, and when a
        large falling moon crashes into the land causing its apocalyptic destruction and killing its inhabitants 72 hours later.");
        $videogames->setReleaseDate(new \DateTime('2000-04-27'));
        $videogames->setHowLongToBeat("31");
        $videogames->setImg("https://static.posters.cz/image/750/affiches-et-posters/the-legend-of-zelda-majora-s-mask-i24270.jpg");
        $this->addReference('videogames1_', $videogames);

        $manager->persist($videogames);

        $videogames2 = new videogames();
        $videogames2->setCategory($this->getReference('category_4'));
        $videogames2->setName("Paradise Killer");
        $videogames2->setDescription("Paradise Killer takes place in a pocket universe in which a group of immortal alien beings, the Syndicate, are trying to create a perfect society
        to reawaken their ancient gods. Paradise Island is an experiment intended to bring this society about; the Syndicate kidnaps humans from Earth and allows them to live as
        Citizens on the island. However, when the island inevitably fails, the Citizens are all ritually slaughtered and their souls used to build the next iteration of the island.
        Paradise Island 24, the setting of the game, is the 24th iteration of the experiment.");
        $videogames2->setReleaseDate(new \DateTime('2020-09-4'));
        $videogames2->setHowLongToBeat("15");
        $videogames2->setImg("https://howlongtobeat.com/games/82772_Paradise_Killer.jpg");
        $this->addReference('videogames2_', $videogames2);

        $manager->persist($videogames2);

        $videogames3 = new videogames();
        $videogames3->setCategory($this->getReference('category_1'));
        $videogames3->setName("Persona 5");
        $videogames3->setDescription("Much of the story is told through flashbacks while the protagonist is held by police and interrogated by Sae Nijima. After the protagonist defends a woman
        from assault, he is framed for assaulting the man responsible and put on probation, resulting in expulsion from his school. He is sent to Tokyo to stay with family friend Sojiro
        Sakura and attend Shujin Academy during his year-long probation. After his arrival, he is drawn into the Velvet Room, where Igor warns him that he must be rehabilitated to avoid
        forthcoming ruin, and grants him access to a supernatural mobile app that leads him into the Metaverse and the Palace of the school's abusive volleyball coach Suguru Kamoshida.");
        $videogames3->setReleaseDate(new \DateTime('2016-09-15'));
        $videogames3->setHowLongToBeat("100");
        $videogames3->setImg("https://image.api.playstation.com/cdn/EP4062/CUSA06638_00/0fSaYhFhEVP183JLTwVec7qkzmaHNMS2.png");
        $this->addReference('videogames3_', $videogames3);

        $manager->persist($videogames3);

        $videogames4 = new videogames();
        $videogames4->setCategory($this->getReference('category_1'));
        $videogames4->setName("Shin Megami Tensei 5");
        $videogames4->setDescription(" When a grisly murder scene in modern-day Tokyo blocks our protagonist's walk home, an unplanned detour leaves him buried and unconscious.
        He awakens in a new Tokyo, a wasteland ravaged by an apocalypse now called Da’at... but before bloodthirsty demons can claim his life, a savior emerges, and
        they unite to become a mighty being, neither human nor demon: a Nahobino.");
        $videogames4->setReleaseDate(new \DateTime('2021-11-11'));
        $videogames4->setHowLongToBeat("40");
        $videogames4->setImg("https://upload.wikimedia.org/wikipedia/en/b/bd/Shin_Megami_Tensei_V.png");
        $this->addReference('videogames4_', $videogames);

        $manager->persist($videogames4);

        $videogames5 = new videogames();
        $videogames5->setCategory($this->getReference('category_2'));
        $videogames5->setName("Taiko no Tatsujin, Drum 'n' Fun!");
        $videogames5->setDescription("");
        $videogames5->setReleaseDate(new \DateTime('2018-11-02'));
        $videogames5->setHowLongToBeat("30");
        $videogames5->setImg("https://media.senscritique.com/media/000017857190/source_big/Taiko_no_Tatsujin_Drum_n_Fun.jpg");
        $this->addReference('videogames5_', $videogames5);

        $manager->persist($videogames5);

        $videogames6 = new videogames();
        $videogames6->setCategory($this->getReference('category_3'));
        $videogames6->setName("Monkey Island");
        $videogames6->setDescription("A youth named Guybrush Threepwood arrives on the fictional Mêlée Island™, with the desire to become a pirate. He seeks out the island's pirate leaders,
        who set him three trials that must be completed to become a pirate: winning a sword duel against Carla, the island's resident swordmaster, finding a buried treasure,
        and stealing a valuable idol from the governor's mansion.");
        $videogames6->setReleaseDate(new \DateTime('1990-10-01'));
        $videogames6->setHowLongToBeat("7");
        $videogames6->setImg("https://m.media-amazon.com/images/I/71vSTakKboL._AC_SY606_.jpg");
        $this->addReference('videogames6_', $videogames6);

        $manager->persist($videogames6);

        $manager->flush();
    }
}
