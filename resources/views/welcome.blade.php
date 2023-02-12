<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Bootstrap Tabs with Dynamic Content Loading Example - NiceSnippets.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        .product{
            margin: 55px;
            text-align: center;
            font-size: 20px;
            padding: 15px;
            border-radius: 10px;
            color: #fff;
            background-color: #008B8B;
        }
        .category{
            display: flex;
        }
        body{
            background-color: #d2d2d2;
        }
        .categorys{
            background-color: #fff;
            height: 500px;
        }
    </style>
</head>
<body>
    <div class="container mt-5 justify-content-center">
        <div class="row">
            <div class="col-md-12 categorys">
                <div class="row">
                    <div class="mt-5 ms-3">
                        <div class="row">
                            <div class="col-md-8 mb-3 ">
                                <h4>Laravel Bootstrap Tabs with Dynamic Content Loading Example</h4>
                            </div> 
                            <div class="col-md-3 mb-3 text-end">
                                <strong class="col-md-5 p-0 m-0 text-end"  style="color: #008B8B">NiceSnippets.com</strong>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-tabs">
                        @foreach ($category as $item)
                            <li class=" nav-item">
                                <a href="{{ route('index',['id' => $item->id]) }}" class="nav-link {{ $catTab == $item->id ? 'active' : '' }}">{{ $item->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="tab-content">
                        @foreach ($category as $item)
                            <div class="tab-pane {{ $catTab == $item->id ? 'active' : '' }}" id="home{{ $item->id }}" class="active">
                                <ul class="list-unstyled category">
                                    @foreach ($item->products as $element)
                                            <li class="product">{{ $element->name}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>