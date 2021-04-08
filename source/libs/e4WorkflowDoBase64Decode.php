<?php

class e4WorkflowDoBase64Decode extends e4WorkflowCommands
{
    public function run($inQuery, $args)
    {
        $hash = base64_decode($inQuery);
        if ('XML' == $args[1]) {
            return [
                [
                    'uid' => 'base64_decode',
                    'arg' => $hash,
                    'title' => 'base64_decode: '.$hash,
                    'icon' => 'icon.png',
                    'valid' => 'true',
                ],
            ];
        }

        return $hash;
    }
}
