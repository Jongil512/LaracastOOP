<?php

interface ManageableInterface
{
    public function beManaged();
}

interface WorkableInterface
{
    public function work();
}

interface SleepableInterface
{
    public function sleep();
}

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{
    public function work()
    {
        return 'human working';
    }

    public function sleep()
    {
        return 'human sleeping';
    }

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }
}

class AndroidWorker implements WorkableInterface, ManageableInterface
{
    public function work()
    {
        return 'android working';
    }

    public function beManaged()
    {
        $this->work();
    }
}

class Captain
{
    public function manage(ManageableInterface $worker)
    {
        $worker->beManaged();
    }
}