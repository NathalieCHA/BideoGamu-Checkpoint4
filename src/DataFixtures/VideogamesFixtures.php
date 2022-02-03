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
        $videogames->setImg("z2.jpg");
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
        $videogames2->setImg("pk.jpg");
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
        $videogames3->setImg("p5.jpg");
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
        $videogames4->setImg("smt.png");
        $this->addReference('videogames4_', $videogames);

        $manager->persist($videogames4);

        $videogames5 = new videogames();
        $videogames5->setCategory($this->getReference('category_2'));
        $videogames5->setName("Taiko no Tatsujin, Drum 'n' Fun!");
        $videogames5->setDescription("");
        $videogames5->setReleaseDate(new \DateTime('2018-11-02'));
        $videogames5->setHowLongToBeat("30");
        $videogames5->setImg("tnt.jpg");
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
        $videogames6->setImg("mk.jpg");
        $this->addReference('videogames6_', $videogames6);

        $manager->persist($videogames6);

        $videogames7 = new videogames();
        $videogames7->setCategory($this->getReference('category_0'));
        $videogames7->setName("The Legend of Zelda: Majora's Mask");
        $videogames7->setDescription("The Legend of Zelda: Majora's Mask is set in Termina, a land parallel to Hyrule,[14][15] the main setting of most Zelda games.
        Termina is a world that is trapped within a perpetual three day limbo, between the time when Link first enters Termina at the beginning of Majora's Mask, and when a
        large falling moon crashes into the land causing its apocalyptic destruction and killing its inhabitants 72 hours later.");
        $videogames7->setReleaseDate(new \DateTime('2000-04-27'));
        $videogames7->setHowLongToBeat("31");
        $videogames7->setImg("z2.jpg");
        $this->addReference('videogames7_', $videogames7);

        $manager->persist($videogames7);

        $videogames8 = new videogames();
        $videogames8->setCategory($this->getReference('category_4'));
        $videogames8->setName("Paradise Killer");
        $videogames8->setDescription("Paradise Killer takes place in a pocket universe in which a group of immortal alien beings, the Syndicate, are trying to create a perfect society
        to reawaken their ancient gods. Paradise Island is an experiment intended to bring this society about; the Syndicate kidnaps humans from Earth and allows them to live as
        Citizens on the island. However, when the island inevitably fails, the Citizens are all ritually slaughtered and their souls used to build the next iteration of the island.
        Paradise Island 24, the setting of the game, is the 24th iteration of the experiment.");
        $videogames8->setReleaseDate(new \DateTime('2020-09-4'));
        $videogames8->setHowLongToBeat("15");
        $videogames8->setImg("pk.jpg");
        $this->addReference('videogames8_', $videogames8);

        $manager->persist($videogames8);

        $videogames9 = new videogames();
        $videogames9->setCategory($this->getReference('category_1'));
        $videogames9->setName("Persona 5");
        $videogames9->setDescription("Much of the story is told through flashbacks while the protagonist is held by police and interrogated by Sae Nijima. After the protagonist defends a woman
        from assault, he is framed for assaulting the man responsible and put on probation, resulting in expulsion from his school. He is sent to Tokyo to stay with family friend Sojiro
        Sakura and attend Shujin Academy during his year-long probation. After his arrival, he is drawn into the Velvet Room, where Igor warns him that he must be rehabilitated to avoid
        forthcoming ruin, and grants him access to a supernatural mobile app that leads him into the Metaverse and the Palace of the school's abusive volleyball coach Suguru Kamoshida.");
        $videogames9->setReleaseDate(new \DateTime('2016-09-15'));
        $videogames9->setHowLongToBeat("100");
        $videogames9->setImg("p5.jpg");
        $this->addReference('videogames9_', $videogames9);

        $manager->persist($videogames9);

        $videogames12 = new videogames();
        $videogames12->setCategory($this->getReference('category_1'));
        $videogames12->setName("Shin Megami Tensei 5");
        $videogames12->setDescription(" When a grisly murder scene in modern-day Tokyo blocks our protagonist's walk home, an unplanned detour leaves him buried and unconscious.
        He awakens in a new Tokyo, a wasteland ravaged by an apocalypse now called Da’at... but before bloodthirsty demons can claim his life, a savior emerges, and
        they unite to become a mighty being, neither human nor demon: a Nahobino.");
        $videogames12->setReleaseDate(new \DateTime('2021-11-11'));
        $videogames12->setHowLongToBeat("80");
        $videogames12->setImg("smt.png");
        $this->addReference('videogames12_', $videogames12);

        $manager->persist($videogames12);

        $videogames10 = new videogames();
        $videogames10->setCategory($this->getReference('category_2'));
        $videogames10->setName("Taiko no Tatsujin, Drum 'n' Fun!");
        $videogames10->setDescription("");
        $videogames10->setReleaseDate(new \DateTime('2018-11-02'));
        $videogames10->setHowLongToBeat("30");
        $videogames10->setImg("tnt.jpg");
        $this->addReference('videogames10_', $videogames10);

        $manager->persist($videogames10);

        $videogames11 = new videogames();
        $videogames11->setCategory($this->getReference('category_3'));
        $videogames11->setName("Monkey Island");
        $videogames11->setDescription("A youth named Guybrush Threepwood arrives on the fictional Mêlée Island™, with the desire to become a pirate. He seeks out the island's pirate leaders,
        who set him three trials that must be completed to become a pirate: winning a sword duel against Carla, the island's resident swordmaster, finding a buried treasure,
        and stealing a valuable idol from the governor's mansion.");
        $videogames11->setReleaseDate(new \DateTime('1990-10-01'));
        $videogames11->setHowLongToBeat("7");
        $videogames11->setImg("mk.jpg");
        $this->addReference('videogames11_', $videogames11);

        $manager->persist($videogames11);

        $manager->flush();
    }
}
