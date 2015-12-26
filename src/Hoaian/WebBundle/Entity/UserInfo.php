<?php

namespace Hoaian\WebBundle\Entity;

/**
 * UserInfo
 */
class UserInfo
{
    /**
     * @var integer
     */
    private $uid;

    /**
     * @var string
     */
    private $nick;

    /**
     * @var string
     */
    private $pass;

    /**
     * @var string
     */
    private $email = '';

    /**
     * @var string
     */
    private $phone = '0';

    /**
     * @var string
     */
    private $fb = '';

    /**
     * @var string
     */
    private $website = '';

    /**
     * @var integer
     */
    private $sex = '1';

    /**
     * @var integer
     */
    private $married = '0';

    /**
     * @var integer
     */
    private $marriedWith = '0';

    /**
     * @var string
     */
    private $lover = '';

    /**
     * @var integer
     */
    private $level = '0';

    /**
     * @var integer
     */
    private $plus = '100';

    /**
     * @var integer
     */
    private $chatMsg = '0';

    /**
     * @var integer
     */
    private $pmMsg = '0';

    /**
     * @var string
     */
    private $profilePhotoUrl = '';

    /**
     * @var string
     */
    private $coverUrl = '';

    /**
     * @var integer
     */
    private $vikteSk = '0';

    /**
     * @var integer
     */
    private $wordSk = '0';

    /**
     * @var integer
     */
    private $login = '0';

    /**
     * @var integer
     */
    private $regTime = '0';

    /**
     * @var string
     */
    private $browser = '';

    /**
     * @var string
     */
    private $ip = '';

    /**
     * @var string
     */
    private $location = '';

    /**
     * @var integer
     */
    private $loged = '0';

    /**
     * @var integer
     */
    private $refs = '0';

    /**
     * @var string
     */
    private $country = '';

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $districtid;

    /**
     * @var string
     */
    private $wardid;

    /**
     * @var string
     */
    private $name = '';

    /**
     * @var integer
     */
    private $birthday = '0';

    /**
     * @var integer
     */
    private $height = '0';

    /**
     * @var integer
     */
    private $weight = '0';

    /**
     * @var string
     */
    private $music = '';

    /**
     * @var string
     */
    private $fBookFilm = '';

    /**
     * @var string
     */
    private $hobby = '';

    /**
     * @var string
     */
    private $attitude = '';

    /**
     * @var string
     */
    private $dream = '';

    /**
     * @var string
     */
    private $education = '';

    /**
     * @var string
     */
    private $school = '';

    /**
     * @var string
     */
    private $job = '';

    /**
     * @var string
     */
    private $status = '';

    /**
     * @var integer
     */
    private $pmNew = '0';

    /**
     * @var integer
     */
    private $pmCount = '0';

    /**
     * @var string
     */
    private $banReason = '';

    /**
     * @var integer
     */
    private $setlike = '0';

    /**
     * @var integer
     */
    private $getlike = '0';

    /**
     * @var integer
     */
    private $follow = '0';

    /**
     * @var integer
     */
    private $step = '0';


    /**
     * Get uid
     *
     * @return integer
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Set nick
     *
     * @param string $nick
     *
     * @return UserInfo
     */
    public function setNick($nick)
    {
        $this->nick = $nick;

        return $this;
    }

    /**
     * Get nick
     *
     * @return string
     */
    public function getNick()
    {
        return $this->nick;
    }

    /**
     * Set pass
     *
     * @param string $pass
     *
     * @return UserInfo
     */
    public function setPass($pass)
    {
        $this->pass = $pass;

        return $this;
    }

    /**
     * Get pass
     *
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return UserInfo
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return UserInfo
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set fb
     *
     * @param string $fb
     *
     * @return UserInfo
     */
    public function setFb($fb)
    {
        $this->fb = $fb;

        return $this;
    }

