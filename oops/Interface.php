<?php

interface BaseMobile
{
    public function display();
    public function touch();
    public function HDD();
    public function RAM();
}

class AppleMobile implements BaseMobile
{
    public function display()
    {
        return 'AMO LED / NODGE';
    }

    public function touch()
    {
        return 'Gasture';
    }

    public function HDD()
    {
        return '64GB';
    }

    public function RAM()
    {
        return 'SNAP DRAGON MI';
    }

    public function ratinaDiaplay()
    {
    }
}
