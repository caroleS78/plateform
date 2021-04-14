<?php

namespace App\Entity;

use App\Repository\UserMoviesListRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserMoviesListRepository::class)
 */
class UserMoviesList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $movies;

    /**
     * @ORM\OneToOne(targetEntity=User::class, cascade={"persist", "remove"})
     */
    private $userList;

    public function getId(): ?int
    {
        return $this->id;
    }



    /**
     * Get the value of movies
     */ 
    public function getMovies()
    {
        return $this->movies;
    }

    /**
     * Set the value of movies
     *
     * @return  self
     */ 
    public function setMovies($movies)
    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * Get the value of userList
     */ 
    public function getUserList()
    {
        return $this->userList;
    }

    /**
     * Set the value of userList
     *
     * @return  self
     */ 
    public function setUserList($userList)
    {
        $this->userList = $userList;

        return $this;
    }
}
