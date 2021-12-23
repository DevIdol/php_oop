<?
// Dependency Injection
// ========================

// interface Log
// {
//     public function write($log);
// }

// class TextLogger implements Log
// {
//     public function write($log)
//     {
//         echo $log;
//     }
// }

// class DatabaseLogger implements Log
// {
//     public function write($log)
//     {
//         echo $log;
//     }
// }

// class App
// {
//     private $logger;
//     public function __construct(Log $logger)
//     {
//         $this->logger = $logger;
//     }

//     public function run()
//     {
//         $this->logger->write("App is running");
//     }
// }

// $app = new App(new TextLogger);
// $app->run();
// $app = new App(new DatabaseLogger);
// $app->run();
