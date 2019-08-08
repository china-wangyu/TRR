<?php

\WangYu\annotation\Route::rule('/apiShow','Index/index/apiMdDemo','get');
\WangYu\annotation\Route::rule('/apiView','Index/index/apiHtmlDemo','get');
\WangYu\annotation\Route::reflex();
return [];
