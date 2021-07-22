<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="A4">
        <div class="grid grid-cols-3 gap-x-1">
            @foreach($products as $product)
            <div class="w-full border-2 border-homeshow flex">
                <div class="w-min bg-homeshow h-full text-white family-viola flex">
                    <h3 class="traditional-vertical-writing text-sm m-auto">HOME SHOW</h3>
                </div>
                <div class="flex flex-col w-full py-2 px-2">
                    <div class="w-24 h-8 ml-1 mb-2"><img class="w-full h-full object-cover" src="/image/{{$product->get_image->path}}"></div>
                    <div style="margin-top:7px;">
                        <h3 class="font-medium text-xs">{{$product->name}}</h3>
                    </div>
                    <div>
                        <div class="flex">
                            <div class="flex flex-1">
                                <div class="flex flex-grow justify-end">
                                    <h1 class="text-5xl font-bold text-right">{{ number_format($product->price) }}</h1>
                                </div>
                                <div class="mr-auto my-auto pl-2 text-left flex flex-col">
                                    <h3 class="font-bold text-xs">.00</h3>
                                    <h3 class="font-bold text-xs">บาท/กล</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <p class="text-mini font-bold">หมายเหตุ: เงื่อนไขเป็นไปตามที่บริษัทกำหนด</p>
                    </div>
                    <div class="px-1">
                        <?php echo DNS1D::getBarcodeSVG($product->barcode, 'C128', 1.9, 20, 'black', false); ?>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xs font-medium spacing-max">{{ $product->barcode }}</h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>

</html>