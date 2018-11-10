<?php

class Theater
{

    // demais implementações para a classe funcionar

    public function present(Movie $movie) : void {
        $critics = $movie->getCritics();
        $this->messenger->send($critics, '...');

        $movie->play();

        $movie->pause(5);
        $this->progress->break($critics);
        $movie->finish();

        $this->feedback->request($critics);
    }
}
