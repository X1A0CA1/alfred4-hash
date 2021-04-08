<?php

class e4WorkflowDoSHA1 extends e4WorkflowCommands
{
    public function run($inQuery, $args)
    {
        $hash = file_exists($inQuery) ? sha1_file($inQuery) : sha1($inQuery);
        if ('XML' == $args[1]) {
            return [
                [
                    'uid' => 'sha1',
                    'arg' => $hash,
                    'title' => 'SHA1: '.$hash,
                    'icon' => 'icon.png',
                    'valid' => 'true',
                ],
            ];
        }

        return $hash;
    }
}
