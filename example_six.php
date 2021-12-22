<?php

interface Country{
    public function popular();
}

class Singapore implements Country{
    public function popular()
    {
        echo "Singapore is popular in Asia" . "<br>";
    }
}

class Japan implements Country{
    public function popular()
    {
        echo "Japan is also popular in Asia";
    }
}

function countries(Country $country){
    $country->popular();
}

countries(new Singapore);
countries(new Japan);


//interface class funtion must call from implements class functions