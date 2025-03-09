<?php

namespace DTO;

use DateTime;
use util\XDef;

class DTOLead
{
    private string $firstName;
    private string $lastName;
    private string $phone;
    private string $email;
    private string $content;
    private int $departmentId;
    public function __construct(string $firstName, string $lastName, string $phone, string $email, string $content, string $departmentId)
    {
        $this->firstName = XDef::parseInput($firstName);
        $this->lastName = XDef::parseInput($lastName);
        $this->phone = $phone;
        $this->email = XDef::parseInput($email);
        $this->content = XDef::parseInput($content);
        $this->departmentId = $departmentId;
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
    public function __toString(): string
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}