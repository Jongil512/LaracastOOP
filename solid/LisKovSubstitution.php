<?php

interface LessonRepositoryInterface
{
    /**
     * Fetch all records
     *
     * @return array
     */
    public function getAll();
}

class FileLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        // return through file system
        return [];
    }
}

class DbLessonRepository implements LessonRepositoryInterface
{
    public function getAll()
    {
        return Lesson::all()->toArray();
    }
}

function foo(LessonRepositoryInterface $lesson)
{
    $lessons = $lesson->getAll();
}