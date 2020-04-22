<?php

namespace Model;
class GuestBookEntry
{
    private $firstName;
    private $lastName;
    private $content;

    public function __construct($firstName = null, $lastName = null, $content = null)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param null $firstName
     *
     * @return GuestBookEntry
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @param null $lastName
     *
     * @return GuestBookEntry
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @param null $content
     *
     * @return GuestBookEntry
     */
    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }
}