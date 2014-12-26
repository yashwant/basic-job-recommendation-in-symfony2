<?php

namespace AppBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * SkillRepository
 *
 */
class SkillRepository extends EntityRepository
{

    public function add($skillRaw)
    {
//        ["id"]=>
//        int(12)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(3) "C++"
//        }

        $skillName = $skillRaw['skill']['name'];
        $em = $this->getEntityManager();
        $skill = $em->getRepository('AppBundle:Skill')->findOneBy(array('name' => $skillName));
        if ($skill) {
            return $skill;
        }
        $newSkill = new Skill();
        $newSkill->setName($skillName);

        try {
            $em->persist($newSkill);
            $em->flush();

            return $newSkill;
        } catch (\Exception $e) {
            $e->getCode();
            //echo $e->getTraceAsString();

            return false;
        }
    }

    public function bulkAdd()
    {
        
    }

}

//array(14) {
//  ["educations"]=>
//  array(2) {
//    ["_total"]=>
//    int(2)
//    ["values"]=>
//    array(2) {
//      [0]=>
//      array(6) {
//        ["degree"]=>
//        string(28) "Bachelor of Engineering (BE)"
//        ["endDate"]=>
//        array(1) {
//          ["year"]=>
//          int(2011)
//        }
//        ["fieldOfStudy"]=>
//        string(16) "Computer Science"
//        ["id"]=>
//        int(49151630)
//        ["schoolName"]=>
//        string(37) "Pune Institute of Computer Technology"
//        ["startDate"]=>
//        array(1) {
//          ["year"]=>
//          int(2007)
//        }
//      }
//      [1]=>
//      array(3) {
//        ["degree"]=>
//        string(3) "HSC"
//        ["id"]=>
//        int(54552247)
//        ["schoolName"]=>
//        string(30) "Vidyadham Prashala Shirur,Pune"
//      }
//    }
//  }
//  ["firstName"]=>
//  string(8) "Yashwant"
//  ["following"]=>
//  array(4) {
//    ["companies"]=>
//    array(4) {
//      ["_count"]=>
//      int(20)
//      ["_start"]=>
//      int(0)
//      ["_total"]=>
//      int(74)
//      ["values"]=>
//      array(20) {
//        [0]=>
//        array(2) {
//          ["id"]=>
//          int(1062)
//          ["name"]=>
//          string(16) "Sun Microsystems"
//        }
//        [1]=>
//        array(2) {
//          ["id"]=>
//          int(1503)
//          ["name"]=>
//          string(43) "Massachusetts Institute of Technology (MIT)"
//        }
//        [2]=>
//        array(2) {
//          ["id"]=>
//          int(1649)
//          ["name"]=>
//          string(23) "Harvard Business Review"
//        }
//        [3]=>
//        array(2) {
//          ["id"]=>
//          int(1747)
//          ["name"]=>
//          string(8) "CNNMoney"
//        }
//        [4]=>
//        array(2) {
//          ["id"]=>
//          int(1748)
//          ["name"]=>
//          string(13) "Time Magazine"
//        }
//        [5]=>
//        array(2) {
//          ["id"]=>
//          int(1792)
//          ["name"]=>
//          string(19) "Stanford University"
//        }
//        [6]=>
//        array(2) {
//          ["id"]=>
//          int(2046)
//          ["name"]=>
//          string(3) "CNN"
//        }
//        [7]=>
//        array(2) {
//          ["id"]=>
//          int(2282)
//          ["name"]=>
//          string(23) "The Wall Street Journal"
//        }
//        [8]=>
//        array(2) {
//          ["id"]=>
//          int(2494)
//          ["name"]=>
//          string(12) "Bloomberg LP"
//        }
//        [9]=>
//        array(2) {
//          ["id"]=>
//          int(3185)
//          ["name"]=>
//          string(10) "Salesforce"
//        }
//        [10]=>
//        array(2) {
//          ["id"]=>
//          int(3308)
//          ["name"]=>
//          string(11) "CondÃ© Nast"
//        }
//        [11]=>
//        array(2) {
//          ["id"]=>
//          int(3310)
//          ["name"]=>
//          string(23) "Fairchild Fashion Media"
//        }
//        [12]=>
//        array(2) {
//          ["id"]=>
//          int(3311)
//          ["name"]=>
//          string(5) "Vogue"
//        }
//        [13]=>
//        array(2) {
//          ["id"]=>
//          int(3859)
//          ["name"]=>
//          string(5) "WebMD"
//        }
//        [14]=>
//        array(2) {
//          ["id"]=>
//          int(4236)
//          ["name"]=>
//          string(18) "The New York Times"
//        }
//        [15]=>
//        array(2) {
//          ["id"]=>
//          int(5167)
//          ["name"]=>
//          string(17) "Los Angeles Times"
//        }
//        [16]=>
//        array(2) {
//          ["id"]=>
//          int(5177)
//          ["name"]=>
//          string(15) "Fairfax Digital"
//        }
//        [17]=>
//        array(2) {
//          ["id"]=>
//          int(5180)
//          ["name"]=>
//          string(13) "Fairfax Media"
//        }
//        [18]=>
//        array(2) {
//          ["id"]=>
//          int(5234)
//          ["name"]=>
//          string(39) "Rackspace, the #1 managed cloud company"
//        }
//        [19]=>
//        array(2) {
//          ["id"]=>
//          int(5290)
//          ["name"]=>
//          string(18) "The Wharton School"
//        }
//      }
//    }
//    ["industries"]=>
//    array(2) {
//      ["_total"]=>
//      int(11)
//      ["values"]=>
//      array(11) {
//        [0]=>
//        array(1) {
//          ["id"]=>
//          int(4)
//        }
//        [1]=>
//        array(1) {
//          ["id"]=>
//          int(98)
//        }
//        [2]=>
//        array(1) {
//          ["id"]=>
//          int(113)
//        }
//        [3]=>
//        array(1) {
//          ["id"]=>
//          int(99)
//        }
//        [4]=>
//        array(1) {
//          ["id"]=>
//          int(96)
//        }
//        [5]=>
//        array(1) {
//          ["id"]=>
//          int(109)
//        }
//        [6]=>
//        array(1) {
//          ["id"]=>
//          int(80)
//        }
//        [7]=>
//        array(1) {
//          ["id"]=>
//          int(6)
//        }
//        [8]=>
//        array(1) {
//          ["id"]=>
//          int(41)
//        }
//        [9]=>
//        array(1) {
//          ["id"]=>
//          int(69)
//        }
//        [10]=>
//        array(1) {
//          ["id"]=>
//          int(104)
//        }
//      }
//    }
//    ["people"]=>
//    array(1) {
//      ["_total"]=>
//      int(0)
//    }
//    ["specialEditions"]=>
//    array(1) {
//      ["_total"]=>
//      int(0)
//    }
//  }
//  ["headline"]=>
//  string(20) "Co-Founder at YoPano"
//  ["id"]=>
//  string(10) "behqdbEcFl"
//  ["industry"]=>
//  string(17) "Computer Software"
//  ["jobBookmarks"]=>
//  array(1) {
//    ["_total"]=>
//    int(0)
//  }
//  ["languages"]=>
//  array(2) {
//    ["_total"]=>
//    int(3)
//    ["values"]=>
//    array(3) {
//      [0]=>
//      array(2) {
//        ["id"]=>
//        int(1)
//        ["language"]=>
//        array(1) {
//          ["name"]=>
//          string(7) "English"
//        }
//      }
//      [1]=>
//      array(2) {
//        ["id"]=>
//        int(2)
//        ["language"]=>
//        array(1) {
//          ["name"]=>
//          string(5) "Hindi"
//        }
//      }
//      [2]=>
//      array(2) {
//        ["id"]=>
//        int(3)
//        ["language"]=>
//        array(1) {
//          ["name"]=>
//          string(7) "Marathi"
//        }
//      }
//    }
//  }
//  ["lastName"]=>
//  string(8) "Gaikawad"
//  ["proposalComments"]=>
//  string(38) "yashwant[dot]gaikawad[at]gmail[dot]com"
//  ["recommendationsReceived"]=>
//  array(1) {
//    ["_total"]=>
//    int(0)
//  }
//  ["skills"]=>
//  array(2) {
//    ["_total"]=>
//    int(17)
//    ["values"]=>
//    array(17) {
//      [0]=>
//      array(2) {
//        ["id"]=>
//        int(12)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(3) "C++"
//        }
//      }
//      [1]=>
//      array(2) {
//        ["id"]=>
//        int(13)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(1) "C"
//        }
//      }
//      [2]=>
//      array(2) {
//        ["id"]=>
//        int(16)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(11) "Scalability"
//        }
//      }
//      [3]=>
//      array(2) {
//        ["id"]=>
//        int(17)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(4) "Java"
//        }
//      }
//      [4]=>
//      array(2) {
//        ["id"]=>
//        int(20)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(3) "PHP"
//        }
//      }
//      [5]=>
//      array(2) {
//        ["id"]=>
//        int(21)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(6) "jQuery"
//        }
//      }
//      [6]=>
//      array(2) {
//        ["id"]=>
//        int(22)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(10) "JavaScript"
//        }
//      }
//      [7]=>
//      array(2) {
//        ["id"]=>
//        int(23)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(4) "SDLC"
//        }
//      }
//      [8]=>
//      array(2) {
//        ["id"]=>
//        int(24)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(20) "Software Development"
//        }
//      }
//      [9]=>
//      array(2) {
//        ["id"]=>
//        int(25)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(3) "SQL"
//        }
//      }
//      [10]=>
//      array(2) {
//        ["id"]=>
//        int(26)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(3) "XML"
//        }
//      }
//      [11]=>
//      array(2) {
//        ["id"]=>
//        int(27)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(5) "MySQL"
//        }
//      }
//      [12]=>
//      array(2) {
//        ["id"]=>
//        int(28)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(5) "Linux"
//        }
//      }
//      [13]=>
//      array(2) {
//        ["id"]=>
//        int(30)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(12) "Web Services"
//        }
//      }
//      [14]=>
//      array(2) {
//        ["id"]=>
//        int(31)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(4) "Unix"
//        }
//      }
//      [15]=>
//      array(2) {
//        ["id"]=>
//        int(33)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(7) "Eclipse"
//        }
//      }
//      [16]=>
//      array(2) {
//        ["id"]=>
//        int(36)
//        ["skill"]=>
//        array(1) {
//          ["name"]=>
//          string(4) "AJAX"
//        }
//      }
//    }
//  }
//  ["threeCurrentPositions"]=>
//  array(2) {
//    ["_total"]=>
//    int(2)
//    ["values"]=>
//    array(2) {
//      [0]=>
//      array(5) {
//        ["company"]=>
//        array(2) {
//          ["id"]=>
//          int(3712895)
//          ["name"]=>
//          string(6) "YoPano"
//        }
//        ["id"]=>
//        int(536395571)
//        ["isCurrent"]=>
//        bool(true)
//        ["startDate"]=>
//        array(2) {
//          ["month"]=>
//          int(2)
//          ["year"]=>
//          int(2014)
//        }
//        ["title"]=>
//        string(10) "Co-Founder"
//      }
//      [1]=>
//      array(5) {
//        ["company"]=>
//        array(2) {
//          ["id"]=>
//          int(2701682)
//          ["name"]=>
//          string(32) "Scrappy Ventures Private Limited"
//        }
//        ["id"]=>
//        int(343239886)
//        ["isCurrent"]=>
//        bool(true)
//        ["startDate"]=>
//        array(2) {
//          ["month"]=>
//          int(6)
//          ["year"]=>
//          int(2012)
//        }
//        ["title"]=>
//        string(17) "Software Engineer"
//      }
//    }
//  }
//  ["threePastPositions"]=>
//  array(2) {
//    ["_total"]=>
//    int(3)
//    ["values"]=>
//    array(3) {
//      [0]=>
//      array(6) {
//        ["company"]=>
//        array(2) {
//          ["id"]=>
//          int(787834)
//          ["name"]=>
//          string(37) "Quinary Software Technologies Pvt Ltd"
//        }
//        ["endDate"]=>
//        array(2) {
//          ["month"]=>
//          int(3)
//          ["year"]=>
//          int(2012)
//        }
//        ["id"]=>
//        int(230635998)
//        ["isCurrent"]=>
//        bool(false)
//        ["startDate"]=>
//        array(2) {
//          ["month"]=>
//          int(9)
//          ["year"]=>
//          int(2011)
//        }
//        ["title"]=>
//        string(18) "Software Developer"
//      }
//      [1]=>
//      array(6) {
//        ["company"]=>
//        array(2) {
//          ["id"]=>
//          int(2310942)
//          ["name"]=>
//          string(13) "ComputoVision"
//        }
//        ["endDate"]=>
//        array(2) {
//          ["month"]=>
//          int(8)
//          ["year"]=>
//          int(2011)
//        }
//        ["id"]=>
//        int(230636274)
//        ["isCurrent"]=>
//        bool(false)
//        ["startDate"]=>
//        array(2) {
//          ["month"]=>
//          int(5)
//          ["year"]=>
//          int(2011)
//        }
//        ["title"]=>
//        string(18) "Software Developer"
//      }
//      [2]=>
//      array(6) {
//        ["company"]=>
//        array(2) {
//          ["id"]=>
//          int(1597)
//          ["name"]=>
//          string(12) "BMC Software"
//        }
//        ["endDate"]=>
//        array(2) {
//          ["month"]=>
//          int(6)
//          ["year"]=>
//          int(2011)
//        }
//        ["id"]=>
//        int(136788767)
//        ["isCurrent"]=>
//        bool(false)
//        ["startDate"]=>
//        array(2) {
//          ["month"]=>
//          int(8)
//          ["year"]=>
//          int(2010)
//        }
//        ["title"]=>
//        string(6) "Intern"
//      }
//    }
//  }
//}
