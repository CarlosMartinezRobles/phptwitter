<?php

class Tweet
{
    protected string $user;
    protected string $userName;
    protected string $profilePic;
    protected int $likes;
    protected int $retweets;
    protected string $text;
    protected string $image;

    public function __construct(array $tweet)
    {
        $this->text = $tweet['text'];
        $this->user = $tweet['author'];
        $this->userName = $tweet['user'];
    }

    /**
     * @return string
     */
    public function getUser(): string
    {
        return $this->user;
    }

    /**
     * @param string $user
     */
    public function setUser(string $user): void
    {
        $this->user = $user;
    }

    /**
     * @return string
     */
    public function getUserName(): string
    {
        return $this->userName;
    }

    /**
     * @param string $userName
     */
    public function setUserName(string $userName): void
    {
        $this->userName = $userName;
    }

    /**
     * @return string
     */
    public function getProfilePic(): string
    {
        return $this->profilePic;
    }

    /**
     * @param string $profilePic
     */
    public function setProfilePic(string $profilePic): void
    {
        $this->profilePic = $profilePic;
    }

    /**
     * @return int
     */
    public function getLikes(): int
    {
        return $this->likes;
    }

    /**
     * @param int $likes
     */
    public function setLikes(int $likes): void
    {
        $this->likes = $likes;
    }

    /**
     * @return int
     */
    public function getRetweets(): int
    {
        return $this->retweets;
    }

    /**
     * @param int $retweets
     */
    public function setRetweets(int $retweets): void
    {
        $this->retweets = $retweets;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text): void
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @param array $array
     *
     * Método para crear el objeto a partir de un array de datos
     */
    public function toArray(array $tweet)
    {

    }

}
