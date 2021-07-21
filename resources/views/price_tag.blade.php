<!DOCTYPE html>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    <div class="A4">
        <div class="grid grid-cols-3 gap-1">
            <div class="w-full border-2 border-homeshow flex">
                <div class="w-min bg-homeshow h-full text-white family-viola flex">
                    <h3 class=" traditional-vertical-writing text-sm m-auto">HOME SHOW</h3>
                </div>
                <div class="flex flex-col w-full py-3 px-2">
                    <div class="w-24 ml-3"><img src="{{asset('image/logo.jpg')}}"></div>
                    <div class="">
                        <h3 class="font-medium text-xs">Captain น้ำยารองพื้นป้องกันความชื้นแดมป์การ์ด (กล.)</h3>
                    </div>
                    <div class="text-right">
                        <div class="flex">
                            <div class="flex flex-1">

                            </div>
                            <div class="flex flex-1">
                                <div class="ml-auto">
                                    <h1 class="text-5xl font-bold">700</h1>
                                </div>
                                <div class="mr-auto my-auto pl-2 text-left">
                                    <h3 class="font-bold text-xs">.00</h3>
                                    <h3 class="font-bold text-xs">บาท/กล</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ml-auto">
                        <p class="text-mini font-bold">หมายเหตุ: เงื่อนไขเป็นไปตามที่บริษัทกำหนด</p>
                    </div>
                    <div class="px-1 mt-2">
                        <?php echo DNS1D::getBarcodeSVG('4445645656', 'CODE11', 2, 20, 'black', false); ?>
                    </div>
                    <div class="text-center">
                        <h3 class="text-xs font-medium spacing-max">4445645656</h3>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>