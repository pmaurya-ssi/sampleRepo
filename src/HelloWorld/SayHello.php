<?php 
namespace HelloWorld;
class SayHello
{
    @csrf
    public static function world()
    {
        return 'Hello World, Composer!';
    }
}
