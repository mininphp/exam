<?php

namespace model;

use DateTime;
class Lead
{
   private int $id;
   private string $firstName;
   private string $lastName;
   private string $phone;
   private string $email;
   private string $content;
   private int $departmentId;
   private DateTime $dateAndTime;

   public function __construct(int $id, string $firstName, string $lastName, string $phone, string $email, string $content, string $departmentId, string $createdAt)
   {
       $this->id = $id;
       $this->firstName = $firstName;
       $this->lastName = $lastName;
       $this->phone = $phone;
       $this->email = $email;
       $this->content = $content;
       $this->departmentId = $departmentId;
       $this->dateAndTime = new DateTime();
   }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getDepartmentId(): int
    {
        return $this->departmentId;
    }

    public function setDepartmentId(int $departmentId): void
    {
        $this->departmentId = $departmentId;
    }

    public function getDateAndTime(): DateTime
    {
        return $this->dateAndTime;
    }

    public function setDateAndTime(DateTime $dateAndTime): void
    {
        $this->dateAndTime = $dateAndTime;
    }

    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}