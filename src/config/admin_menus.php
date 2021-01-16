<?php

use Ebcms\App;
use Ebcms\Router;

return App::getInstance()->execute(function (
    Router $router
): array {
    $res = [];
    $res[] = [
        'title' => '网站设置',
        'url' => $router->buildUrl('/ebcms/web/config'),
        'priority' => 49,
        'icon' => '<svg t="1602828632767" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="62003" width="20" height="20"><path d="M913.430261 500.869565c0-58.590609 36.797217-108.232348 88.308869-128a513.669565 513.669565 0 0 0-56.097391-135.635478 136.97113 136.97113 0 0 1-181.047652-181.092174A515.962435 515.962435 0 0 0 628.891826 0 137.371826 137.371826 0 0 1 500.869565 88.30887 137.171478 137.171478 0 0 1 372.869565 0a513.669565 513.669565 0 0 0-135.635478 56.141913 137.126957 137.126957 0 0 1-28.093217 152.932174 137.371826 137.371826 0 0 1-152.887653 28.16A510.21913 510.21913 0 0 0 0 372.869565 137.371826 137.371826 0 0 1 88.30887 500.869565c0 58.590609-36.797217 108.232348-88.30887 128a513.669565 513.669565 0 0 0 56.141913 135.635478 136.97113 136.97113 0 0 1 180.98087 181.092174A515.650783 515.650783 0 0 0 372.869565 1001.73913a137.371826 137.371826 0 0 1 128.022261-88.308869c58.590609 0 108.232348 36.797217 128 88.308869a513.669565 513.669565 0 0 0 135.635478-56.097391 137.126957 137.126957 0 0 1 28.093218-152.998956 137.371826 137.371826 0 0 1 152.887652-28.13774A510.21913 510.21913 0 0 0 1001.73913 628.869565a137.171478 137.171478 0 0 1-88.308869-128.022261z m-401.719652 152.442435a141.55687 141.55687 0 1 1 0.111304-283.113739 141.55687 141.55687 0 0 1-0.111304 283.113739z" fill="#E9A263" p-id="62004"></path><path d="M731.781565 489.73913c0-34.370783 21.593043-63.510261 51.801044-75.108173a301.345391 301.345391 0 0 0-32.901566-79.560348 80.361739 80.361739 0 0 1-106.228869-106.22887 302.703304 302.703304 0 0 0-79.60487-32.946087A80.584348 80.584348 0 0 1 489.73913 247.696696 80.473043 80.473043 0 0 1 414.630957 195.895652c-27.959652 7.123478-54.761739 18.209391-79.560348 32.946087a80.450783 80.450783 0 0 1-16.473044 89.711304 80.584348 80.584348 0 0 1-89.711304 16.517566A299.341913 299.341913 0 0 0 195.895652 414.630957 80.584348 80.584348 0 0 1 247.696696 489.73913c0 34.370783-21.593043 63.510261-51.801044 75.108174 7.123478 27.959652 18.209391 54.761739 32.946087 79.560348a80.361739 80.361739 0 0 1 106.184348 106.22887 302.525217 302.525217 0 0 0 79.60487 32.946087A80.584348 80.584348 0 0 1 489.73913 731.781565c34.370783 0 63.510261 21.593043 75.108174 51.801044 27.959652-7.123478 54.761739-18.18713 79.560348-32.901566a80.450783 80.450783 0 0 1 16.473044-89.755826 80.584348 80.584348 0 0 1 89.711304-16.517565 299.341913 299.341913 0 0 0 32.990609-79.560348A80.473043 80.473043 0 0 1 731.781565 489.73913z m-235.675826 89.421913a83.033043 83.033043 0 1 1 0.044522-166.066086 83.033043 83.033043 0 0 1-0.044522 166.066086z" fill="#FFC28B" p-id="62005"></path></svg>'
    ];
    return $res;
});
