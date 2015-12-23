<?php

class Foo {
    var $bar = "bar";
    function bar($what) {
        echo "I'm a " , $what, "!\n";
    }
}

$foo = new Foo;
echo $foo->bar, "\n";
$foo->bar("function");

$v8 = new V8Js();
$v8->foo = new Foo;
$v8->executeString('print(PHP.foo.$bar, "\n");');
$v8->executeString('PHP.foo.__call("bar", ["function"])');

// // Hello, v8
// class Foo {
//     var $bar = null;
// }
//
// $v8 = new V8Js();
// $v8->foo = new Foo;
// $v8->executeString('print( "bar" in PHP.foo ? "yes" : "no" );');
