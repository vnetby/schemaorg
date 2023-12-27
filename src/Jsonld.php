<?php

/**
 * - Класс для генерации разметки json-ld
 */

namespace Vnet\Schemaorg;

use Vnet\Schemaorg\Types\Type;

class Jsonld
{
    const CONTEXT = 'http://schema.org';

    private ?Type $type = null;


    static function create(Type $type): self
    {
        return new self($type);
    }

    function __construct(Type $type = null)
    {
        $this->type = $type;
    }

    function setType(Type $type): self
    {
        $this->type = $type;
        return $this;
    }

    function render()
    {
        echo $this->generate();
    }

    function generate(): string
    {
        $arr = $this->toArray();
        $json = json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        $str = '<script type="application/ld+json">';
        $str .= $json;
        $str .= '</script>';
        return $str;
    }

    function toArray(): array
    {
        if (!$this->type) {
            return [];
        }
        $res = array_merge(['@context' => self::CONTEXT], $this->type->toArray());
        return $res;
    }
}
