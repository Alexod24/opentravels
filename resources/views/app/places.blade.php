@extends('layout.sidebar')
@section('title', 'Explorar')

@section('content')
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-14 sm:px-6 sm:py-16 lg:px-8">
            <div class="sm:flex sm:items-baseline sm:justify-between">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Shop by Category</h2>
                <a href="#" class="hidden text-sm font-semibold text-emerald-600 hover:text-emerald-500 sm:block">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-y-6 sm:grid-cols-2 sm:grid-rows-2 sm:gap-x-6 lg:gap-8">
                <div
                    class="relative group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-h-1 sm:aspect-w-1 sm:row-span-2">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-featured-category.jpg"
                        alt="Two models wearing women's black cotton crewneck tee and off-white cotton crewneck tee."
                        class="object-cover object-center group-hover:opacity-75">
                    <div aria-hidden="true" class="bg-gradient-to-b from-transparent to-black opacity-50 h-full top-0 w-full absolute"></div>
                    <div class="flex items-end p-6 absolute bottom-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    New Arrivals
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-01.jpg"
                        alt="Wooden shelf with gray and olive drab green baseball caps, next to wooden clothes hanger with sweaters."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Accessories
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
                <div class="group aspect-h-1 aspect-w-2 overflow-hidden rounded-lg sm:aspect-none sm:relative sm:h-full">
                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-03-category-02.jpg"
                        alt="Walnut desk organizer set with white modular trays, next to porcelain mug on wooden desk."
                        class="object-cover object-center group-hover:opacity-75 sm:absolute sm:inset-0 sm:h-full sm:w-full">
                    <div aria-hidden="true"
                        class="bg-gradient-to-b from-transparent to-black opacity-50 sm:absolute sm:inset-0"></div>
                    <div class="flex items-end p-6 sm:absolute sm:inset-0">
                        <div>
                            <h3 class="font-semibold text-white">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Workspace
                                </a>
                            </h3>
                            <p aria-hidden="true" class="mt-1 text-sm text-white">Shop now</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6 sm:hidden">
                <a href="#" class="block text-sm font-semibold text-emerald-600 hover:text-emerald-500">
                    Browse all categories
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
        <div class="mx-auto max-w-2xl px-4 pb-16 sm:px-6 sm:pb-24 lg:max-w-7xl lg:px-8">
            <h2 id="products-heading" class="text-2xl font-bold tracking-tight text-gray-900 mb-8">Lugares turisticos</h2>

            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:gap-x-8">
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-01.jpg"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Paper Refill</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Card Holder</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Carry Case</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Heather Gray</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-01.jpg"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Paper Refill</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Card Holder</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Carry Case</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Heather Gray</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-01.jpg"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Paper Refill</h3>
                        <p>$13</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">3 sizes available</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-02.jpg"
                            alt="Paper card sitting upright in walnut card holder on desk."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Card Holder</h3>
                        <p>$64</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Walnut</p>
                </a>
                <a href="#" class="group">
                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg sm:aspect-h-3 sm:aspect-w-2">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-image-card-03.jpg"
                            alt="Textured gray felt pouch for paper cards with snap button flap and elastic pen holder loop."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-4 flex items-center justify-between text-base font-medium text-gray-900">
                        <h3>Focus Carry Case</h3>
                        <p>$32</p>
                    </div>
                    <p class="mt-1 text-sm italic text-gray-500">Heather Gray</p>
                </a>
            </div>
        </div>
    </div>
@endsection
