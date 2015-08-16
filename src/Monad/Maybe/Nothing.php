<?php
namespace Monad\Maybe;

use Common;
use Monad;
use Functor;
use Applicative;

class Nothing implements Maybe
{
    const create = 'Monad\Maybe\None::create';

    public static function create($value)
    {
        return new self();
    }

    public function ap(Applicative\ApplicativeInterface $applicative)
    {
        return $this;
    }

    public function map(callable $transformation)
    {
        return $this;
    }

    public function bind(callable $transformation)
    {
        return $this;
    }

    public function orElse(callable $fn)
    {
        return call_user_func($fn);
    }

    public function valueOf()
    {
        return null;
    }
}