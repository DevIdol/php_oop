<?php

class Model
{
    public function save()
    {
        echo "Saving $this->name and $this->age";
    }
}
// class App
// {
// public function update($data)
// {
// $model = new Model;
// $model->name = $data['name'];
// $model->age = $data['age'];
// $model->save();
// }
// }
// $app = new App;
// $app->update(["name" => "Alice", "age" => 22]);


class Repository
{
    public function update($data)
    {
        $name = $data['name'] ?? "Unknown";
        $age = $data['age'] ?? "Unknown";

        $model = new Model;
        $model->name = $name;
        $model->age = $age;
        $model->save();
    }
}


class App
{
    private $repo;
    public function __construct(Repository $repo)
    {
        $this->repo = $repo;
    }

    public function update($data)
    {
        $this->repo->update($data);
    }
}

$app = new App(new Repository);
$app->update(["name" => "Alice", "age" => 22]);
