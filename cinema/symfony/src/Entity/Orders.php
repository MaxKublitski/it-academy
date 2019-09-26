<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\OrdersRepository")
 */
class Orders
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $customer_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $hall_id;

    /**
     * @ORM\Column(type="integer")
     */
    private $seanse_id;

    /**
     * @ORM\Column(type="decimal", precision=5, scale=2)
     */
    private $total_price;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCustomerId(): ?int
    {
        return $this->customer_id;
    }

    public function setCustomerId(int $customer_id): self
    {
        $this->customer_id = $customer_id;

        return $this;
    }

    public function getHallId(): ?int
    {
        return $this->hall_id;
    }

    public function setHallId(int $hall_id): self
    {
        $this->hall_id = $hall_id;

        return $this;
    }

    public function getSeanseId(): ?int
    {
        return $this->seanse_id;
    }

    public function setSeanseId(int $seanse_id): self
    {
        $this->seanse_id = $seanse_id;

        return $this;
    }

    public function getTotalPrice(): ?string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }
}
