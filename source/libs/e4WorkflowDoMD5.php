<?php

class e4WorkflowDoMD5 extends e4WorkflowCommands
{
    public function run($inQuery, $args)
    {
        $hash = file_exists($inQuery) ? md5_file($inQuery) : md5($inQuery);
        if ('XML' == $args[1]) {
            return [
                [
                    'uid' => 'md5',
                    'arg' => $hash,
                    'title' => 'MD5: '.$hash,
                    'icon' => 'icon.png',
                    'valid' => 'true',
                ],
            ];
        }

        return $hash;
    }
}
