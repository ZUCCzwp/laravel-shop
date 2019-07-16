<?php
/**
 * Created by PhpStorm.
 * User: Mr.Zhangwp
 * Date: 2019/7/16
 * Time: 17:14
 * Nerver Stop Learning.
 */
return [
    'alipay' => [
        'app_id'         => '2016100200645956',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAxcxXcpcpoG/ktxaPZ6C1F/pfuOyCJS2xQfXLmyr8N7Ad1n9/qtZk5F98rZnLoSlCn/GOG3GUShF1a/oo/nV1Sx6Q1O06Cj//f7YfP87TeizFfWljlwjF3Vt9w7/snxs1uM3L67z0XeggCGuXV/42SmlhE+6vMQBATDlfEyzf2zjPhR9Wsyz3HjaUfEhf6+nyCJH7Cz1bUHOfi3dhLrtU0wLGRspaBoQ1J7rfVa9GVqb5fzuIIIuAtVkyLRQi5DQZ5krsdIHnHpZhJfW649QkHToJQ0B0ctMfJu4C1vnhh4reavZDqU7FHBstUQovTqqJ0PlyTRpqe8hRKE8S6ZAUwwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAxcxXcpcpoG/ktxaPZ6C1F/pfuOyCJS2xQfXLmyr8N7Ad1n9/qtZk5F98rZnLoSlCn/GOG3GUShF1a/oo/nV1Sx6Q1O06Cj//f7YfP87TeizFfWljlwjF3Vt9w7/snxs1uM3L67z0XeggCGuXV/42SmlhE+6vMQBATDlfEyzf2zjPhR9Wsyz3HjaUfEhf6+nyCJH7Cz1bUHOfi3dhLrtU0wLGRspaBoQ1J7rfVa9GVqb5fzuIIIuAtVkyLRQi5DQZ5krsdIHnHpZhJfW649QkHToJQ0B0ctMfJu4C1vnhh4reavZDqU7FHBstUQovTqqJ0PlyTRpqe8hRKE8S6ZAUwwIDAQABAoIBAFRf2l2zRbp+gJ3pLbsSvq0/zF1h5hJd72MnqnbCW1yV7+Rz9s21LsyMPu7+z/IrW5RGwkvKo2sFD4XD7IC/Mg2dOELb/wooSqD721CotWVEe+oHbsgaoezO/lLmJ9WnEb+HahlhPQxh3Gg7HRAYDKipUxPhmTHZ3ZOmVXwkhElKriuN+IWc5Z7n9pA7/a2py+/mFypwEXOaA8y7QjUUXnCPUP5flDJIyhw6kwiwSkd/MSc6/fPr41mZkx6XOf2WaHinpP6YWjhiy6wIObLOUFi7nEZoVHT6X78/rQqURnqqjZWRfHRgi51bjv+CuLpH6dgB6MTz1bP0g7uz8A9PzWECgYEA8RM4rEuhnh3iGSshEO+nPOfsxrUkBtvpfgkwPkgtxFJ4EZb+naoqIVG79eCAcUDdvxPXfEL2AKC4BVHrVZ5a/oMc/+QyZHHFaUP0xtVXrSOULe0QY2+WLXdbyeSWW5AGNiComkyMgiECJUsgpzSxww/kYl0m6Wd/ilf/Use5aTcCgYEA0gs6i5pyFKdFOwgEyVkCjjZGRUpr2ySeuMxQTaS+ZTK5y+TdsnQwNPnQCJlg6eRu7onmw64Fz7wpgHEiNAvcWR2oEQ/zRWy0zNFgBr8JrWDCRYrRbXPF5KrssYJBYBoo5kPwPTdsu6frwTDvf/9MzVkhp8+/r78aARakZvvtxtUCgYEAgUh3mh6tO6h2+lxgzT5Yh5cxKZc3DN6ep1KyJpR6xtAbSAOb5F2/XkMA8+lDuHi68p/nbeJTHx8R0PiPpkjYL6mMwcZVJ/zDi6JAAOmkrVtpOf/qTAkplpRuCyWlZNEmI5z8DlOC/r5I8ksJ5eGieyNorT+bgIxan4x1hqVJT50CgYBUmSkvaTlhkC2WJRiocC1TUhDjf6IJVaqIC+KcIyp8X/3tXXTdl2aDL8rWa9BY5CS59tj3H3Q/wy2ECg0YoV5SlltG5AG7iJkZlYrzrKYdKseUcuD/EI44F4/VvvzN1Dt84wgz38rvmiaeXTNZfl5Upv2jNU2jX3j9zzzQLdALMQKBgQDZscuFVaQmrIFp++ElpPSkUCgnQZdDnnCFG0Hbb8gTNuRzTiJvzKIgf4EcZd5FndyFR9f3L0s24fsPIZEofJZfhCTepr7+siteNNrG8/nWFx+F0JmFM0NextLU7wSvLbevbCQUITLw6rYfpY4wOgLztwdEaiHzkB1PAJrboctYMg==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];