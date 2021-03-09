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
        <form action='/postAddType' method='post'>
            {{ csrf_field()}}
            <h2 class='title'>追加する項目名</h2>
            <input type='text' name='typeName'>
            <input type='submit' value='追加'>
        </form>
        
        <div class="added-types">
            <div>現在登録済みの項目：</div>
            
            @foreach($types as $type)
                <div class="type">
                    ・{{$type->typeName}}
                </div>
            @endforeach
            
        </div>
    </body>
</html>
