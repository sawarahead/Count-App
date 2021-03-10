<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Count-App</title>
    </head>
    
    <body>
        <header>
            <a href="/"><h1>Count-App</h1></a>
        </header>
        <div class='record-content'>登録内容</div>
        <div>生活費</div>
        <form action='/' method='post'>
            <input name='foods'>
            <input type='submit' value='記録する'>
        </form>
    </body>
</html>
