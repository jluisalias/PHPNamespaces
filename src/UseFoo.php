<?php

/**
 * Created by PhpStorm.
 * User: jlalias
 * Date: 27/05/16
 * Time: 19:04
 */
class UseFoo
{
    public function useFoo(){
        require 'Foo.php';

        $foo = new Foo();
        $foo->doAwesomeThings();
    }
}