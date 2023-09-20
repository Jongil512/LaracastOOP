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

    abstract public function qualifier($user);
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

class ReachTop50 extends AchievementType
{
    public function qualifier($user)
    {
        throw new Exception('Not yet implemented');
    }
}

$achievements = new ReachTop50();
echo $achievements->qualifier();