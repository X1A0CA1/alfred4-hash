<?php

class e4WorkflowDoWhirlpool extends e4WorkflowCommands
{
    public function run($inQuery, $args)
    {
        $hash = hash('whirlpool', $inQuery);
        if ('XML' == $args[1]) {
            return [
                [
                    'uid' => 'whirlpool',
                    'arg' => $hash,
                    'title' => 'whirlpool: '.$hash,
                    'icon' => 'icon.png',
                    'valid' => 'true',
                ],
            ];
        }

        return $hash;
    }
}
