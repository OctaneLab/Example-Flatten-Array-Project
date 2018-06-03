<?php

/**
 * Class OArray
 */
class OTxt
{
    use DisplayTextTrait;

    public static function t($text = '', $node = 'h1')
    {
        return "<{$node}>{$text}</{$node}>";
    }


}