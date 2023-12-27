<?php

/**
 * - Базовый класс для всех типов
 * - Все типы должны наследорваться от данного класса
 * - В дочернем классе необходимо переопределить константу TYPE
 * - Все свойства, которые участвуют в разметке json-ld, должны быть protected и начинаться с префикса prop_
 */

namespace Vnet\Schemaorg\Types;

use ReflectionObject;

abstract class Type
{
    const TYPE = '';

    /**
     * @return static
     */
    static function fromArray(array $props)
    {
        $type = new static();
        foreach ($props as $key => $val) {
            $type->setProp($key, $val);
        }
        return $type;
    }


    function __toString()
    {
        $str = $this->toArray();
        echo json_encode($str, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    }


    /**
     * - Генерирует массив с данными разметки
     */
    function toArray(): array
    {
        $res = [
            '@type' => static::TYPE
        ];

        $ref = new ReflectionObject($this);

        $props = $ref->getProperties();

        foreach ($props as $prop) {
            $key = $prop->name;
            if (!preg_match("/^prop_/", $key)) {
                continue;
            }
            $key = preg_replace("/^prop_/", '', $key);
            $prop->setAccessible(true);
            $val = $prop->getValue($this);
            if (!$val) {
                continue;
            }
            $res[$key] = $this->getSingleValue($val);
        }

        return $res;
    }


    protected function getSingleValue($val)
    {
        if (is_array($val)) {
            $res = [];
            foreach ($val as $realVal) {
                $res[] = $this->getSingleValue($realVal);
            }
            return $res;
        }
        if ($val instanceof self) {
            return $val->toArray();
        }
        return $val;
    }


    /**
     * - Устанавливает свойство
     * @return static
     */
    function setProp(string $origKey, $value)
    {
        $key = "prop_{$origKey}";
        $this->$key = $value;
        return $this;
    }
}
