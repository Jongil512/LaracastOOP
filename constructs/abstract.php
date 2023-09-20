<?php

abstract class AchievementType
{
    public function name()
    {
        $class = (new ReflectionClass($this))->getShortName();

        return trim(preg_replace('/[A-Z]/', ' $0', $class));
    }

    public function icon()
    {
        return strtolower(str_replace(' ', '-', $this->name())) . '.png';
    }

    public function qualifier($user)
    {

    }
}

class FirstThousandPoints extends AchievementType
{
    public function name()
    {
        return 'First Thousand Points';
    }

    public function icon()
    {
        return 'first-thousand-points.png';
    }

    public function qualifier($user)
    {

    }
}

class FirstBestAnswer extends AchievementType
{
    public function name()
    {
        return 'First Best Answer';
    }

    public function icon()
    {
        return 'first-best-answer.png';
    }

    public function qualifier($user)
    {

    }
}

$achievements = new FirstThousandPoints();
echo $achievements->name();