<?php

abstract class AbstractVideo implements VideoInterface
{

    protected $name;
    protected $source;

    public function __construct(string $name, string $source)
    {
        $this->name = $name;
        $this->source = $source;
    }

    // Implements the getName() method from VideoInterface
    public function getName(): string
    {
        return $this->name;
    }

    // Implements the getSource() method from VideoInterface
    public function getSource(): string
    {
        return $this->source;
    }

    // Abstract method that must be implemented by child classes
    abstract public function getEmbedCode(): string;
}