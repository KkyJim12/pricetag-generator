<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="A4 p-4 flex">
        <div class="grid grid-cols-3 gap-x-1 gap-y-3 justify-items-center">
            @foreach($products as $product)
            <?php $price = explode('.', $product->price); ?>
            <div class="layout-small borderless flex relative">
                <div class="w-min bg-homeshow h-full text-white family-viola flex">
                    <h3 class="traditional-vertical-writing text-sml m-auto">HOME SHOW</h3>
                </div>
                <div class="flex flex-col w-full py-1 px-2">
                    <div class="w-10 h-3"><img class="w-full h-full object-cover" src="/image/{{$product->get_image->path}}"></div>
                    <div class="absolute mt-3 pr-2">
                        <h3 class="font-medium text-sml break-all">{{$product->name}}</h3>
                    </div>
                    <div class="flex flex-col h-full justify-end">
                        <div>
                            <div class="flex">
                                <div class="flex flex-1">
                                    <div class="flex flex-grow justify-end">
                                        <h1 class="text-3xl font-bold text-right truncate">{{ number_format($price[0]) }}</h1>
                                    </div>
                                    <div class="mr-auto my-auto pl-2 text-left flex flex-col">
                                        <p class="font-bold text-sml">.{{$price[1]}}</h3>
                                        <h3 class="font-bold text-sml">{{$product->unit}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ml-auto">
                            <p class="text-mini font-bold">หมายเหตุ: เงื่อนไขเป็นไปตามที่บริษัทกำหนด</p>
                        </div>
                        <div class="px-1">
                            <?php echo '<img src="data:image/png;base64,' . DNS1D::getBarcodePNG($product->barcode, 'C128', 3, 21, array(1, 1, 1), false) . '" alt="barcode"   />'; ?>
                        </div>
                        <div class="text-center">
                            <h3 class="text-mini font-medium spacing-max">{{ $product->barcode }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>