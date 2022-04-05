<?php

namespace App\Entity;

use App\Repository\BlogArticleeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=BlogArticleeRepository::class)
 */
class BlogArticlee
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
    private $Name;

    /**
     * @ORM\Column(type="text")
     */
    private $Content;

    /**
     * @ORM\ManyToOne(targetEntity=BlogCategoryy::class, inversedBy="Articles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Category;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->Content;
    }

    public function setContent(string $Content): self
    {
        $this->Content = $Content;

        return $this;
    }

    public function getCategory(): ?BlogCategoryy
    {
        return $this->Category;
    }

    public function setCategory(?BlogCategoryy $Category): self
    {
        $this->Category = $Category;

        return $this;
    }
}
