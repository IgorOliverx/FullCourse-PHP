<?php
header('Access-Control-Allow-Origin: *'); //Permite que outros localhosts se comuniquem -> evita erro de cors;

    $data = [
        [
            'imagem' => 'https://blog.dankicode.com/wp-content/uploads/2022/03/4.jpg',
            'conteudo' => 'igor oliveira'
        ],
        [
            'imagem' => 'https://blog.dankicode.com/wp-content/uploads/2022/03/3.jpg',
            'conteudo' => 'celso carvalhp'],
        [
            'imagem' => 'https://blog.dankicode.com/wp-content/uploads/2022/03/2.jpg',
            'conteudo' => 'Se você quer dominar tanto o front-end quanto o back-end, ou seja, ser um desenvolvedor fullstack. Este é sem dúvida o melhor pacote de cursos para isso.Sendo assim, este pacote de cursos conta com mais de 100 projetos práticos onde você criará muito conteúdo e aprenderá uma variedade de técnicas na prática. O preço é muito barato para o que este pacote tem a oferecer. Portanto, você aprenderá tecnologias como: HTML5, CSS3, PHP, Javascript, Python, NodeJS, ReactJS, MySQL, Flutter, Git e MongoDB.'
        ],

    ];

    die(json_encode($data)); // retorna os dados em formato de json
