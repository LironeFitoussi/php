<?php
    function render($view, $params) {
        // foreach ($params as $key => $value) {
        //     $$key = $value;
        // }

        extract($params); // Extracts the array keys as variables
        ob_start();
        require __DIR__ . "/views/pages/{$view}.php";
        $content = ob_get_clean();

        // var_dump($content);
        require __DIR__ . '/views/layouts/main.view.php';
    }
    
    $name = "Lirone";

    render("index.view", [
        "name" => $name,
        "sum" => 1560547
    ]);