    /**
     * Get fb
     *
     * @return string
     */
    public function getFb()
    {
        return $this->fb;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return UserInfo
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set sex
     *
     * @param integer $sex
     *
     * @return UserInfo
     */
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get sex
     *
     * @return integer
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set married
     *
     * @param integer $married
     *
     * @return UserInfo
     */
    public function setMarried($married)
    {
        $this->married = $married;

        return $this;
    }

    /**
     * Get married
     *
     * @return integer
     */
    public function getMarried()
    {
        return $this->married;
    }

    /**
     * Set marriedWith
     *
     * @param integer $marriedWith
     *
     * @return UserInfo
     */
    public function setMarriedWith($marriedWith)
    {
        $this->marriedWith = $marriedWith;

        return $this;
    }

    /**
     * Get marriedWith
     *
     * @return integer
     */
    public function getMarriedWith()
    {
        return $this->marriedWith;
    }

    /**
     * Set lover
     *
     * @param string $lover
     *
     * @return UserInfo
     */
    public function setLover($lover)
    {
        $this->lover = $lover;

        return $this;
    }

    /**
     * Get lover
     *
     * @return string
     */
    public function getLover()
    {
        return $this->lover;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return UserInfo
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set plus
     *
     * @param integer $plus
     *
     * @return UserInfo
     */
    public function setPlus($plus)
    {
        $this->plus = $plus;

        return $this;
    }

    /**
     * Get plus
     *
     * @return integer
     */
    public function getPlus()
    {
        return $this->plus;
    }

    /**
     * Set chatMsg
     *
     * @param integer $chatMsg
     *
     * @return UserInfo
     */
    public function setChatMsg($chatMsg)
    {
        $this->chatMsg = $chatMsg;

        return $this;
    }

    /**
     * Get chatMsg
     *
     * @return integer
     */
    public function getChatMsg()
    {
        return $this->chatMsg;
    }

    /**
     * Set pmMsg
     *
     * @param integer $pmMsg
     *
     * @return UserInfo
     */
    public function setPmMsg($pmMsg)
    {
        $this->pmMsg = $pmMsg;

        return $this;
    }

    /**
     * Get pmMsg
     *
     * @return integer
     */
    public function getPmMsg()
    {
        return $this->pmMsg;
    }

    /**
     * Set profilePhotoUrl
     *
     * @param string $profilePhotoUrl
     *
     * @return UserInfo
     */
    public function setProfilePhotoUrl($profilePhotoUrl)
    {
        $this->profilePhotoUrl = $profilePhotoUrl;

        return $this;
    }

    /**
     * Get profilePhotoUrl
     *
     * @return string
     */
    public function getProfilePhotoUrl()
    {
        return $this->profilePhotoUrl;
    }

    /**
     * Set coverUrl
     *
     * @param string $coverUrl
     *
     * @return UserInfo
     */
    public function setCoverUrl($coverUrl)
    {
        $this->coverUrl = $coverUrl;

        return $this;
    }

    /**
     * Get coverUrl
     *
     * @return string
     */
    public function getCoverUrl()
    {
        return $this->coverUrl;
    }

    /**
     * Set vikteSk
     *
     * @param integer $vikteSk
     *
     * @return UserInfo
     */
    public function setVikteSk($vikteSk)
    {
        $this->vikteSk = $vikteSk;

        return $this;
    }

    /**
     * Get vikteSk
     *
     * @return integer
     */
    public function getVikteSk()
    {
        return $this->vikteSk;
    }

    /**
     * Set wordSk
     *
     * @param integer $wordSk
     *
     * @return UserInfo
     */
    public function setWordSk($wordSk)
    {
        $this->wordSk = $wordSk;

        return $this;
    }

    /**
     * Get wordSk
     *
     * @return integer
     */
    public function getWordSk()
    {
        return $this->wordSk;
    }

    /**
     * Set login
     *
     * @param integer $login
     *
     * @return UserInfo
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return integer
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set regTime
     *
     * @param integer $regTime
     *
     * @return UserInfo
     */
    public function setRegTime($regTime)
    {
        $this->regTime = $regTime;

        return $this;
    }

    /**
     * Get regTime
     *
     * @return integer
     */
    public function getRegTime()
    {
        return $this->regTime;
    }

    /**
     * Set browser
     *
     * @param string $browser
     *
     * @return UserInfo
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;

        return $this;
    }

    /**
     * Get browser
     *
     * @return string
     */
    public function getBrowser()
    {
        return $this->browser;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return UserInfo
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return UserInfo
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set loged
     *
     * @param integer $loged
     *
     * @return UserInfo
     */
    public function setLoged($loged)
    {
        $this->loged = $loged;

        return $this;
    }

    /**
     * Get loged
     *
     * @return integer
     */
    public function getLoged()
    {
        return $this->loged;
    }

    /**
     * Set refs
     *
     * @param integer $refs
     *
     * @return UserInfo
     */
    public function setRefs($refs)
    {
        $this->refs = $refs;

        return $this;
    }

    /**
     * Get refs
     *
     * @return integer
     */
    public function getRefs()
    {
        return $this->refs;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return UserInfo
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return UserInfo
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set districtid
     *
     * @param string $districtid
     *
     * @return UserInfo
     */
    public function setDistrictid($districtid)
    {
        $this->districtid = $districtid;

        return $this;
    }

    /**
     * Get districtid
     *
     * @return string
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }

    /**
     * Set wardid
     *
     * @param string $wardid
     *
     * @return UserInfo
     */
    public function setWardid($wardid)
    {
        $this->wardid = $wardid;

        return $this;
    }

    /**
     * Get wardid
     *
     * @return string
     */
    public function getWardid()
    {
        return $this->wardid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UserInfo
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthday
     *
     * @param integer $birthday
     *
     * @return UserInfo
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;

        return $this;
    }

    /**
     * Get birthday
     *
     * @return integer
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return UserInfo
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return integer
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return UserInfo
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set music
     *
     * @param string $music
     *
     * @return UserInfo
     */
    public function setMusic($music)
    {
        $this->music = $music;

        return $this;
    }

    /**
     * Get music
     *
     * @return string
     */
    public function getMusic()
    {
        return $this->music;
    }

    /**
     * Set fBookFilm
     *
     * @param string $fBookFilm
     *
     * @return UserInfo
     */
    public function setFBookFilm($fBookFilm)
    {
        $this->fBookFilm = $fBookFilm;

        return $this;
    }

    /**
     * Get fBookFilm
     *
     * @return string
     */
    public function getFBookFilm()
    {
        return $this->fBookFilm;
    }

    /**
     * Set hobby
     *
     * @param string $hobby
     *
     * @return UserInfo
     */
    public function setHobby($hobby)
    {
        $this->hobby = $hobby;

        return $this;
    }

    /**
     * Get hobby
     *
     * @return string
     */
    public function getHobby()
    {
        return $this->hobby;
    }

    /**
     * Set attitude
     *
     * @param string $attitude
     *
     * @return UserInfo
     */
    public function setAttitude($attitude)
    {
        $this->attitude = $attitude;

        return $this;
    }

    /**
     * Get attitude
     *
     * @return string
     */
    public function getAttitude()
    {
        return $this->attitude;
    }

    /**
     * Set dream
     *
     * @param string $dream
     *
     * @return UserInfo
     */
    public function setDream($dream)
    {
        $this->dream = $dream;

        return $this;
    }

    /**
     * Get dream
     *
     * @return string
     */
    public function getDream()
    {
        return $this->dream;
    }

    /**
     * Set education
     *
     * @param string $education
     *
     * @return UserInfo
     */
    public function setEducation($education)
    {
        $this->education = $education;

        return $this;
    }

    /**
     * Get education
     *
     * @return string
     */
    public function getEducation()
    {
        return $this->education;
    }

    /**
     * Set school
     *
     * @param string $school
     *
     * @return UserInfo
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return UserInfo
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return UserInfo
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set pmNew
     *
     * @param integer $pmNew
     *
     * @return UserInfo
     */
    public function setPmNew($pmNew)
    {
        $this->pmNew = $pmNew;

        return $this;
    }

    /**
     * Get pmNew
     *
     * @return integer
     */
    public function getPmNew()
    {
        return $this->pmNew;
    }

    /**
     * Set pmCount
     *
     * @param integer $pmCount
     *
     * @return UserInfo
     */
    public function setPmCount($pmCount)
    {
        $this->pmCount = $pmCount;

        return $this;
    }

    /**
     * Get pmCount
     *
     * @return integer
     */
    public function getPmCount()
    {
        return $this->pmCount;
    }

    /**
     * Set banReason
     *
     * @param string $banReason
     *
     * @return UserInfo
     */
    public function setBanReason($banReason)
    {
        $this->banReason = $banReason;

        return $this;
    }

    /**
     * Get banReason
     *
     * @return string
     */
    public function getBanReason()
    {
        return $this->banReason;
    }

    /**
     * Set setlike
     *
     * @param integer $setlike
     *
     * @return UserInfo
     */
    public function setSetlike($setlike)
    {
        $this->setlike = $setlike;

        return $this;
    }

    /**
     * Get setlike
     *
     * @return integer
     */
    public function getSetlike()
    {
        return $this->setlike;
    }

    /**
     * Set getlike
     *
     * @param integer $getlike
     *
     * @return UserInfo
     */
    public function setGetlike($getlike)
    {
        $this->getlike = $getlike;

        return $this;
    }

    /**
     * Get getlike
     *
     * @return integer
     */
    public function getGetlike()
    {
        return $this->getlike;
    }

    /**
     * Set follow
     *
     * @param integer $follow
     *
     * @return UserInfo
     */
    public function setFollow($follow)
    {
        $this->follow = $follow;

        return $this;
    }

    /**
     * Get follow
     *
     * @return integer
     */
    public function getFollow()
    {
        return $this->follow;
    }

    /**
     * Set step
     *
     * @param integer $step
     *
     * @return UserInfo
     */
    public function setStep($step)
    {
        $this->step = $step;

        return $this;
    }

    /**
     * Get step
     *
     * @return integer
     */
    public function getStep()
    {
        return $this->step;
    }
}

