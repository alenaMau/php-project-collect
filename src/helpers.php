<?php
namespace Collect;

function collection(array $array = []): Collect
{
   return new Collect($array);
}

function get(Collect $collection, $key = null)
{
    return $collection->get($key);
}

function first(Collect $collection)
{
    return $collection->first();
}

function count(Collect $collection): int
{
    return $collection->count();
}

function toArray(Collect $collection): array
{
    return $collection->toArray();
}

function map(Collect $collection, callable $callback): Collect
{
    return $collection->map($callback);
}

function each(Collect $collection, callable $callback, ...$args): Collect
{
    return $collection->each($callback, ...$args);
}

function push(Collect $collection, $value, $key = null): Collect
{
    return $collection->push($value, $key);
}

function unshift(Collect $collection, $value): Collect
{
    return $collection->unshift($value);
}

function shift(Collect $collection): Collect
{
    return $collection->shift();
}

function pop(Collect $collection): Collect
{
    return $collection->pop();
}

function splice(Collect $collection, $idx, $length = 1): Collect
{
    return $collection->splice($idx, $length);
}