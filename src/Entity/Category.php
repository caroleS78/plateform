<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
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
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity=Movie::class, inversedBy="categories")
     * @ORM\JoinTable(name="movies_categories")
     */
    private $movies;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
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
}
