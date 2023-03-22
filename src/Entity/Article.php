<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $articleName = null;

    #[ORM\Column]
    private ?int $articleAmount = null;

    #[ORM\Column(length: 255)]
    private ?string $measureUnity = null;

    #[ORM\Column(length: 255)]
    private ?string $vat = null;

    #[ORM\Column]
    private ?float $unityPrice = null;

    #[ORM\Column]
    private ?int $releaseAmount = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleName(): ?string
    {
        return $this->articleName;
    }

    public function setArticleName(string $articleName): self
    {
        $this->articleName = $articleName;

        return $this;
    }

    public function getArticleAmount(): ?int
    {
        return $this->articleAmount;
    }

    public function setArticleAmount(int $articleAmount): self
    {
        $this->articleAmount = $articleAmount;

        return $this;
    }

    public function getMeasureUnity(): ?string
    {
        return $this->measureUnity;
    }

    public function setMeasureUnity(string $measureUnity): self
    {
        $this->measureUnity = $measureUnity;

        return $this;
    }

    public function getVat(): ?string
    {
        return $this->vat;
    }

    public function setVat(string $vat): self
    {
        $this->vat = $vat;

        return $this;
    }

    public function getUnityPrice(): ?float
    {
        return $this->unityPrice;
    }

    public function setUnityPrice(float $unityPrice): self
    {
        $this->unityPrice = $unityPrice;

        return $this;
    }

    public function getReleaseAmount(): ?int
    {
        return $this->releaseAmount;
    }

    public function setReleaseAmount(int $releaseAmount): self
    {
        $this->releaseAmount = $releaseAmount;

        return $this;
    }
}
