<?php

namespace App\Entity;

use App\Repository\PictureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation\Uploadable;
use Vich\UploaderBundle\Mapping\Annotation\UploadableField;


#[ORM\Entity(repositoryClass: PictureRepository::class)]
/**
 * @Uploadable()
 */
class Picture
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getPicture"])]
    private ?string $realName = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getPicture"])]
    private ?string $realPath = null;

    #[ORM\Column(length: 255)]
    #[Groups(["getPicture"])]
    private ?string $publicPath = null;

    #[ORM\Column(length: 50)]
    #[Groups(["getPicture"])]
    private ?string $mimeType = null;

    #[ORM\Column(length: 20)]
    private ?string $status = null;
    /**
     * @var File|null
     * @UploadableField(mapping="pictures", fileNameProperty="realPath")
     */
    private ?File $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRealName(): ?string
    {
        return $this->realName;
    }

    public function setRealName(string $realName): self
    {
        $this->realName = $realName;

        return $this;
    }

    public function getRealPath(): ?string
    {
        return $this->realPath;
    }

    public function setRealPath(string $realPath): self
    {
        $this->realPath = $realPath;

        return $this;
    }

    public function getFile(): ?File
    {
        return $this->file;
    }

    public function setFile(?File $file): ?Picture
    {
        $this->file = $file;
        return $this;
    }

    public function getPublicPath(): ?string
    {
        return $this->publicPath;
    }

    public function setPublicPath(string $publicPath): self
    {
        $this->publicPath = $publicPath;

        return $this;
    }

    public function getMimeType(): ?string
    {
        return $this->mimeType;
    }

    public function setMimeType(string $mimeType): self
    {
        $this->mimeType = $mimeType;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }
}
