<?php
namespace App;

class Student
{
    private $id;
    private $name;
    private $result;
    private $remark;
    private $grade;
    private $sub1;
    private $sub2;
    private $sub3;
    private $sub4;
    private $sub5;

    public function __construct(int $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setMarks(float $sub1, float $sub2, float $sub3, float $sub4, float $sub5)
    {
        $this->sub1 = $sub1;
        $this->sub2 = $sub2;
        $this->sub3 = $sub3;
        $this->sub4 = $sub4;
        $this->sub5 = $sub5;
    }

    public function totalScore():float
    {
        return $this->total = $this->sub1 +$this->sub2 +$this->sub3 +$this->sub4 +$this->sub5 ;
    }

    public function avgScore(): float
    {
        return $this->avg = $this->total / 5;
    }

    public function grade(): string
    {
        if ($this->avg > 70 && $this->avg <= 100) {
            return $this->grade = 'A';
        }
        if ($this->avg > 60 && $this->avg <= 69.9) {
            return $this->grade = 'B';
        }
        if ($this->avg > 50 && $this->avg <= 59.9) {
            return $this->grade = 'C';
        }
        if ($this->avg > 40 && $this->avg <= 49.9) {
            return $this->grade = 'D';
        }
        if ($this->avg > 0 && $this->avg <= 39.9) {
            return $this->grade = 'F';
        }

        return $this->grade = 'unknown';
    }

    public function remark(): string
    {
        switch ($this->grade) {
            case 'A':
                $this->remark = 'Excelent';
            break;
            case 'B':
                $this->remark = 'Very Good';
            break;
            case 'C':
                $this->remark = 'Good';
            break;
            case 'B':
                $this->remark = 'Fair';
            break;
            default:
                $this->remark = 'Very Poor';
        }

        return $this->remark;
    }

    public function finalResult(): string
    {
        if ($this->sub1 < 40 || $this->sub2 < 40 || $this->sub3 < 40 || $this->sub4 < 40 || $this->sub5 < 40) {
            return $this->result = 'Fail';
        } else {
            return $this->result = 'Pass';
        }
    }
}
