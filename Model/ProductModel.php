
<?php

class ProductModel
{
    protected $id;
    protected $name;
    protected $price;
    protected $header;
    protected $descriptions;
    protected $imagepath;
    public function __construct($id=0,$name,$price,$header,$descriptions,$imagepath)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->header = $header;
        $this->descriptions = $descriptions;
        $this->imagepath = $imagepath;
    }

    /**
     * @return int|mixed
     */
    public function getId(): mixed
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @return mixed
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }

    /**
     * @return mixed
     */
    public function getImagepath()
    {
        return $this->imagepath;
    }
    public function ShowProduct(){
        return "
            <p>Id - ".$this->id."</p>
            <p>Name - ".$this->name."</p>
            <p>Price - ".$this->price."</p>
            <p>Header - ".$this->header."</p>
            <p>Descript - ".$this->descriptions."</p>
            <p>ImPath - ".$this->imagepath."</p>";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        unset($this->id);
        unset($this->name);
        unset($this->price);
        unset($this->header);
        unset($this->descriptions);
        unset($this->imagepath);
    }
}
