<?php

namespace App\Entity;

use App\Repository\MealsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Entity\File as EmbeddedFile;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: MealsRepository::class)]
#[Vich\Uploadable]
class Meals
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    public ?string $mealName = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $ingredients = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $recipe = null;

    #[ORM\Column(length: 50)]
    private ?string $preparationTime = null;

    #[ORM\Column(length: 50)]
    private ?int $calories = null;

    #[ORM\Column(length: 255)]
    private ?string $mealType = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link = null;

    #[ORM\Column(nullable: true)]
    private ?bool $approved = false;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $nutriensTable = null;

    


    #[Vich\UploadableField(mapping: 'meals', fileNameProperty: 'image', size: 'imageSize')]
    public ?File $imageFile = null;

    #[ORM\Column(nullable: true)]
    private ?string $image = null;

    #[ORM\Column(nullable: true)]
    private ?int $imageSize = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $updatedAt = null;



    #[ORM\ManyToOne(inversedBy: 'meals')]
    public ?User $fk_user = null;

    



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMealName(): ?string
    {
        return $this->mealName;
    }

    public function setMealName(string $mealName): static
    {
        $this->mealName = $mealName;

        return $this;
    }

    public function getIngredients(): ?string
    {
        return $this->ingredients;
    }

    public function setIngredients(string $ingredients): static
    {
        $this->ingredients = $ingredients;

        return $this;
    }

    public function getRecipe(): ?string
    {
        return $this->recipe;
    }

    public function setRecipe(string $recipe): static
    {
        $this->recipe = $recipe;

        return $this;
    }

    public function getPreparationTime(): ?string
    {
        return $this->preparationTime;
    }

    public function setPreparationTime(string $preparationTime): static
    {
        $this->preparationTime = $preparationTime;

        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): static
    {
        $this->calories = $calories;

        return $this;
    }

    public function getMealType(): ?string
    {
        return $this->mealType;
    }

    public function setMealType(string $mealType): static
    {
        $this->mealType = $mealType;

        return $this;
    }

    public function getLink(): ?string
    {
        return $this->link;
    }

    public function setLink(?string $link): static
    {
        $this->link = $link;

        return $this;
    }

    public function isApproved(): ?bool
    {
        return $this->approved;
    }

    public function setApproved(bool $approved): static
    {
        $this->approved = $approved;

        return $this;
    }

    public function getNutriensTable(): ?string
    {
        return $this->nutriensTable;
    }

    public function setNutriensTable(?string $nutriensTable): static
    {
        $this->nutriensTable = $nutriensTable;

        return $this;
    }



    public function getFkUser(): ?User
    {
        return $this->fk_user;
    }

    public function setFkUser(?User $fk_user): static
    {
        $this->fk_user = $fk_user;

        return $this;
    }


    public function setImageFile(?File $imageFile = null): void
    {
        $this->imageFile = $imageFile;

        if (null !== $imageFile) {
            // It is required that at least one field changes if you are using doctrine
            // otherwise the event listeners won't be called and the file is lost
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFile(): ?File
    {
        return $this->imageFile;
    }

    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImageSize(?int $imageSize): void
    {
        $this->imageSize = $imageSize;
    }

    public function getImageSize(): ?int
    {
        return $this->imageSize;
    }

}
