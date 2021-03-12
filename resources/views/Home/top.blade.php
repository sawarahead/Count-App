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
        <div class='addWrapper'>
            <a href="/types/create">会計項目を追加する</a>
            <a href="/record">金額を記録する</a>
        </div>
        <div class='countWrapper'>
            <div class='monthly-count'>今月の会計</div>
            <div class='items'>
                <div class='item'>
                    @foreach($types as $type)
                        <div>
                            <a href="/types/{{$type->id}}">{{$type->typeName}}：</a>
                        </div>
                    @endforeach
                </div>
            </div>
            
        </div>
    </body>
</html>
