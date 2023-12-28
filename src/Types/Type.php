<?php

/**
 * - Базовый класс для всех типов
 * - Все типы должны наследорваться от данного класса
 * - В дочернем классе необходимо переопределить константу TYPE
 * - Все свойства, которые участвуют в разметке json-ld, должны быть protected и начинаться с префикса prop_
 */

namespace Vnetby\Schemaorg\Types;

use ReflectionObject;
use Vnetby\Schemaorg\DataTypes\DataType;

abstract class Type
{
    const TYPE = '';
    const TYPE_URL = 'https://schema.org';

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


    /**
     * - Размечает тег, который оборачивает данные
     * @see https://schema.org/docs/gs.html
     * @return string
     */
    static function scope(): string
    {
        return 'itemscope itemtype="' . static::TYPE_URL . '/' . static::TYPE . '"';
    }


    /**
     * - Размечает тег, который содержит значение какого-то свойства
     * @see https://schema.org/docs/gs.html
     * @param string $prop
     * @param string $content
     * @param class-string<Type> $itemScopeClass
     * 
     * @return string
     */
    static function prop(string $prop, string $content = '', string $itemScopeClass = null): string
    {
        $str = 'itemprop="' . $prop . '"';
        if ($content !== '') {
            $str .= ' content="' . $content . '"';
        }
        if ($itemScopeClass !== null) {
            $str .= ' ' . $itemScopeClass::scope();
        }
        return $str;
    }


    /**
     * - Выводит скрытый тег link на сторонний ресурс
     * @param string $url
     * @return string
     */
    static function link(string $url): string
    {
        $str = '<link itemprop="url" href="' . $url . '" />';
        return $str;
    }


    static function meta(string $itemprop, string $content): string
    {
        $str = '<meta itemprop="' . $itemprop . '" content="' . $content . '" />';
        return $str;
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
        if ($value instanceof DataType) {
            $value = (string)$value;
        }
        $this->$key = $value;
        return $this;
    }


    /**
     * - Получает свойство
     */
    function getProp(string $origKey)
    {
        $key = "prop_{$origKey}";
        return $this->$key;
    }
}
