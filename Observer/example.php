<?php

class Theater {
    public function present(Movie $movie) : void {
        $this->getEventManager()
            ->notify(new Event(Event::START, $movie));
        $movie->play();

        $movie->pause(5);
        $this->getEventManager()
            ->notify(new Event(Event::PAUSE, $movie));
        $movie->finish();

        $this->getEventManager()
            ->notify(new Event(Event::END, $movie));
    }
}

$theater = new Theater();
$theater
    ->getEventManager()
    ->listen(Event::START, new MessagesListener())
    ->listen(Event::START, new LightsListener())
    ->listen(Event::PAUSE, new BreakListener())
    ->listen(Event::PAUSE, new AdvertisementListener())
    ->listen(Event::END, new FeedbackListener())
    ->listen(Event::END, new CleaningListener());
$theater->present($movie);
