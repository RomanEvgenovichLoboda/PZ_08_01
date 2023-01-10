<?php

class Note
{
    protected $note;
    protected $dateTime;
    public function __construct($note,$dateTime)
    {
        $this->note = $note;
        $this->dateTime = $dateTime;
    }

    /**
     * @return mixed
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note): void
    {
        $this->note = $note;
    }

    /**
     * @param mixed $dateTime
     */
    public function setDateTime($dateTime): void
    {
        $this->dateTime = $dateTime;
    }
    function Show(){
        return "<div><p>".$this->note." - ".$this->dateTime."</p></div>";
    }
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this->note);
        unset($this->dateTime);
    }
}